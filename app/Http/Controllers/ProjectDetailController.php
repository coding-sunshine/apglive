<?php

namespace App\Http\Controllers;

use App\Services\FusionCrmService;
use Illuminate\Http\Request;

class ProjectDetailController extends Controller
{
    protected $fusionCrmService;

    public function __construct(FusionCrmService $fusionCrmService)
    {
        $this->fusionCrmService = $fusionCrmService;
    }
    /**
     * Handle the incoming request.
     */
    public function __invoke($projectId)
    {
        $project = $this->fusionCrmService->getProjectDetail($projectId);

        return view('project-detail', compact('project'));
    }
}
