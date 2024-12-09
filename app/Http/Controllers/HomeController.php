<?php

namespace App\Http\Controllers;

use App\Services\FusionCrmService;
use Illuminate\Http\Request;

class HomeController extends Controller
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
        $latestProjects = $this->fusionCrmService->getProjects(['limit' => 12], 'latestProjects');
        $featuredProjects = $this->fusionCrmService->getProjects(['is_featured_only' => '1', 'limit' => 12], 'featuredProjects');
        $ndisProjects = $this->fusionCrmService->getProjects(['ndis' => '1', 'limit' => 12], 'ndisProjects');
        $smsfProjects = $this->fusionCrmService->getProjects(['smsf' => '1', 'limit' => 12], 'smsfProjects');
        $firbProjects = $this->fusionCrmService->getProjects(['firb' => '1', 'limit' => 12], 'firbProjects');
        $colivingProjects = $this->fusionCrmService->getProjects(['coliving' => '1', 'limit' => 12], 'colivingProjects');
        $cashFlowPositiveProjects = $this->fusionCrmService->getProjects(['is_cashflow_positive' => '1', 'limit' => 12], 'cashFlowPositiveProjects');
        $dualKeyProjects = $this->fusionCrmService->getProjectsByType('dualKey');

        return view('home', compact('featuredProjects', 'latestProjects', 'ndisProjects', 'smsfProjects', 'firbProjects', 'colivingProjects', 'cashFlowPositiveProjects', 'dualKeyProjects'));
    }
}
