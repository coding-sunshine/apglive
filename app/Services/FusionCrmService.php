<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class FusionCrmService
{
    // Project types mapping
    protected $projectTypes = [
        'houseAndLand' => 1,
        'apartment' => 2,
        'townHouseUnit' => 3,
        'duplex' => 4,
        'dualOccupancy' => 5,
        'commercial' => 6,
        'dualKey' => 7,
        'display' => 8,
        'terraceVillas' => 9,
        'ndis' => 10,
        'tic' => 11,
        'flexiLiving' => 12,
    ];

    protected $apiBaseUrl;
    protected $apiProjectsUrl;

    protected $headers = [];
    protected $subscriberId;

    public function __construct()
    {
        $this->apiBaseUrl = config('services.fusion.api_url');
        $this->apiProjectsUrl = '/projects'; // Adjust the endpoint as needed
        $this->headers = [
            'Content-Type' => 'application/json',
            'API-KEY' => config('services.fusion.key'),
            'API-URL' => config('services.fusion.domain')
        ];
        $this->subscriberId = config('services.fusion.subscriber_id');
    }

    public function fetchProjects($params = [])
    {
        $getParams = array_merge($params, [
            'subscriber' => $this->subscriberId
        ]);
        return Http::retry(3, 100)
            ->withHeaders($this->headers)
            ->get($this->apiBaseUrl . $this->apiProjectsUrl, $getParams)
            ->json();
    }

    public function getCachedProjects($cacheKey, $params, $cacheDuration = [7200, 7500])
    {
        return Cache::flexible($cacheKey, $cacheDuration, function () use ($params) {
            return $this->fetchProjects($params);
        });
    }

    public function getProjectTypeId($type)
    {
        return $this->projectTypes[$type] ?? null;
    }

    public function getProjectsByType($type, $additionalParams = [], $cacheDuration = [7200, 7500], $limit = 12)
    {
        $projectTypeId = $this->getProjectTypeId($type);
        if ($projectTypeId === null) {
            return [];
        }

        $params = array_merge(['projecttype_id' => $projectTypeId, 'limit' => $limit], $additionalParams);
        $cacheKey = $type . 'Projects';

        return $this->getCachedProjects($cacheKey, $params, $cacheDuration);
    }

    public function getProjects($params, $cacheKey, $cacheDuration = [7200, 7500])
    {
        if (!is_array($params)) {
            // Handle the case where $params is not an array
            $params = [];
        }

        return $this->getCachedProjects($cacheKey, $params, $cacheDuration);
    }
}
