<?php

use App\Services\FusionCrmService;
use Carbon\Carbon;
use Livewire\Volt\Component;

new class extends Component {
    public $title = '';
    public $type = '';
    public $attr = [];
    public $lots = [];
    private $fusionCrmService;

    public function mount()
    {
        $this->fetchProjects();
    }

    public function fetchProjects()
    {
        $this->fusionCrmService = new FusionCrmService();
        $this->lots = $this->fusionCrmService->getLots($this->attr, $this->type)['data'];
        foreach ($this->lots as $key => $lot) {
            $this->lots[$key]['price'] = number_format($lot['price'], 0, '.', ',');
            $this->lots[$key]['updated_at'] = Carbon::parse($lot['updated_at'])->diffForHumans();
            $this->lots[$key]['tags'] = [];
            if ($lot['project']['is_featured']) {
                $this->lots[$key]['tags'][] = 'Featured';
            }
            if ($lot['project']['is_cashflow_positive']) {
                $this->lots[$key]['tags'][] = 'Cash Flow Positive';
            }
            if ($lot['project']['is_ndis']) {
                $this->lots[$key]['tags'][] = 'NDIS';
            }
            if ($lot['project']['is_smsf']) {
                $this->lots[$key]['tags'][] = 'SMSF';
            }
            if ($lot['project']['is_firb']) {
                $this->lots[$key]['tags'][] = 'FIRB';
            }
            if ($lot['project']['is_co_living']) {
                $this->lots[$key]['tags'][] = 'Coliving';
            }
        }
    }
};

?>

<div class="full-row bg-light" style="padding: 40px 0;">
    <div class="container">
        <div class="row">
            <div class="col mb-4">
                <div class="align-items-center d-flex">
                    <div class="me-auto">
                        <h2 class="d-table">{{ $title }}</h2>
                    </div>
                    <a href="{{ route('listings', array_merge(['type' => $this->type],$this->attr)) }}" class="ms-auto btn-link">View All Properties</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="3block-carusel nav-disable owl-carousel">
                    @foreach($this->lots as $lot)
                        <div class="item">
                            <!-- Property Grid -->
                            <div class="property-grid-1 property-block bg-white transation-this">
                                <div
                                    class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                                    <div class="cata position-absolute">
                                        @foreach($lot['tags'] as $tag)
                                            @php
                                                $tagClass = match($tag) {
                                                    'Featured' => 'bg-primary',
                                                    'Cash Flow Positive' => 'bg-success',
                                                    'NDIS' => 'bg-info',
                                                    'SMSF' => 'bg-warning',
                                                    'FIRB' => 'bg-danger',
                                                    'Coliving' => 'bg-dark',
                                                    default => 'bg-secondary',
                                                };
                                            @endphp
                                            <span class="sale {{ $tagClass }} text-white">{{ $tag }}</span>
                                        @endforeach
                                    </div>
                                    <a href="{{ route('project' , $lot['id'] ) }}"><img
                                            src="{{ $lot['project']['first_image_url'] ?? '/assets/images/no-image.png' }}"
                                            alt="{{ $lot['property_type'] ?? '' }}" style="height: 250px;"></a>
                                    <a href="{{ route('listings' , ['type' =>  $lot['property_type'] ] ) }}" class="listing-ctg text-white"><i
                                            class="fa-solid fa-building"></i><span>{{  $lot['property_type'] ?? '' }}</span></a>
                                    <!--
                                    <ul class="position-absolute quick-meta">
                                        <li>
                                            <a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a>
                                        </li>
                                        <li class="md-mx-none">
                                            <a class="quick-view" href="#quick-view" title="Quick View"><i
                                                    class="flaticon-zoom-increasing-symbol flat-mini"></i></a>
                                        </li>
                                    </ul>
                                    -->
                                </div>
                                <div class="property_text p-4">
                                    <span
                                        class="listing-price">${{ $lot['price'] ?? 'N/A' }}<small> </small></span>
                                    <h5 class="listing-title"><a href="{{ route('property' , $lot['id'] ) }}">{{ 'Lot - '. $lot['title'].'-'.$lot['project']['title'] ?? 'Property' }}</a></h5>
                                    <span class="listing-location"><i class="fas fa-map-marker-alt"></i>{{ str($lot['project']['full_address'])->rtrim(',') ?? 'N/A' }}</span>
                                    <ul class="d-flex quantity font-fifteen">
                                        <li title="Beds"><span><i
                                                    class="fa-solid fa-bed"></i></span>{{ $lot['bedrooms'] ?? $lot['project']['min_bedrooms'] ?? 'N/A' }}
                                        </li>
                                        <li title="Baths"><span><i
                                                    class="fa-solid fa-shower"></i></span>{{ $lot['bathrooms'] ??  $lot['project']['min_bathrooms'] ?? 'N/A' }}
                                        </li>
                                        <li title="Area"><span><i
                                                    class="fa-solid fa-vector-square"></i></span>{{ $lot['living_area'] ?? $lot['project']['min_living_area'] ?? 'N/A' }}
                                        </li>
                                        <li title="Area"><span><i
                                                    class="fa-solid fa-car"></i></span>{{ $lot['garage'] ?? $lot['project']['min_lot_garage'] ?? 'N/A' }}
                                        </li>
                                    </ul>
                                </div>
                                <div class="d-flex align-items-center post-meta mt-2 py-3 px-4 border-top">
                                    <div class="agent">
                                        <a href="javascript:void(0);" class="d-flex text-general align-items-center"><img
                                                class="rounded-circle me-2"
                                                src="{{ $lot['agent_image'] ?? '/assets/images/avatar.png' }}"
                                                alt="{{ $lot['agent_name'] ?? env('APP_NAME') }}"><span>{{ $lot['agent_name'] ?? env('APP_NAME') }}</span></a>
                                    </div>
                                    <div class="post-date ms-auto"><span>{{ $lot['updated_at'] ?? 'N/A' }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
