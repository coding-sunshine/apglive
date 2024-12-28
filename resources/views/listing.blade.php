<x-frontend-layout>
    <!-- Page Title -->
    <div class="full-row py-5 listing-heading">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="text-secondary">Property Listing</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Search Bar -->
    @include('layouts.partials.listing-searchbar')

    <!-- Property Listing Section -->
    <div class="full-row pt-0">
        <div class="container">
            <!-- Filter Bar -->
            <div class="row">
                <div class="col">
                    <div class="woo-filter-bar p-3 d-flex flex-wrap justify-content-between">
                        <div class="d-flex align-items-center">
                            <p class="woocommerce-result-count m-0">
                                @if(is_array($lots) && isset($lots['meta']))
                                    Showing {{ $lots['meta']['from'] ?? 0 }}-{{ $lots['meta']['to'] ?? 0 }} of {{ $lots['meta']['total'] ?? 0 }} results
                                @else
                                    Showing results
                                @endif
                            </p>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="sorting-options">
                                <select class="form-select">
                                    <option>Default Sorting</option>
                                    <option>Price Low to High</option>
                                    <option>Price High to Low</option>
                                    <option>Latest Properties</option>
                                </select>
                            </div>
                            <div class="layout-view ms-4">
                                <a href="javascript:void(0);" class="active">
                                    <i class="fas fa-th-large"></i>
                                </a>
                                <a href="javascript:void(0);">
                                    <i class="fas fa-th-list"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Property Grid -->
            <div class="row row-cols-xl-3 row-cols-md-2 row-cols-1 property-listing">
                @if(is_array($lots) && isset($lots['data']))
                    @forelse($lots['data'] as $lot)
                        <div class="col">
                            <x-property-card 
                                :item="[
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
                                    'updated_at' => \Carbon\Carbon::parse($lot['updated_at'])->diffForHumans(),
                                    'image_url' => $lot['project']['first_image_url'],
                                    'type_title' => $lot['property_type'],
                                    'display_title' => 'Lot - '. $lot['title'].'-'.$lot['project']['title'],
                                    'address' => str($lot['project']['full_address'])->rtrim(','),
                                    'bedrooms' => $lot['bedrooms'] ?? $lot['project']['min_bedrooms'],
                                    'bathrooms' => $lot['bathrooms'] ?? $lot['project']['min_bathrooms'],
                                    'living_area' => $lot['living_area'] ?? $lot['project']['min_living_area'],
                                    'garage' => $lot['garage'] ?? $lot['project']['min_lot_garage'],
                                    'agent_image' => $lot['agent_image'] ?? '/assets/images/avatar.png',
                                    'agent_name' => $lot['agent_name'] ?? config('app.name'),
                                ]"
                                route-name="property"
                            />
                        </div>
                    @empty
                        <div class="col-12">
                            <div class="alert alert-info">
                                No properties found matching your criteria.
                            </div>
                        </div>
                    @endforelse
                @else
                    <div class="col-12">
                        <div class="alert alert-warning">
                            Error loading properties. Please try again later.
                        </div>
                    </div>
                @endif
            </div>

            <!-- Pagination -->
            <div class="row">
                <div class="col mt-5">
                    @if(isset($pagination))
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-dotted-active justify-content-center">
                                <!-- Previous Page -->
                                <li class="page-item {{ $pagination['prev'] ? '' : 'disabled' }}">
                                    <a class="page-link" href="{{ $pagination['prev'] ?? '#' }}">Previous Page</a>
                                </li>

                                <!-- Dynamic Pages -->
                                @foreach($pagination['pages'] as $pageNumber => $pageUrl)
                                    @if($pageUrl === '...')
                                        <li class="page-item disabled">
                                            <span class="page-link">...</span>
                                        </li>
                                    @else
                                        <li class="page-item {{ request('page', 1) == $pageNumber ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $pageUrl }}">{{ $pageNumber }}</a>
                                        </li>
                                    @endif
                                @endforeach

                                <!-- Next Page -->
                                <li class="page-item {{ $pagination['next'] ? '' : 'disabled' }}">
                                    <a class="page-link" href="{{ $pagination['next'] ?? '#' }}">Next Page</a>
                                </li>
                            </ul>
                        </nav>
                    @endif
                </div>
            </div>

        </div>
    </div>
</x-frontend-layout>
