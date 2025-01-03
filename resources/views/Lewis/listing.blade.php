@extends('layout.app')

@section('title') Listing @endsection

@section('main-content')
    <!--============== Page title Start ==============-->
    <div class="full-row py-5">
        <div class="container">
            <div class="row">
                <div class="col inner-page-banner">
                    <h3 class="text-secondary">Property Listing Grid View</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 bg-transparent p-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('listing') }}">Listing</a></li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">Grid View</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--============== Page title End ==============-->

    <!--============== Slide Filter Start ==============-->
    <div class="secondary-nav-leftside nav-leftpush-overlay">
        <div class="navbar-expand-lg">
            <div class="navbar-slide-push transation-this">
                <span class="slide-nav-close px-3 py-1 text-white bg-primary rounded">Hide</span>
                <form action="#" method="POST" class="quick-search slide-filter form-icon-right position-relative pb-5 p-0">
                    <div class="row">
                        <div class="col-12 mb-2">
                            <h6>Location</h6>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="position-relative">
                                <input type="text" class="form-control" name="location" placeholder="Location">
                                <i class="flaticon-placeholder flat-mini icon-font y-center text-dark"></i>
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <h6>Property Type</h6>
                        </div>
                        <div class="col-12 mb-3">
                            <ul class="select-custom">
                                <li>
                                    <input type="radio" name="property-type" id="property-type-0" hidden>
                                    <label for="property-type-0" class="select-btn">Any Type</label>
                                </li>
                                <li>
                                    <input type="radio" name="property-type" id="property-type-1" hidden>
                                    <label for="property-type-1" class="select-btn">House</label>
                                </li>
                                <li>
                                    <input type="radio" name="property-type" id="property-type-2" hidden>
                                    <label for="property-type-2" class="select-btn">Office</label>
                                </li>
                                <li>
                                    <input type="radio" name="property-type" id="property-type-3" hidden>
                                    <label for="property-type-3" class="select-btn">Appartment</label>
                                </li>
                                <li>
                                    <input type="radio" name="property-type" id="property-type-4" hidden>
                                    <label for="property-type-4" class="select-btn">Condos</label>
                                </li>
                                <li>
                                    <input type="radio" name="property-type" id="property-type-5" hidden>
                                    <label for="property-type-5" class="select-btn">Villa</label>
                                </li>
                                <li>
                                    <input type="radio" name="property-type" id="property-type-6" hidden>
                                    <label for="property-type-6" class="select-btn">Family</label>
                                </li>
                                <li>
                                    <input type="radio" name="property-type" id="property-type-7" hidden>
                                    <label for="property-type-7" class="select-btn">Single Room</label>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 mb-2">
                            <h6>Property Status</h6>
                        </div>
                        <div class="col-12 mb-2">
                            <ul class="select-custom">
                                <li>
                                    <input type="radio" name="property-status" id="property-type-8" hidden>
                                    <label for="property-type-8" class="select-btn">Any Status</label>
                                </li>
                                <li>
                                    <input type="radio" name="property-status" id="property-type-9" hidden>
                                    <label for="property-type-9" class="select-btn">For Sale</label>
                                </li>
                                <li>
                                    <input type="radio" name="property-status" id="property-type-10" hidden>
                                    <label for="property-type-10" class="select-btn">For Rent</label>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 mb-2">
                            <h6>Property Pricing</h6>
                        </div>
                        <div class="col-12 mb-2">
                            <div class="row row-cols-2 g-1">
                                <div class="col">
                                    <input type="text" class="form-control" name="min-price" placeholder="Min Price">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="max-price" placeholder="Max Price">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <h6>Bedrooms</h6>
                        </div>
                        <div class="col-12 mb-2">
                            <ul class="select-custom">
                                <li>
                                    <input type="radio" name="bed-rooms" id="property-type-11" hidden>
                                    <label for="property-type-11" class="select-btn">One</label>
                                </li>
                                <li>
                                    <input type="radio" name="bed-rooms" id="property-type-12" hidden>
                                    <label for="property-type-12" class="select-btn">Two</label>
                                </li>
                                <li>
                                    <input type="radio" name="bed-rooms" id="property-type-13" hidden>
                                    <label for="property-type-13" class="select-btn">Three</label>
                                </li>
                                <li>
                                    <input type="radio" name="bed-rooms" id="property-type-14" hidden>
                                    <label for="property-type-14" class="select-btn">Four</label>
                                </li>
                                <li>
                                    <input type="radio" name="bed-rooms" id="property-type-15" hidden>
                                    <label for="property-type-15" class="select-btn">Five</label>
                                </li>
                                <li>
                                    <input type="radio" name="bed-rooms" id="property-type-16" hidden>
                                    <label for="property-type-16" class="select-btn">Six</label>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 mb-2">
                            <h6>Bathrooms</h6>
                        </div>
                        <div class="col-12 mb-2">
                            <ul class="select-custom">
                                <li>
                                    <input type="radio" name="bath-rooms" id="property-type-17" hidden>
                                    <label for="property-type-17" class="select-btn">One</label>
                                </li>
                                <li>
                                    <input type="radio" name="bath-rooms" id="property-type-18" hidden>
                                    <label for="property-type-18" class="select-btn">Two</label>
                                </li>
                                <li>
                                    <input type="radio" name="bath-rooms" id="property-type-19" hidden>
                                    <label for="property-type-19" class="select-btn">Three</label>
                                </li>
                                <li>
                                    <input type="radio" name="bath-rooms" id="property-type-20" hidden>
                                    <label for="property-type-20" class="select-btn">Four</label>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 mb-2">
                            <h6>Ares Squire Feet</h6>
                        </div>
                        <div class="col-12 mb-2">
                            <ul class="select-custom">
                                <li>
                                    <input type="radio" name="area-sqft" id="property-type-21" hidden>
                                    <label for="property-type-21" class="select-btn">0-1000 sqft</label>
                                </li>
                                <li>
                                    <input type="radio" name="area-sqft" id="property-type-22" hidden>
                                    <label for="property-type-22" class="select-btn">1001-3000 sqft</label>
                                </li>
                                <li>
                                    <input type="radio" name="area-sqft" id="property-type-23" hidden>
                                    <label for="property-type-23" class="select-btn">3001-5000 sqft</label>
                                </li>
                                <li>
                                    <input type="radio" name="area-sqft" id="property-type-24" hidden>
                                    <label for="property-type-24" class="select-btn">5001-8000 sqft+</label>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 mb-2">
                            <h6>Aditional Options</h6>
                        </div>
                        <div class="col-12 mb-2">
                            <ul class="row row-cols-1 custom-check-box mb-20">
                                <li class="col">
                                    <input type="checkbox" class="custom-control-input hide" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Air Conditioning</label>
                                </li>
                                <li class="col">
                                    <input type="checkbox" class="custom-control-input hide" id="customCheck2">
                                    <label class="custom-control-label" for="customCheck2">Garage Facility</label>
                                </li>
                                <li class="col">
                                    <input type="checkbox" class="custom-control-input hide" id="customCheck3">
                                    <label class="custom-control-label" for="customCheck3">Swiming Pool</label>
                                </li>
                                <li class="col">
                                    <input type="checkbox" class="custom-control-input hide" id="customCheck4">
                                    <label class="custom-control-label" for="customCheck4">Fire Security</label>
                                </li>

                                <li class="col">
                                    <input type="checkbox" class="custom-control-input hide" id="customCheck5">
                                    <label class="custom-control-label" for="customCheck5">Fire Place Facility</label>
                                </li>
                                <li class="col">
                                    <input type="checkbox" class="custom-control-input hide" id="customCheck6">
                                    <label class="custom-control-label" for="customCheck6">Play Ground</label>
                                </li>
                                <li class="col">
                                    <input type="checkbox" class="custom-control-input hide" id="customCheck7">
                                    <label class="custom-control-label" for="customCheck7">Ferniture Include</label>
                                </li>
                                <li class="col">
                                    <input type="checkbox" class="custom-control-input hide" id="customCheck8">
                                    <label class="custom-control-label" for="customCheck8">Marbel Floor</label>
                                </li>

                                <li class="col">
                                    <input type="checkbox" class="custom-control-input hide" id="customCheck9">
                                    <label class="custom-control-label" for="customCheck9">Store Room</label>
                                </li>
                                <li class="col">
                                    <input type="checkbox" class="custom-control-input hide" id="customCheck10">
                                    <label class="custom-control-label" for="customCheck10">Hight Class Door</label>
                                </li>
                                <li class="col">
                                    <input type="checkbox" class="custom-control-input hide" id="customCheck11">
                                    <label class="custom-control-label" for="customCheck11">Floor Heating System</label>
                                </li>
                                <li class="col">
                                    <input type="checkbox" class="custom-control-input hide" id="customCheck12">
                                    <label class="custom-control-label" for="customCheck12">Garden Include</label>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100" type="button" name="search">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--============== Slide Filter End ==============-->

    <!--============== Property Grid View Start ==============-->
    <div class="full-row pt-0">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="woo-filter-bar p-3 d-flex flex-wrap justify-content-between">
                        <div class="d-flex flex-wrap">
                            <div class="btn push-nav-toggle"><i class="fas fa-filter"></i></div>
                            <form class="woocommerce-ordering" method="get">
                                <select name="orderby1">
                                    <option>Any Status</option>
                                    <option>For Rent</option>
                                    <option>For Sale</option>
                                </select>
                                <select name="orderby2">
                                    <option>Default</option>
                                    <option>Most Popular</option>
                                    <option>Top Rated</option>
                                    <option>Newest Items</option>
                                    <option>Price low to high</option>
                                    <option>Price hight to low</option>
                                </select>
                            </form>
                        </div>
                        <div class="d-flex">
                            <span class="woocommerce-ordering-pages me-4 font-fifteen">Showing at 15 result</span>
                            <form class="view-category" method="get">
                                <a href="{{ route('listing') }}"><i class="flaticon-grid-1 flat-mini"></i></a>
                                <a href="{{ route('listing.full') }}"><i class="flaticon-grid flat-mini"></i></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4">
                @for ($i =0; $i<12; $i++)
                    @include('component.property-card')
                @endfor

            </div>
            <div class="row">
                <div class="col mt-5">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination pagination-dotted-active justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link">Previous Page</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next Page</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--============== Property Grid View End ==============-->
    @include('component.quick-view-modal')
@endsection
