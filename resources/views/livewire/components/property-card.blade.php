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
                     alt="{{ $item['type_title'] ?? '' }}" 
                     style="height: 250px;">
            </a>
            <a href="{{ route('listings', ['type' => $item['type_title']]) }}" 
               class="listing-ctg text-white">
                <i class="fa-solid fa-building"></i>
                <span>{{ $item['type_title'] ?? '' }}</span>
            </a>
        </div>
        <div class="property_text p-4">
            <span class="listing-price">${{ $item['price'] ?? 'N/A' }}<small> </small></span>
            <h5 class="listing-title">
                <a href="{{ route($routeName, $item['id']) }}">{{ $item['display_title'] }}</a>
            </h5>
            <span class="listing-location">
                <i class="fas fa-map-marker-alt"></i>{{ $item['address'] ?? 'N/A' }}
            </span>
            <ul class="d-flex quantity font-fifteen">
                <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>{{ $item['bedrooms'] ?? 'N/A' }}</li>
                <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>{{ $item['bathrooms'] ?? 'N/A' }}</li>
                <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>{{ $item['living_area'] ?? 'N/A' }}</li>
                <li title="Area"><span><i class="fa-solid fa-car"></i></span>{{ $item['garage'] ?? 'N/A' }}</li>
            </ul>
        </div>
        <div class="d-flex align-items-center post-meta mt-2 py-3 px-4 border-top">
            <div class="agent">
                <a href="javascript:void(0);" class="d-flex text-general align-items-center">
                    <img class="rounded-circle me-2"
                         src="{{ $item['agent_image'] ?? '/assets/images/avatar.png' }}"
                         alt="{{ $item['agent_name'] ?? config('app.name') }}">
                    <span>{{ $item['agent_name'] ?? config('app.name') }}</span>
                </a>
            </div>
            <div class="post-date ms-auto">
                <span>{{ $item['updated_at'] ?? 'N/A' }}</span>
            </div>
        </div>
    </div>
</div> 