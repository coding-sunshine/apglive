<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait PaginationTrait 
{
    protected function generatePaginationUrls(Request $request, array $data): array
    {
        $queryParams = $request->query();
        $currentUrl = url()->current();
        
        if (!isset($data['meta'])) {
            return ['prev' => null, 'next' => null, 'pages' => []];
        }

        $currentPage = $data['meta']['current_page'];
        $lastPage = $data['meta']['last_page'];
        
        return [
            'prev' => $this->getPreviousPageUrl($currentPage, $queryParams, $currentUrl),
            'next' => $this->getNextPageUrl($currentPage, $lastPage, $queryParams, $currentUrl),
            'pages' => $this->getPageNumbers($currentPage, $lastPage, $queryParams, $currentUrl)
        ];
    }

    private function getPreviousPageUrl(int $currentPage, array $params, string $url): ?string 
    {
        if ($currentPage <= 1) return null;
        return $url . '?' . http_build_query(array_merge($params, ['page' => $currentPage - 1]));
    }

    private function getNextPageUrl(int $currentPage, int $lastPage, array $params, string $url): ?string 
    {
        if ($currentPage >= $lastPage) return null;
        return $url . '?' . http_build_query(array_merge($params, ['page' => $currentPage + 1]));
    }

    private function getPageNumbers(int $currentPage, int $lastPage, array $params, string $url): array 
    {
        $pages = [1 => $this->buildPageUrl(1, $params, $url)];
        
        if ($currentPage > 3) {
            $pages['separator_start'] = '...';
        }

        $startPage = max(2, $currentPage - 1);
        $endPage = min($lastPage - 1, $currentPage + 1);

        for ($i = $startPage; $i <= $endPage; $i++) {
            $pages[$i] = $this->buildPageUrl($i, $params, $url);
        }

        if ($currentPage < $lastPage - 2) {
            $pages['separator_end'] = '...';
        }

        $pages[$lastPage] = $this->buildPageUrl($lastPage, $params, $url);

        return $pages;
    }

    private function buildPageUrl(int $page, array $params, string $url): string 
    {
        return $url . '?' . http_build_query(array_merge($params, ['page' => $page]));
    }
} 