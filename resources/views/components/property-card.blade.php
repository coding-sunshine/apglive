@props(['item', 'routeName'])

<div class="item">
    <div class="property-grid-1 property-block bg-white transation-this">
        <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
            <div class="cata position-absolute">
                @foreach($item['tags'] as $tag)
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
            <a href="{{ route($routeName, $item['id']) }}">
                <img src="{{ $item['image_url'] ?? '/assets/images/no-image.png' }}"
                     alt="{{ $item['type_title'] }}"
                     style="height: 250px;">
            </a>
            <a href="{{ route('listings', ['type' => $item['type_title']]) }}"
               class="listing-ctg text-white">
                <i class="fa-solid fa-building"></i>
                <span>{{ $item['type_title'] }}</span>
            </a>
        </div>
        <div class="property_text p-4">
            <span class="listing-price">${{ $item['price'] }}<small> </small></span>
            <h5 class="listing-title" title="{{ $item['display_title'] }}">
                <a href="{{ route($routeName, $item['id']) }}">{{ \Illuminate\Support\Str::limit($item['display_title'], 35) }}</a>
            </h5>
            <span class="listing-location">
                <i class="fas fa-map-marker-alt"></i> {{ $item['address'] }}
            </span>
            <ul class="d-flex quantity font-fifteen">
                <li title="Beds">
                    <span><i class="fa-solid fa-bed"></i></span>{{ $item['bedrooms'] }}
                </li>
                <li title="Baths">
                    <span><i class="fa-solid fa-shower"></i></span>{{ $item['bathrooms'] }}
                </li>
                <li title="Area">
                    <span><i class="fa-solid fa-vector-square"></i></span>{{ $item['living_area'] }}
                </li>
                <li title="Garage">
                    <span><i class="fa-solid fa-car"></i></span>{{ $item['garage'] }}
                </li>
            </ul>
        </div>
    </div>
</div>
