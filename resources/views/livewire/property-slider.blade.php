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
        
        // Debug information
        logger()->info('Fetching items for slider', [
            'title' => $this->title,
            'type' => $this->type,
            'attr' => $this->attr
        ]);
        
        $lots = $fusionCrmService->getLots($this->attr, $this->type)['data'];
        
        // Debug the response
        logger()->info('Received lots', [
            'count' => count($lots),
            'first_lot' => isset($lots[0]) ? $lots[0]['id'] : null
        ]);

        $this->items = collect($lots)->map(function ($lot) {
            return [
                'id' => $lot['id'],
                'tags' => collect([
                    $lot['project']['is_featured'] ? 'Featured' : null,
                    $lot['project']['is_cashflow_positive'] ? 'Cash Flow Positive' : null,
                    $lot['project']['is_ndis'] ? 'NDIS' : null,
                    $lot['project']['is_smsf'] ? 'SMSF' : null,
                    $lot['project']['is_firb'] ? 'FIRB' : null,
                    $lot['project']['is_co_living'] ? 'Coliving' : null,
                ])->filter()->values()->all(),
                'price' => number_format($lot['price'], 0, '.', ','),
                'updated_at' => Carbon::parse($lot['updated_at'])->diffForHumans(),
                'image_url' => $lot['project']['first_image_url'],
                'type_title' => $lot['property_type'],
                'display_title' => 'Lot '. $lot['title'].' - '.$lot['project']['title'],
                'address' => str($lot['project']['full_address'])->rtrim(','),
                'bedrooms' => $lot['bedrooms'] ?? $lot['project']['min_bedrooms'],
                'bathrooms' => $lot['bathrooms'] ?? $lot['project']['min_bathrooms'],
                'living_area' => $lot['living_area'] ?? $lot['project']['min_living_area'],
                'garage' => $lot['garage'] ?? $lot['project']['min_lot_garage'],
                'agent_image' => $lot['agent_image'] ?? '/assets/images/avatar.png',
                'agent_name' => $lot['agent_name'] ?? config('app.name'),
            ];
        })->all();
    }
}; ?>

<div class="3block-carusel nav-disable owl-carousel">
    @if(count($items) > 0)
        @foreach($items as $item)
            <x-property-card 
                :item="$item" 
                route-name="property" 
            />
        @endforeach
    @else
        <div class="alert alert-info">No properties found for {{ $title }}</div>
    @endif
</div>
