@extends('layout.app')

@section('title') Home @endsection
@section('page-wrapper-class')@endsection
@section('header-class') transparent-header nav-on-banner fixed-bg-dark @endsection
@section('main-nav-class') py-2 xs-p-0 @endsection
@section('nav-class') nav-white nav-primary-hover @endsection
@section('log-url') {{ theme_url('images/foterlogo.png') }} @endsection

@section('main-content')
    {{-- @dd( themes_path('')) --}}
     <!--============== Search Banner Start ==============-->
     <div class="full-row p-0"
     style="background-image: url('{{ theme_url('images/banner3.png') }}'); background-position: center center;">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-12">
                    <div class="banner-search" style="padding-top: 300px; padding-bottom: 320px;">
                        <h2 class="text-center mx-auto text-white">Search what you are looking for...</h2>
                        <span class="d-table mx-auto text-white font-medium mb-4">We have listed over 100000+
                            property in our database</span>
                        <form class="bg-white shadow-sm quick-search form-icon-right position-relative" action="#"
                            method="post">
                            <div class="row row-cols-lg-6 row-cols-md-3 row-cols-1 g-3">
                                <div class="col">
                                    <input type="text" class="form-control" name="keyword"
                                        placeholder="Enter Keyword...">
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
                                    <div class="position-relative">
                                        <input type="text" class="form-control" name="location"
                                            placeholder="Location">
                                        <i class="flaticon-placeholder flat-mini icon-font y-center text-dark"></i>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="position-relative">
                                        <button class="form-control price-toggle toggle-btn"
                                            data-target="#data-range-price">Price <i
                                                class="fas fa-angle-down font-mini icon-font y-center text-dark"></i></button>
                                        <div id="data-range-price" class="price_range price-range-toggle">
                                            <div class="area-filter price-filter">
                                                <span class="price-slider">
                                                    <input class="filter_price" type="text" name="price"
                                                        value="0;10000000" />
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="position-relative">
                                        <button class="form-control text-start toggle-btn"
                                            data-target="#aditional-check">Advanced <i
                                                class="fas fa-ellipsis-v font-mini icon-font y-center text-dark"></i></button>
                                    </div>
                                </div>
                                <div class="col">
                                    <button class="btn btn-primary w-100">Search</button>
                                </div>
                                <!-- Advance Features -->
                                <div id="aditional-check" class="aditional-features p-5">
                                    <h5 class="mb-3">Aditional Options</h5>
                                    <ul class="row row-cols-lg-4 row-cols-md-2 row-cols-1 custom-check-box mb-4">
                                        <li class="col">
                                            <input type="checkbox" class="custom-control-input hide"
                                                id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Air
                                                Conditioning</label>
                                        </li>
                                        <li class="col">
                                            <input type="checkbox" class="custom-control-input hide"
                                                id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2">Garage
                                                Facility</label>
                                        </li>
                                        <li class="col">
                                            <input type="checkbox" class="custom-control-input hide"
                                                id="customCheck3">
                                            <label class="custom-control-label" for="customCheck3">Swiming
                                                Pool</label>
                                        </li>
                                        <li class="col">
                                            <input type="checkbox" class="custom-control-input hide"
                                                id="customCheck4">
                                            <label class="custom-control-label" for="customCheck4">Fire
                                                Security</label>
                                        </li>

                                        <li class="col">
                                            <input type="checkbox" class="custom-control-input hide"
                                                id="customCheck5">
                                            <label class="custom-control-label" for="customCheck5">Fire Place
                                                Facility</label>
                                        </li>
                                        <li class="col">
                                            <input type="checkbox" class="custom-control-input hide"
                                                id="customCheck6">
                                            <label class="custom-control-label" for="customCheck6">Play
                                                Ground</label>
                                        </li>
                                        <li class="col">
                                            <input type="checkbox" class="custom-control-input hide"
                                                id="customCheck7">
                                            <label class="custom-control-label" for="customCheck7">Ferniture
                                                Include</label>
                                        </li>
                                        <li class="col">
                                            <input type="checkbox" class="custom-control-input hide"
                                                id="customCheck8">
                                            <label class="custom-control-label" for="customCheck8">Marbel
                                                Floor</label>
                                        </li>

                                        <li class="col">
                                            <input type="checkbox" class="custom-control-input hide"
                                                id="customCheck9">
                                            <label class="custom-control-label" for="customCheck9">Store
                                                Room</label>
                                        </li>
                                        <li class="col">
                                            <input type="checkbox" class="custom-control-input hide"
                                                id="customCheck10">
                                            <label class="custom-control-label" for="customCheck10">Hight Class
                                                Door</label>
                                        </li>
                                        <li class="col">
                                            <input type="checkbox" class="custom-control-input hide"
                                                id="customCheck11">
                                            <label class="custom-control-label" for="customCheck11">Floor Heating
                                                System</label>
                                        </li>
                                        <li class="col">
                                            <input type="checkbox" class="custom-control-input hide"
                                                id="customCheck12">
                                            <label class="custom-control-label" for="customCheck12">Garden
                                                Include</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============== Search Banner End ==============-->

    <!--============== Recent Property Start ==============-->
    <div class="full-row bg-light">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="text-secondary text-center mb-5">
                        <h2 class="text-secondary mx-auto mb-4">Featured Properties</h2>
                        <span class="d-table w-50 w-sm-100 sub-title mx-auto text-center">Mauris primis turpis
                            Laoreet magna felis mi amet quam enim curae. Sodales semper tempor dictum faucibus
                            habitasse.</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="3block-carusel nav-disable owl-carousel">
                        @for ($i =0; $i<6; $i++)
                            @include('component.property-card', ['colClass' => 'item'])
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============== Recent Property End ==============-->

    <!--============== Property Location Start ==============-->
    <div class="full-row city-row">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="text-secondary text-center mb-5">
                        <h2 class="text-secondary mx-auto mb-4">Find Properties in These Cities</h2>
                        <span class="d-table w-50 w-sm-100 sub-title mx-auto text-center">Mauris primis turpis
                            Laoreet magna felis mi amet quam enim curae. Sodales semper tempor dictum faucibus
                            habitasse.</span>
                    </div>
                </div>
            </div>
            <div class="row row-cols-lg-5 row-cols-md-5 row-cols-sm-2 row-cols-1">
                <div class="col">
                    <div class="hover-img-zoom text-center mb-4">
                        <div class="overflow-hidden transation thumbnail-img rounded-circle bg-secondary">
                            <img src="{{ theme_url('images/sydney.jpg') }}" alt="image not found">
                        </div>
                        <div class="mt-3">
                            <h5 class="transation font-400"><a href="#">Sydney</a></h5>
                            <p>82 Properties</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="hover-img-zoom text-center mb-4">
                        <div class="overflow-hidden transation thumbnail-img rounded-circle bg-secondary">
                            <img src="{{ theme_url('images/Canberra.jpg') }}" alt="image not found">
                        </div>
                        <div class="mt-3">
                            <h5 class="transation font-400"><a href="#">Canberra</a></h5>
                            <p>57 Properties</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="hover-img-zoom text-center mb-4">
                        <div class="overflow-hidden transation thumbnail-img rounded-circle bg-secondary">
                            <img src="{{ theme_url('images/Adelaide.jpg') }}" alt="image not found">
                        </div>
                        <div class="mt-3">
                            <h5 class="transation font-400"><a href="#">Adelaide</a></h5>
                            <p>170 Properties</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="hover-img-zoom text-center mb-4">
                        <div class="overflow-hidden transation thumbnail-img rounded-circle bg-secondary">
                            <img src="{{ theme_url('images/Melbourne.jpg') }}" alt="image not found">
                        </div>
                        <div class="mt-3">
                            <h5 class="transation font-400"><a href="#">Melbourne</a></h5>
                            <p>17 Properties</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="hover-img-zoom text-center mb-4">
                        <div class="overflow-hidden transation thumbnail-img rounded-circle bg-secondary">
                            <img src="{{ theme_url('images/Brisbane.jpg') }}" alt="image not found">
                        </div>
                        <div class="mt-3">
                            <h5 class="transation font-400"><a href="#">Brisbane</a></h5>
                            <p>27 Properties</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============== Property Location End ==============-->

    <!--============== Property Tab Start ==============-->
    <div class="full-row bg-light feature-property">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6">
                    <h2 class="main-title">Featured Properties</h2>
                </div>
                <div class="col-md-6">
                    <div class="mix-tab">
                        <ul class="nav-tab-border-active ms-auto d-table">
                            <li data-filter="all">All</li>
                            <li data-filter=".house">House</li>
                            <li data-filter=".office">Office</li>
                            <li data-filter=".appartment">Appartment</li>
                            <li data-filter=".land">Land</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mix-element row row-cols-lg-3 row-cols-md-2 row-cols-1 mt-4">
                        <div class="col mix house land mb-30">
                            <!-- Property Grid -->
                            <div class="property-grid-1 property-block bg-white transation-this hover-shadow">
                                <div
                                    class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                                    <div class="cata position-absolute">
                                        <span class="sale bg-secondary text-white">For Sale</span>
                                        <span class="featured bg-primary text-white">Featured</span>
                                    </div>
                                    <a href="property-single.html"><img src="{{ theme_url('images/property-grid-1.png') }}"
                                            alt="Image Not Found!"></a>
                                    <a href="#" class="listing-ctg text-white"><i
                                            class="fa-solid fa-building"></i><span>Apartment</span></a>
                                    <ul class="position-absolute quick-meta">
                                        <li><a href="#" title="Add Compare"><i
                                                    class="flaticon-transfer flat-mini"></i></a></li>
                                        <li><a href="#" title="Add Favourite"><i
                                                    class="flaticon-like-1 flat-mini"></i></a></li>
                                        <li class="md-mx-none"><a class="quick-view" href="#quick-view"
                                                title="Quick View"><i
                                                    class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                    </ul>
                                </div>
                                <div class="property_text p-4">
                                    <span class="listing-price">$1850<small> ( Monthly )</small></span>
                                    <h5 class="listing-title"><a href="property-single.html">Family House
                                            Residense</a></h5>
                                    <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 4213 Duff
                                        Avenue South Burlington, VT 05403 </span>
                                    <ul class="d-flex quantity font-fifteen">
                                        <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>7</li>
                                        <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>5</li>
                                        <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200
                                            Sqft</li>
                                        <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                                    </ul>
                                </div>
                                <div class="d-flex align-items-center post-meta mt-2 py-3 px-4 border-top">
                                    <div class="agent">
                                        <a href="#" class="d-flex text-general align-items-center"><img
                                                class="rounded-circle me-2" src="{{ theme_url('images/team/1.jpg') }}"
                                                alt="avata"><span>Ali Tufan</span></a>
                                    </div>
                                    <div class="post-date ms-auto"><span>2 Month Ago</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mix office mb-30">
                            <!-- Property Grid -->
                            <div class="property-grid-1 property-block bg-white transation-this hover-shadow">
                                <div
                                    class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                                    <div class="cata position-absolute">
                                        <span class="sale bg-secondary text-white">For Rent</span>
                                        <span class="featured bg-primary text-white">Featured</span>
                                    </div>
                                    <a href="property-single.html"><img src="{{ theme_url('images/property-grid-2.png') }}"
                                            alt="Image Not Found!"></a>
                                    <a href="#" class="listing-ctg text-white"><i
                                            class="fa-solid fa-building"></i><span>Villa</span></a>
                                    <ul class="position-absolute quick-meta">
                                        <li><a href="#" title="Add Compare"><i
                                                    class="flaticon-transfer flat-mini"></i></a></li>
                                        <li><a href="#" title="Add Favourite"><i
                                                    class="flaticon-like-1 flat-mini"></i></a></li>
                                        <li class="md-mx-none"><a class="quick-view" href="#quick-view"
                                                title="Quick View"><i
                                                    class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                    </ul>
                                </div>
                                <div class="property_text p-4">
                                    <span class="listing-price">$3450<small> ( Monthly )</small></span>
                                    <h5 class="listing-title"><a href="property-single.html">Gorgeous Villa Bay
                                            View</a></h5>
                                    <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 2305 sydney, AB66210</span>
                                    <ul class="d-flex quantity font-fifteen">
                                        <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>7</li>
                                        <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>5</li>
                                        <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200
                                            Sqft</li>
                                        <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                                    </ul>
                                </div>
                                <div class="d-flex align-items-center post-meta mt-2 py-3 px-4 border-top">
                                    <div class="agent">
                                        <a href="#" class="d-flex text-general align-items-center"><img
                                                class="rounded-circle me-2" src="{{ theme_url('images/team/1.jpg') }}"
                                                alt="avata"><span>Ali Tufan</span></a>
                                    </div>
                                    <div class="post-date ms-auto"><span>2 Month Ago</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mix appartment land mb-30">
                            <!-- Property Grid -->
                            <div class="property-grid-1 property-block bg-white transation-this hover-shadow">
                                <div
                                    class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                                    <div class="cata position-absolute">
                                        <span class="sale bg-secondary text-white">For Rent</span>
                                        <span class="featured bg-primary text-white">Featured</span>
                                    </div>
                                    <a href="property-single.html"><img src="{{ theme_url('images/property-grid-3.png') }}"
                                            alt="Image Not Found!"></a>
                                    <a href="#" class="listing-ctg text-white"><i
                                            class="fa-solid fa-building"></i><span>Condos</span></a>
                                    <ul class="position-absolute quick-meta">
                                        <li><a href="#" title="Add Compare"><i
                                                    class="flaticon-transfer flat-mini"></i></a></li>
                                        <li><a href="#" title="Add Favourite"><i
                                                    class="flaticon-like-1 flat-mini"></i></a></li>
                                        <li class="md-mx-none"><a class="quick-view" href="#quick-view"
                                                title="Quick View"><i
                                                    class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                    </ul>
                                </div>
                                <div class="property_text p-4">
                                    <span class="listing-price">$1,0450<small> ( Monthly )</small></span>
                                    <h5 class="listing-title"><a href="property-single.html">New Developed
                                            Condos</a></h5>
                                    <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 2305 sydney, AB66210</span>
                                    <ul class="d-flex quantity font-fifteen">
                                        <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>7</li>
                                        <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>5</li>
                                        <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200
                                            Sqft</li>
                                        <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                                    </ul>
                                </div>
                                <div class="d-flex align-items-center post-meta mt-2 py-3 px-4 border-top">
                                    <div class="agent">
                                        <a href="#" class="d-flex text-general align-items-center"><img
                                                class="rounded-circle me-2" src="{{ theme_url('images/team/1.jpg') }}"
                                                alt="avata"><span>Ali Tufan</span></a>
                                    </div>
                                    <div class="post-date ms-auto"><span>2 Month Ago</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mix house mb-30">
                            <!-- Property Grid -->
                            <div class="property-grid-1 property-block bg-white transation-this hover-shadow">
                                <div
                                    class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                                    <div class="cata position-absolute">
                                        <span class="sale bg-secondary text-white">For Rent</span>
                                        <span class="featured bg-primary text-white">Featured</span>
                                    </div>
                                    <a href="property-single.html"><img src="{{ theme_url('images/property-grid-4.png') }}"
                                            alt="Image Not Found!"></a>
                                    <a href="#" class="listing-ctg text-white"><i
                                            class="fa-solid fa-building"></i><span>Apartment</span></a>
                                    <ul class="position-absolute quick-meta">
                                        <li><a href="#" title="Add Compare"><i
                                                    class="flaticon-transfer flat-mini"></i></a></li>
                                        <li><a href="#" title="Add Favourite"><i
                                                    class="flaticon-like-1 flat-mini"></i></a></li>
                                        <li class="md-mx-none"><a class="quick-view" href="#quick-view"
                                                title="Quick View"><i
                                                    class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                    </ul>
                                </div>
                                <div class="property_text p-4">
                                    <span class="listing-price">$1850<small> ( Monthly )</small></span>
                                    <h5 class="listing-title"><a href="property-single.html">Family House
                                            Residense</a></h5>
                                    <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 2305 sydney, AB66210</span>
                                    <ul class="d-flex quantity font-fifteen">
                                        <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>7</li>
                                        <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>5</li>
                                        <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200
                                            Sqft</li>
                                        <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                                    </ul>
                                </div>
                                <div class="d-flex align-items-center post-meta mt-2 py-3 px-4 border-top">
                                    <div class="agent">
                                        <a href="#" class="d-flex text-general align-items-center"><img
                                                class="rounded-circle me-2" src="{{ theme_url('images/team/1.jpg') }}"
                                                alt="avata"><span>Ali Tufan</span></a>
                                    </div>
                                    <div class="post-date ms-auto"><span>2 Month Ago</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mix house land mb-30">
                            <!-- Property Grid -->
                            <div class="property-grid-1 property-block bg-white transation-this hover-shadow">
                                <div
                                    class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                                    <div class="cata position-absolute">
                                        <span class="sale bg-secondary text-white">For Sale</span>
                                        <span class="featured bg-primary text-white">Featured</span>
                                    </div>
                                    <a href="property-single.html"><img src="{{ theme_url('images/property-grid-5.png') }}"
                                            alt="Image Not Found!"></a>
                                    <a href="#" class="listing-ctg text-white"><i
                                            class="fa-solid fa-building"></i><span>Condos</span></a>
                                    <ul class="position-absolute quick-meta">
                                        <li><a href="#" title="Add Compare"><i
                                                    class="flaticon-transfer flat-mini"></i></a></li>
                                        <li><a href="#" title="Add Favourite"><i
                                                    class="flaticon-like-1 flat-mini"></i></a></li>
                                        <li class="md-mx-none"><a class="quick-view" href="#quick-view"
                                                title="Quick View"><i
                                                    class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                    </ul>
                                </div>
                                <div class="property_text p-4">
                                    <span class="listing-price">$1,20,5500<small> ( One Time )</small></span>
                                    <h5 class="listing-title"><a href="property-single.html">Condos Infront of
                                            River</a></h5>
                                    <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 2305 sydney, AB66210</span>
                                    <ul class="d-flex quantity font-fifteen">
                                        <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>7</li>
                                        <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>5</li>
                                        <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200
                                            Sqft</li>
                                        <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                                    </ul>
                                </div>
                                <div class="d-flex align-items-center post-meta mt-2 py-3 px-4 border-top">
                                    <div class="agent">
                                        <a href="#" class="d-flex text-general align-items-center"><img
                                                class="rounded-circle me-2" src="{{ theme_url('images/team/1.jpg') }}"
                                                alt="avata"><span>Ali Tufan</span></a>
                                    </div>
                                    <div class="post-date ms-auto"><span>2 Month Ago</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mix appartment mb-30">
                            <!-- Property Grid -->
                            <div class="property-grid-1 property-block bg-white transation-this hover-shadow">
                                <div
                                    class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                                    <div class="cata position-absolute">
                                        <span class="sale bg-secondary text-white">For Rent</span>
                                        <span class="featured bg-primary text-white">Featured</span>
                                    </div>
                                    <a href="property-single.html"><img src="{{ theme_url('images/property-grid-6.png') }}"
                                            alt="Image Not Found!"></a>
                                    <a href="#" class="listing-ctg text-white"><i
                                            class="fa-solid fa-building"></i><span>Condos</span></a>
                                    <ul class="position-absolute quick-meta">
                                        <li><a href="#" title="Add Compare"><i
                                                    class="flaticon-transfer flat-mini"></i></a></li>
                                        <li><a href="#" title="Add Favourite"><i
                                                    class="flaticon-like-1 flat-mini"></i></a></li>
                                        <li class="md-mx-none"><a class="quick-view" href="#quick-view"
                                                title="Quick View"><i
                                                    class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                                    </ul>
                                </div>
                                <div class="property_text p-4">
                                    <span class="listing-price">$6500<small> ( Monthly )</small></span>
                                    <h5 class="listing-title"><a href="property-single.html">New Developed
                                            Condos</a></h5>
                                    <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 2305 sydney, AB66210</span>
                                    <ul class="d-flex quantity font-fifteen">
                                        <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>7</li>
                                        <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>5</li>
                                        <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200
                                            Sqft</li>
                                        <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                                    </ul>
                                </div>
                                <div class="d-flex align-items-center post-meta mt-2 py-3 px-4 border-top">
                                    <div class="agent">
                                        <a href="#" class="d-flex text-general align-items-center"><img
                                                class="rounded-circle me-2" src="{{ theme_url('images/team/1.jpg') }}"
                                                alt="avata"><span>Ali Tufan</span></a>
                                    </div>
                                    <div class="post-date ms-auto"><span>2 Month Ago</span></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============== Property Tab End ==============-->


    <!--============== Reg Banner Start ==============-->
    <div class="full-row bg-center paraxify"
        style="background-image: url({{ theme_url('images/banner3.png')}}); background-repeat: no-repeat; background-position: center top;">
        <div class="container position-relative z-index-9">
            <div class="row align-items-center">
                <div class="col-lg-7 text-white">
                    <h3 class="text-white mb-3">Do you want to sell your property ?</h3>
                    <p>You can also fill out our online form if you are interested in learning more.</p>
                    <span class="h6 d-inline-block text-white">Please Call : +62 999 9999 999</span>
                </div>
                <div class="col-lg-5">
                    <div class="simple-video-play d-flex">
                        <div class="position-relative d-inline-block">
                            <a data-fancybox href="https://www.youtube.com/watch?v=bh-klGboIg8"
                                class="rounded-circle position-relative bg-primary" style="z-index: 10"><i
                                    class="flaticon-play-button position-relative xy-center flat-mini rounded-circle text-white"></i></a>
                            <div class="loader position-absolute xy-center">
                                <div class="loader-inner ball-scale-multiple">
                                    <div class="bg-primary"></div>
                                    <div class="bg-primary"></div>
                                </div><span class="tooltip">
                                    <b>ball-scale-multiple</b></span>
                            </div>
                        </div>
                        <div class="ps-4 text-white font-medium">Play Video</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============== Reg Banner End ==============-->


    @include('component.quick-view-modal')

@endsection
