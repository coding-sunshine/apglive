<?php

namespace App\Http\Controllers;

use App\Services\FusionCrmService;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function __construct(FusionCrmService $fusionCrmService)
    {
        $this->fusionCrmService = $fusionCrmService;
    }

    protected $fusionCrmService;
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $lots = $this->fusionCrmService->getLots($request->all());

        return view('listing', compact( 'lots'));
    }
}
