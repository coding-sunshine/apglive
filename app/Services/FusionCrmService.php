<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class FusionCrmService
{
    protected const CACHE_DURATION = [7200, 7500];

    protected const PROJECT_TYPES = [
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
    protected $apiLotsUrl;

    protected $headers = [];
    protected $subscriberId;

    public function __construct()
    {
        $this->apiBaseUrl = config('services.fusion.api_url');
        $this->apiProjectsUrl = '/projects'; // Adjust the endpoint as needed
        $this->apiLotsUrl = '/lots'; // Adjust the endpoint as needed
        $this->headers = [
            'Content-Type' => 'application/json',
            'API-KEY' => config('services.fusion.key'),
            'API-URL' => config('services.fusion.domain')
        ];
        $this->subscriberId = config('services.fusion.subscriber_id');
    }

    protected function makeRequest(string $endpoint, array $params = []): array
    {
        $params = array_merge($params, ['subscriber' => $this->subscriberId]);
        
        return Http::retry(3, 100)
            ->withHeaders($this->headers)
            ->get($this->apiBaseUrl . $endpoint, $params)
            ->json();
    }

    public function fetchProjects($params = [])
    {
        return $this->makeRequest($this->apiProjectsUrl, $params);
    }

    public function fetchLots($params = [])
    {
        return $this->makeRequest($this->apiLotsUrl, $params);
    }

    protected function cacheResponse(string $key, callable $callback): array
    {
        return Cache::flexible($key, self::CACHE_DURATION, $callback);
    }

    public function getCachedProjects($cacheKey, $params, $cacheDuration = [7200, 7500], $getprojecttype = null)
    {
        return Cache::flexible($cacheKey, $cacheDuration, function () use ($params, $getprojecttype, $cacheKey) {
            if ($getprojecttype) {
                return $this->getProjectsByType($getprojecttype['title'], $params);
            }
            return $this->fetchProjects($params);
        });
    }

    public function getCachedLots($cacheKey, $params, $cacheDuration = [7200, 7500], $getprojecttype = null)
    {
        return Cache::flexible($cacheKey, $cacheDuration, function () use ($params, $getprojecttype) {
            if ($getprojecttype) {
                return $this->getLotsByProjectType($getprojecttype['title'], $params);
            }
            return $this->fetchLots($params);
        });
    }

    public function getProjectTypeId($type)
    {
        return self::PROJECT_TYPES[$type] ?? null;
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

    public function getLotsByProjectType($type, $additionalParams = [], $cacheDuration = [7200, 7500], $limit = 12)
    {
        $projectTypeId = $this->getProjectTypeId($type);
        if ($projectTypeId === null) {
            return [];
        }

        $params = array_merge(['projecttype_id' => $projectTypeId, 'limit' => $limit], $additionalParams);
        $cacheKey = $type . 'Lots';

        return $this->getCachedLots($cacheKey, $params, $cacheDuration);
    }

    public function getProjects($params = [], $cacheKey, $cacheDuration = [7200, 7500])
    {
        // check if $cacheKey is in the PROJECT_TYPES array
        $getprojecttype = null;
        if (array_key_exists($cacheKey, self::PROJECT_TYPES)) {
            $getprojecttype = ['title' => $cacheKey];
        }

        $cacheKey = $cacheKey . '_' . md5(json_encode($params));

        return $this->getCachedProjects($cacheKey, $params, $cacheDuration, $getprojecttype);
    }

    public function getLots($params = [], $cacheKey = 'lotsSearch', $cacheDuration = [7200, 7500])
    {
        // check if $cacheKey is in the PROJECT_TYPES array
        $getprojecttype = null;
        if (array_key_exists($cacheKey, self::PROJECT_TYPES)) {
            $getprojecttype = ['title' => $cacheKey];
        }

        // Generate a unique cache key based on the parameters
        $cacheKey = $cacheKey . '_' . md5(json_encode($params));

        return $this->getCachedLots($cacheKey, $params, $cacheDuration, $getprojecttype);
    }

    public function getLotDetail($propertyId)
    {
        $url = $this->apiBaseUrl . $this->apiLotsUrl . '/' . $propertyId;
        return Http::retry(3, 100)
            ->withHeaders($this->headers)
            ->get($url, ['subscriber' => $this->subscriberId])
            ->json();
    }

    public function getProjectDetail($projectId)
    {
        $url = $this->apiBaseUrl . $this->apiProjectsUrl . '/' . $projectId;
        return Http::retry(3, 100)
            ->withHeaders($this->headers)
            ->get($url, [
                'subscriber' => $this->subscriberId,
                'related' => 'status,projecttype,address,developer,similar_projects'
            ])
            ->json();
    }
}
