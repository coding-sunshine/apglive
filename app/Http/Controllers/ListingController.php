<?php

namespace App\Http\Controllers;

use App\Services\FusionCrmService;
use App\Traits\PaginationTrait;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    use PaginationTrait;

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
}
