<?php

namespace App\Http\Controllers;

use App\Services\FusionCrmService;
use Illuminate\Http\Request;

class ListingDetailController extends Controller
{
    protected $fusionCrmService;

    public function __construct(FusionCrmService $fusionCrmService)
    {
        $this->fusionCrmService = $fusionCrmService;
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke($propertyId)
    {
        $lot = $this->fusionCrmService->getLotDetail($propertyId);

        return view('listing-detail', compact('lot'));
    }
}
