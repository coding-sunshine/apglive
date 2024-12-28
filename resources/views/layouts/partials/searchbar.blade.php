<!--============== Property Search Form Start ==============-->
<div class="full-row p-0 property-search-form on-slider">
    <div class="container">
        <div class="row">
            <div class="col">
                <form class="bg-white shadow-sm quick-search form-icon-right position-relative" method="GET" action="{{ route('listings') }}">
                    <!-- Preserve existing query parameters -->
                    @foreach(request()->except(['page', 'lat', 'lng', 'radius', 'suburb', 'state', 'build_status', 'project_type', 'bedrooms', 'bathrooms', 'selected_min_price', 'selected_max_price', 'sort_by', 'ndis', 'smsf', 'firb', 'co_living', 'is_favourite_only', 'is_featured_only', 'is_rent_to_sell', 'is_exclusive', 'is_high_rental', 'is_high_capital']) as $key => $value)
                        <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                    @endforeach

                    <div class="row row-cols-lg-6 row-cols-md-3 row-cols-1 g-3">
                        <!-- Location Search -->
                        <div class="col">
                            <div class="position-relative">
                                <input type="text" class="form-control location-search" name="suburb" 
                                       value="{{ request('suburb') }}" placeholder="Enter Suburb...">
                                <input type="hidden" name="lat" value="{{ request('lat') }}">
                                <input type="hidden" name="lng" value="{{ request('lng') }}">
                                <input type="hidden" name="radius" value="{{ request('radius', 50) }}">
                                <i class="flaticon-placeholder flat-mini icon-font y-center text-dark"></i>
                            </div>
                        </div>

                        <!-- Property Type -->
                        <div class="col">
                            <select class="form-control" name="project_type">
                                <option value="">Property Types</option>
                                <option value="1" {{ request('project_type') == '1' ? 'selected' : '' }}>House and Land</option>
                                <option value="2" {{ request('project_type') == '2' ? 'selected' : '' }}>Apartment</option>
                                <option value="3" {{ request('project_type') == '3' ? 'selected' : '' }}>Town House/Unit</option>
                                <option value="4" {{ request('project_type') == '4' ? 'selected' : '' }}>Duplex</option>
                                <option value="5" {{ request('project_type') == '5' ? 'selected' : '' }}>Dual Occupancy</option>
                                <option value="6" {{ request('project_type') == '6' ? 'selected' : '' }}>Commercial</option>
                                <option value="7" {{ request('project_type') == '7' ? 'selected' : '' }}>Dual Key</option>
                                <option value="8" {{ request('project_type') == '8' ? 'selected' : '' }}>Display</option>
                                <option value="9" {{ request('project_type') == '9' ? 'selected' : '' }}>Terrace/Villas</option>
                                <option value="10" {{ request('project_type') == '10' ? 'selected' : '' }}>NDIS</option>
                                <option value="11" {{ request('project_type') == '11' ? 'selected' : '' }}>TIC</option>
                                <option value="12" {{ request('project_type') == '12' ? 'selected' : '' }}>Flexi Living</option>
                            </select>
                        </div>

                        <!-- State -->
                        <div class="col">
                            <select class="form-control" name="state">
                                <option value="">Select State</option>
                                @foreach(['NSW', 'VIC', 'QLD', 'WA', 'SA', 'TAS', 'NT', 'ACT'] as $state)
                                    <option value="{{ $state }}" {{ request('state') == $state ? 'selected' : '' }}>
                                        {{ $state }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Price Range -->
                        <div class="col">
                            <div class="position-relative">
                                <button type="button" class="form-control price-toggle toggle-btn" data-target="#data-range-price">
                                    Price <i class="fas fa-angle-down font-mini icon-font y-center text-dark"></i>
                                </button>
                                <div id="data-range-price" class="price_range price-range-toggle">
                                    <div class="area-filter price-filter">
                                        <div class="price-range-slider"></div>
                                        <div class="price-range-amount d-flex justify-content-between mt-2">
                                            <input type="text" class="price-min" name="selected_min_price" value="{{ request('selected_min_price', '50000') }}" readonly>
                                            <input type="text" class="price-max" name="selected_max_price" value="{{ request('selected_max_price', '5000000') }}" readonly>
                                        </div>
                                        <div class="slider-range" data-min="50000" data-max="5000000"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Advanced Options Button -->
                        <div class="col">
                            <div class="position-relative">
                                <button type="button" class="form-control text-start toggle-btn" data-target="#aditional-check">
                                    Filters <i class="fas fa-ellipsis-v font-mini icon-font y-center text-dark"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Search Button -->
                        <div class="col">
                            <button type="submit" class="btn btn-primary w-100">Search</button>
                        </div>

                        <!-- Advanced Features -->
                        <div id="aditional-check" class="aditional-features p-5">
                            <h5 class="mb-3">Additional Filters</h5>
                            
                            <div class="row mb-4">
                                <!-- Bedrooms -->
                                <div class="col-md-3">
                                    <select class="form-control" name="bedrooms">
                                        <option value="">Bedrooms</option>
                                        @foreach(range(1, 6) as $i)
                                            <option value="{{ $i }}" {{ request('bedrooms') == $i ? 'selected' : '' }}>
                                                {{ $i }}+ Beds
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Bathrooms -->
                                <div class="col-md-3">
                                    <select class="form-control" name="bathrooms">
                                        <option value="">Bathrooms</option>
                                        @foreach(range(1, 4) as $i)
                                            <option value="{{ $i }}" {{ request('bathrooms') == $i ? 'selected' : '' }}>
                                                {{ $i }}+ Baths
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Build Status -->
                                <div class="col-md-3">
                                    <select class="form-control" name="build_status">
                                        <option value="">Build Status</option>
                                        <option value="completed" {{ request('build_status') == 'completed' ? 'selected' : '' }}>Completed</option>
                                        <option value="off_plan" {{ request('build_status') == 'off_plan' ? 'selected' : '' }}>Off Plan</option>
                                    </select>
                                </div>

                                <!-- Sort By -->
                                <div class="col-md-3">
                                    <select class="form-control" name="sort_by">
                                        <option value="">Sort By</option>
                                        <option value="price_asc" {{ request('sort_by') == 'price_asc' ? 'selected' : '' }}>Price (Low to High)</option>
                                        <option value="price_desc" {{ request('sort_by') == 'price_desc' ? 'selected' : '' }}>Price (High to Low)</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Property Features -->
                            <div class="row mb-4">
                                <div class="col-md-3">
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" name="ndis" value="1" 
                                               {{ request('ndis') ? 'checked' : '' }} id="ndis">
                                        <label class="form-check-label" for="ndis">NDIS</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" name="smsf" value="1" 
                                               {{ request('smsf') ? 'checked' : '' }} id="smsf">
                                        <label class="form-check-label" for="smsf">SMSF</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" name="firb" value="1" 
                                               {{ request('firb') ? 'checked' : '' }} id="firb">
                                        <label class="form-check-label" for="firb">FIRB</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" name="co_living" value="1" 
                                               {{ request('co_living') ? 'checked' : '' }} id="co_living">
                                        <label class="form-check-label" for="co_living">Co-Living</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" name="is_rent_to_sell" value="1" 
                                               {{ request('is_rent_to_sell') ? 'checked' : '' }} id="is_rent_to_sell">
                                        <label class="form-check-label" for="is_rent_to_sell">Rent to Sell</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" name="is_exclusive" value="1" 
                                               {{ request('is_exclusive') ? 'checked' : '' }} id="is_exclusive">
                                        <label class="form-check-label" for="is_exclusive">Exclusive</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" name="is_high_rental" value="1" 
                                               {{ request('is_high_rental') ? 'checked' : '' }} id="is_high_rental">
                                        <label class="form-check-label" for="is_high_rental">High Rental Yield</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" name="is_high_capital" value="1" 
                                               {{ request('is_high_capital') ? 'checked' : '' }} id="is_high_capital">
                                        <label class="form-check-label" for="is_high_capital">High Capital Growth</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--============== Property Search Form End ==============-->

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const locationInput = document.querySelector('.location-search');
        const latInput = document.querySelector('input[name="lat"]');
        const lngInput = document.querySelector('input[name="lng"]');

        // Initialize Google Places Autocomplete
        if (typeof google !== 'undefined') {
            const autocomplete = new google.maps.places.Autocomplete(locationInput, {
                componentRestrictions: { country: 'au' }, // Restrict to Australia
                types: ['(cities)'] // Restrict to cities only
            });
            
            autocomplete.addListener('place_changed', function() {
                const place = autocomplete.getPlace();
                if (place.geometry) {
                    latInput.value = place.geometry.location.lat();
                    lngInput.value = place.geometry.location.lng();
                }
            });
        }

        // Price Range Slider
        if ($.fn.slider) {
            $('.slider-range').each(function() {
                var $this = $(this);
                var $parent = $this.parent();
                
                $this.slider({
                    range: true,
                    min: parseInt($this.data('min')),
                    max: parseInt($this.data('max')),
                    step: 50000,
                    values: [
                        parseInt($parent.find('.price-min').val() || 50000),
                        parseInt($parent.find('.price-max').val() || 5000000)
                    ],
                    slide: function(event, ui) {
                        $parent.find('.price-min').val(ui.values[0]);
                        $parent.find('.price-max').val(ui.values[1]);
                    }
                });

                // Initialize values
                $parent.find('.price-min').val($this.slider('values', 0));
                $parent.find('.price-max').val($this.slider('values', 1));
            });
        }

        // Toggle price range dropdown
        $('.price-toggle').on('click', function() {
            var target = $(this).data('target');
            $(target).slideToggle();
        });
    });
</script>

<style>
    .price_range {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: #fff;
        padding: 20px;
        border-radius: 4px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        display: none;
        z-index: 1000;
    }
    
    .slider-range {
        margin: 15px 0;
        height: 3px;
        background: #e1e1e1;
        border: none;
    }
    
    .slider-range .ui-slider-range {
        background: var(--theme-primary-color, #2196F3);
    }
    
    .slider-range .ui-slider-handle {
        width: 15px;
        height: 15px;
        border-radius: 50%;
        border: 2px solid var(--theme-primary-color, #2196F3);
        background: #fff;
        top: -6px;
        cursor: pointer;
    }
    
    .price-range-amount input {
        border: none;
        background: transparent;
        font-weight: 600;
        width: 45%;
        text-align: center;
    }
    
    .price-range-amount input:focus {
        outline: none;
    }
    
    .price-toggle {
        text-align: left;
        cursor: pointer;
    }
</style>
@endpush
