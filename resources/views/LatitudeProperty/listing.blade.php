@extends('layout.app')

@section('title') Listing @endsection

@section('main-content')

        <!--============== Page title Start ==============-->
        <div class="full-row py-5 listing-heading">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <nav aria-label="breadcrumb" class="mb-2">
                            <ol class="breadcrumb mb-0 bg-transparent p-0">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Listing</a></li>
                                <li class="breadcrumb-item active text-primary" aria-current="page">Grid View</li>
                            </ol>
                        </nav>
                        <h3 class="text-secondary">Property Listing</h3>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Page title End ==============-->

        <!--============== Property Search Form Start ==============-->
        <div class="full-row p-0">
            <div class="container">
                <div class="row search-row">
                    <div class="col-lg-12 bg-light p-5 mb-3">
                        <form class="quick-search p-0 form-icon-right position-relative" action="#" method="post">
                            <div class="row row-cols-lg-6 row-cols-md-4 row-cols-1 g-3">
                                <div class="col">
                                    <input type="text" class="form-control" name="keyword" placeholder="Enter Keyword...">
                                </div>
                                <div class="col">
                                    <select class="form-control">
										<option>Property Types</option>
										<option>House</option>
										<option>Office</option>
										<option>Appartment</option>
										<option>Condos</option>
										<option>Villa</option>
										<option>Small Family</option>
										<option>Single Room</option>
									</select>
                                </div>
                                <div class="col">
                                    <select class="form-control">
										<option>Property Status</option>
										<option>For Rent</option>
										<option>For Sale</option>
									</select>
                                </div>
                                <div class="col">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" name="location" placeholder="Location">
                                        <i class="flaticon-placeholder flat-mini icon-font y-center text-dark"></i>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="position-relative">
                                        <button class="form-control price-toggle toggle-btn" data-target="#data-range-price">Price <i class="fas fa-angle-down font-mini icon-font y-center text-dark"></i></button>
                                        <div id="data-range-price" class="price_range price-range-toggle">
                                            <div class="area-filter price-filter">
                                                <span class="price-slider">
												<input class="filter_price" type="text" name="price" value="0;10000000" />
											</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <select class="form-control">
										<option>Bedrooms</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
									</select>
                                </div>
                                <div class="col">
                                    <select class="form-control">
										<option>Bathrooms</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
									</select>
                                </div>
                                <div class="col">
                                    <select class="form-control">
										<option>Garage</option>
										<option>Yes</option>
										<option>No</option>
									</select>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="keyword" placeholder="Min Area">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="keyword" placeholder="Max Area">
                                </div>
                                <div class="col">
                                    <div class="position-relative">
                                        <button class="form-control text-start toggle-btn" data-target="#aditional-check">Advanced <i class="fas fa-ellipsis-v font-mini icon-font y-center text-dark"></i></button>
                                    </div>
                                </div>
                                <div class="col">
                                    <button class="btn btn-primary w-100">Search</button>
                                </div>
                            </div>
                            <div id="aditional-check" class="aditional-features p-5">
                                <h5 class="mb-3">Aditional Options</h5>
                                <ul class="row row-cols-md-4 row-cols-1 custom-check-box mb-4">
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Property Search Form End ==============-->

        <!--============== Property Grid View Start ==============-->
        <div class="full-row pt-0">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="woo-filter-bar p-3 d-flex flex-wrap justify-content-between">
                            <div class="d-flex flex-wrap">
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
                <div class="row row-cols-xl-3 row-cols-md-2 row-cols-1 property-listing">
                    @for ($i = 0; $i < 12; $i++)
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
