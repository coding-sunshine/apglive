<?php

use App\Services\FusionCrmService;
use Carbon\Carbon;
use Livewire\Volt\Component;

new class extends Component {
    public $title;
    public $type;
    public $attr;
    public $items = [];

    public function mount($title, $type, $attr)
    {
        $this->title = $title;
        $this->type = $type;
        $this->attr = $attr;
        $this->fetchItems();
    }

    public function fetchItems()
    {
        $fusionCrmService = new FusionCrmService();
        $projects = $fusionCrmService->getProjects($this->attr, $this->type)['data'];
        
        $this->items = collect($projects)->map(function ($project) {
            return [
                'id' => $project['id'],
                'tags' => collect([
                    $project['is_featured'] ? 'Featured' : null,
                    $project['is_cashflow_positive'] ? 'Cash Flow Positive' : null,
                    $project['is_ndis'] ? 'NDIS' : null,
                    $project['is_smsf'] ? 'SMSF' : null,
                    $project['is_firb'] ? 'FIRB' : null,
                    $project['is_co_living'] ? 'Coliving' : null,
                ])->filter()->values()->all(),
                'price' => number_format($project['avg_price'], 0, '.', ','),
                'updated_at' => Carbon::parse($project['updated_at'])->diffForHumans(),
                'image_url' => $project['first_image_url'],
                'type_title' => $project['pt_title'],
                'display_title' => $project['title'],
                'address' => str($project['full_address'])->rtrim(','),
                'bedrooms' => $project['min_bedrooms'],
                'bathrooms' => $project['min_bathrooms'],
                'living_area' => $project['min_living_area'],
                'garage' => $project['min_lot_garage'],
                'agent_image' => $project['agent_image'] ?? '/assets/images/avatar.png',
                'agent_name' => $project['agent_name'] ?? config('app.name'),
            ];
        })->all();
    }
}; ?>

<div class="3block-carusel nav-disable owl-carousel">
    @foreach($items as $item)
        <x-property-card 
            :item="$item" 
            route-name="project" 
        />
    @endforeach
</div>
