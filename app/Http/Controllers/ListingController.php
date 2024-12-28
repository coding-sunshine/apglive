<?php

namespace App\Http\Controllers;

use App\Services\FusionCrmService;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    protected $fusionCrmService;

    public function __construct(FusionCrmService $fusionCrmService)
    {
        $this->fusionCrmService = $fusionCrmService;
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $lots = $this->fusionCrmService->getLots($request->all());

        // Process pagination URLs
        $pagination = $this->generatePaginationUrls($request, $lots);

        return view('listing', compact('lots', 'pagination'));
    }

    /**
     * Generate pagination URLs based on the current request and lots meta data.
     */
    private function generatePaginationUrls(Request $request, $lots)
    {
        $queryParams = $request->query();
        $currentUrl = url()->current();

        $pagination = [
            'prev' => null,
            'next' => null,
            'pages' => [],
        ];

        if (isset($lots['meta'])) {
            $currentPage = $lots['meta']['current_page'];
            $lastPage = $lots['meta']['last_page'];

            // Previous Page URL
            if ($currentPage > 1) {
                $prevParams = array_merge($queryParams, ['page' => $currentPage - 1]);
                $pagination['prev'] = $currentUrl . '?' . http_build_query($prevParams);
            }

            // Next Page URL
            if ($currentPage < $lastPage) {
                $nextParams = array_merge($queryParams, ['page' => $currentPage + 1]);
                $pagination['next'] = $currentUrl . '?' . http_build_query($nextParams);
            }

            // Generate Page Numbers
            $pagination['pages'] = [
                1 => $currentUrl . '?' . http_build_query(array_merge($queryParams, ['page' => 1])),
            ];

            if ($currentPage > 3) {
                $pagination['pages']['separator_start'] = '...';
            }

            $startPage = max(2, $currentPage - 1);
            $endPage = min($lastPage - 1, $currentPage + 1);

            for ($i = $startPage; $i <= $endPage; $i++) {
                $pagination['pages'][$i] = $currentUrl . '?' . http_build_query(array_merge($queryParams, ['page' => $i]));
            }

            if ($currentPage < $lastPage - 2) {
                $pagination['pages']['separator_end'] = '...';
            }

            $pagination['pages'][$lastPage] = $currentUrl . '?' . http_build_query(array_merge($queryParams, ['page' => $lastPage]));
        }

        return $pagination;
    }


}
