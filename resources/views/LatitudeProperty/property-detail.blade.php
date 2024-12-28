@extends('layout.app')

@section('title') Single Property @endsection

@section('main-content')

        <!--============== Page title Start ==============-->
        <div class="full-row py-5 single-property-head">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav aria-label="breadcrumb" class="mb-2">
                            <ol class="breadcrumb mb-0 bg-transparent p-0">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{route('listing')}}">Property</a></li>
                                <li class="breadcrumb-item active text-primary" aria-current="page">Single Property</li>
                            </ol>
                        </nav>
                        <h3 class="text-secondary">Single Property</h3>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Page title End ==============-->

        <!--============== Property Slider Start ==============-->
        <div class="full-row p-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="single-property" style="width:1200px; height:600px; margin:0 auto 30px;">
                            <!-- Slide 1-->
                            <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1280" src="{{ theme_url('images/property-grid-1.png')}}" class="ls-bg" alt="" /> </div>

                            <!-- Slide 2-->
                            <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:out; kenburnsscale:1.2;"> <img width="1920" height="1280" src="{{ theme_url('images/property-grid-2.png')}}" class="ls-bg" alt="" /> </div>

                            <!-- Slide 3-->
                            <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1280" src="{{ theme_url('images/property-grid-3.png')}}" class="ls-bg" alt="" /> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Property Slider End ==============-->

        <!--============== Property Details Start ==============-->
        <div class="full-row pt-30 property-detail">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 order-xl-2">
                        <!-- Message Form -->
                        <div class="widget widget_contact bg-white border p-30 shadow-one rounded mb-30">
                            <h5 class="mb-4">Listed By</h5>
                            <div class="media mb-3">
                                <img class="rounded-circle me-3" src="{{ theme_url('images/avatar.png')}}" alt="avata">
                                <div class="media-body">
                                    <div class="h6 mt-0">Brandan write</div>
                                    <span>+(61) 99 999 9999</span>
                                    <span>info@gmail.com</span>
                                </div>
                            </div>
                            <form class="quick-search form-icon-right" action="#" method="post">
                                <div class="form-row">
                                    <div class="col-12 mb-10">
                                        <div class="form-group mb-0">
                                            <input type="text" class="form-control" name="name" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-12 mb-10">
                                        <div class="form-group mb-0">
                                            <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-12 mb-10">
                                        <div class="form-group mb-0">
                                            <input type="email" class="form-control" name="email" placeholder="Your Email">
                                        </div>
                                    </div>
                                    <div class="col-12 mb-10">
                                        <div class="form-group mb-0">
                                            <textarea class="form-control" name="message" placeholder="Message" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-0">
                                            <button class="btn btn-primary w-100">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Property Search -->
                        <div class="widget advance_search_widget">
                            <h5 class="mb-30">Search Property</h5>
                            <form class="rounded quick-search form-icon-right" action="#" method="post">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="keyword" placeholder="Enter Keyword...">
                                    </div>
                                    <div class="col-12">
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
                                    <div class="col-12">
                                        <select class="form-control">
                                            <option>Property Status</option>
                                            <option>For Rent</option>
                                            <option>For Sale</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <div class="position-relative">
                                            <input type="text" class="form-control" name="location" placeholder="Location">
                                            <i class="flaticon-placeholder flat-mini icon-font y-center text-dark"></i>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="position-relative">
                                            <button class="form-control price-toggle toggle-btn" data-target="#data-range-price">Price <i class="fas fa-angle-down font-mini icon-font y-center text-dark"></i></button>
                                            <div id="data-range-price" class="price_range price-range-toggle w-100">
                                                <div class="area-filter price-filter">
                                                    <span class="price-slider">
                                                        <input class="filter_price" type="text" name="price" value="0;10000000" />
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
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
                                    <div class="col-12">
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
                                    <div class="col-12">
                                        <select class="form-control">
                                            <option>Garage</option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control" name="keyword" placeholder="Min Area">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control" name="keyword" placeholder="Max Area">
                                    </div>
                                    <div class="col-12">
                                        <div class="position-relative">
                                            <button class="form-control text-start toggle-btn" data-target="#aditional-features">Advanced <i class="fas fa-ellipsis-v font-mini icon-font y-center text-dark"></i></button>
                                        </div>
                                    </div>
                                    <div class="col-12 position-relative">
                                        <div id="aditional-features" class="aditional-features visible-static p-5">
                                            <h5 class="mb-3">Aditional Options</h5>
                                            <ul class="row row-cols-1 custom-check-box mb-4">
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
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--============== Recent Property Widget Start ==============-->
                        <div class="widget widget_recent_property">
                            <h5 class="text-secondary mb-4">Recent Property</h5>
                            <ul>
                                <li>
                                    <img src="{{ theme_url('images/property-grid-1.png')}}" alt="">
                                    <div class="thumb-body">
                                        <h6 class="listing-title"><a href="{{ route('property.detail') }}">Nirala Appartment</a></h6>
                                        <span class="listing-price">$3200<small>( Monthly )</small></span>
                                        <ul class="d-flex quantity font-fifteen">
                                            <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>6500 Sqft</li>

                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <img src="{{ theme_url('images/property-grid-2.png')}}" alt="">
                                    <div class="thumb-body">
                                        <h6 class="listing-title"><a href="{{ route('property.detail') }}">Condo House</a></h6>
                                        <span class="listing-price">$11500<small>( Monthly )</small></span>
                                        <ul class="d-flex quantity font-fifteen">
                                            <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>2200 Sqft</li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <img src="{{ theme_url('images/property-grid-3.png')}}" alt="">
                                    <div class="thumb-body">
                                        <h6 class="listing-title"><a href="{{ route('property.detail') }}">Luxury Condos</a></h6>
                                        <span class="listing-price">$17000<small>( Monthly )</small></span>
                                        <ul class="d-flex quantity font-fifteen">
                                            <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>3500 Sqft</li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <img src="{{ theme_url('images/property-grid-4.png')}}" alt="">
                                    <div class="thumb-body">
                                        <h6 class="listing-title"><a href="{{ route('property.detail') }}">Small Appartment</a></h6>
                                        <span class="listing-price">$5200<small>( Monthly )</small></span>
                                        <ul class="d-flex quantity font-fifteen">
                                            <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--============== Recent Property Widget End ==============-->
                    </div>
                    <div class="col-xl-8 order-xl-1">
                        <div class="property-overview border summary rounded bg-white p-30 mb-30">
                            <div class="row mb-4">
                                <div class="col-auto">
                                    <div class="post-meta font-small text-uppercase list-color-primary">
                                        <a href="#" class="listing-ctg"><i class="fa-solid fa-building"></i><span>Appartment</span></a>
                                    </div>
                                    <h4 class="listing-title"><a href="#">Apolo Family House Residense</a></h4>
                                    <span class="listing-location"><i class="fas fa-map-marker-alt text-primary"></i> Rhodes, Brisbane, NSW, 2138</span>
                                    <a href="#" class="d-block text-light hover-text-primary font-small mb-2">( 100 People Recommended )</a>
                                </div>
                                <div class="col-auto ms-auto xs-m-0 text-end xs-text-start pb-4 single-price">
                                    <span class="listing-price">$1205500<small>( Price Only )</small></span>
                                    <span class="text-white font-mini px-2 rounded product-status ms-auto xs-m-0 py-1 bg-primary"><i class="fas fa-check"></i> Available</span>
                                </div>
                                <div class="col-12">
                                    <div class="product-offers mt-2">
                                        <ul class="product-offers-list">
                                            <li class="product-offer-item"> <strong>Special Price </strong>Get extra 19% off (price inclusive of discount)</li>
                                            <li class="product-offer-item"> <strong>Bank Offer </strong> 10% instant discount on VISA Cards</li>
                                            <li class="product-offer-item"> <strong>No cost EMI $49/month.</strong> Standard EMI also available</li>
                                        </ul>
                                    </div>
                                    <ul class="quick-meta mt-4">
                                        <li class="bg-light"><a href="#" title="Add to compare" class="text-dark"><i class="flaticon-transfer flat-mini"></i></a></li>
                                        <li class="bg-light"><a href="#" title="Add wishlist" class="text-dark"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                        <li class="bg-light"><a href="#" title="Media share" class="text-dark"><i class="flaticon-share flat-mini"></i></a></li>
                                        <li class="bg-light"><a href="#" title="Print Data" class="text-dark"><i class="flaticon-printer flat-mini"></i></a></li>
                                        <li class="bg-light"><a href="#" title="Download PDF" class="text-dark"><i class="fas fa-download flat-mini"></i></a></li>
                                        <li class="bg-primary w-auto"><a href="#" class="px-5 text-white">Booking Now</a></li>
                                    </ul>

                                    <hr>
                                    <div class="mt-2">
                                        <ul class="list-three-fold-width d-table">
                                            <li><span class="font-500">Rooms:</span> 7</li>
                                            <li><span class="font-500">Beds:</span> 5</li>
                                            <li><span class="font-500">Area:</span> 1200 Sqft<sup>2</sup></li>
                                            <li><span class="font-500">Baths:</span> 1</li>
                                            <li><span class="font-500">Car Garage:</span> Yes ( 5 Capacity )</li>
                                            <li><span class="font-500">Swimming:</span> Yes ( 1 Large )</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-cols-1">
                                <div class="col">
                                    <h5 class="mb-3">Description</h5>
                                    <p>Maecenas egestas quam et volutpat bibendum metus vulputate platea eleifend sed Integer dictum ultricies consectetuer nunc vivamus a. Eu mus justo magna lacinia purus sodales scelerisque. Sociosqu pede facilisi. Curae;
                                        lacinia id. Sociis pretium gravida auctor mus amet accumsan adipiscing id dignissim, potenti. Curae; massa ridiculus lobortis consectetuer condimentum mollis vulputate hymenaeos tellus egestas auctor dictumst imperdiet
                                        curae; quisque ut porta molestie dui duis blandit molestie etiam enim erat sociis lacinia litora phasellus sit. Ipsum Lacinia class enim pharetra interdum potenti tellus parturient. Potenti scelerisque erat facilisi
                                        mauris tortor, mattis euismod augue nascetur rutrum augue ipsum tortor cum Porta primis.</p>
                                    <p>Praesent lectus facilisi tempor ridiculus arcu pharetra non tellus. Torquent nisl tempor. Magnis mollis lobortis nam, montes ut, consequat sed amet nullam, malesuada nascetur ornare sociosqu magna cum gravida quam tincidunt
                                        dapibus tellus felis nibh inceptos netus convallis facilisis torquent. Laoreet pulvinar ut. Fringilla lacus tellus lectus erat hac conubia eget quisque nisi aliquam nibh molestie nisi hymenaeos id phasellus metus
                                        duis inceptos arcu hendrerit ligula blandit lectus nisl fermentum sociosqu pretium eros libero.</p>
                                    <div class="short-description d-flex">
                                        <span class="me-4 font-500">Highlights:</span>
                                        <div class="short-description">
                                            <ul class="list-style-tick">
                                                <li>Regular Fit.</li>
                                                <li>Full sleeves.</li>
                                                <li>Machine wash, tumble dry.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="property-overview border rounded bg-white p-30 mb-30">
                            <div class="row row-cols-1">
                                <div class="col">
                                    <h5 class="mb-3">More Information</h5>
                                    <ul class="list-three-fold-width">
                                        <li><span class="font-500">Age :</span> 10 Years</li>
                                        <li><span class="font-500">Type :</span> Appartment</li>
                                        <li><span class="font-500">Installment Facility :</span> Yes</li>
                                        <li><span class="font-500">Insurance :</span> Yes</li>
                                        <li><span class="font-500">3rd Party :</span> No</li>
                                        <li><span class="font-500">Swiming Pool :</span> Yes</li>
                                        <li><span class="font-500">Garden & Field :</span> 2400sqft</li>
                                        <li><span class="font-500">Total Floor :</span> 3 Floor</li>
                                        <li><span class="font-500">Security :</span> 3 Step Security</li>
                                        <li><span class="font-500">Alivator :</span> 2 Large</li>
                                        <li><span class="font-500">Dining Capacity :</span> 20 People</li>
                                        <li><span class="font-500">Exit :</span> 3 Exit Gate</li>
                                        <li><span class="font-500">Fire Place :</span> Yes</li>
                                        <li><span class="font-500">Heating System :</span> Floor Heating</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="property-overview border rounded bg-white p-30 mb-30">
                            <div class="row row-cols-1">
                                <div class="col">
                                    <h5 class="mb-3">Property Summary</h5>
                                    <div class="table-striped overflow-x-scroll pb-2">
                                        <table class="w-100">
                                            <tbody>
                                                <tr>
                                                    <td>Property Id :</td>
                                                    <td>LA459C27</td>
                                                    <td>Listing Type :</td>
                                                    <td>For Sale</td>
                                                </tr>
                                                <tr>
                                                    <td>Property Type:</td>
                                                    <td>Appartment</td>
                                                    <td>Current Owner :</td>
                                                    <td>Green Developers LTD</td>
                                                </tr>
                                                <tr>
                                                    <td>Insurance :</td>
                                                    <td>Yes</td>
                                                    <td>Architecture :</td>
                                                    <td>Nova Socity</td>
                                                </tr>
                                                <tr>
                                                    <td>Total Floor :</td>
                                                    <td>10 Story Building</td>
                                                    <td>Year of Built :</td>
                                                    <td>2008 - 2012</td>
                                                </tr>
                                                <tr>
                                                    <td>Furniture Type :</td>
                                                    <td>High Class</td>
                                                    <td>Payment Way :</td>
                                                    <td>Instalment / Cash</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="property-overview border rounded bg-white p-30 mb-30">
                            <div class="row row-cols-1">
                                <div class="col">
                                    <h5 class="mb-3">Property Features</h5>
                                    <ul class="list-three-fold-width list-style-tick">
                                        <li>Fitness Lab and Room</li>
                                        <li>Swiming Pools</li>
                                        <li>Parking Facility</li>
                                        <li>Green Park View</li>
                                        <li>Playground Include</li>
                                        <li>Garden</li>
                                        <li>Kitchen Furniture</li>
                                        <li>Fire Security</li>
                                        <li>High Class Door</li>
                                        <li>Store Room</li>
                                        <li>Marble Floor</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="property-overview border rounded bg-white p-30 mb-30">
                            <div class="row row-cols-1">
                                <div class="col">
                                    <h5 class="mb-3">Floor Plans</h5>
                                    <div class="simple-collaps mb-2">
                                        <span class="accordion bg-light text-secondary d-block px-4 py-2">Floor Plans [ 4200 sqft ]</span>
                                        <div class="panel">
                                            <div class="px-4 py-3">
                                                <ul class="d-inline-block">
                                                    <li class="float-start me-3"><span class="text-secondary">Bed: </span>162.5 sqft</li>
                                                    <li class="float-start me-3"><span class="text-secondary">Kitchen: </span>108.2 sqft</li>
                                                    <li class="float-start me-3"><span class="text-secondary">Dining: </span>145.7 sqft</li>
                                                    <li class="float-start me-3"><span class="text-secondary">Bath: </span>38.7 sqft</li>
                                                    <li class="float-start me-3"><span class="text-secondary">Storage: </span>123. 2 sqft</li>
                                                </ul>
                                                <img src="assets/images/house-floor-plan.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simple-collaps mb-2">
                                        <span class="accordion bg-light text-secondary d-block px-4 py-2">Grage Plans [ 4200 sqft ]</span>
                                        <div class="panel">
                                            <div class="px-4 py-3">
                                                <ul class="d-inline-block">
                                                    <li class="float-start me-3"><span class="text-secondary">Bed: </span>162.5 sqft</li>
                                                    <li class="float-start me-3"><span class="text-secondary">Kitchen: </span>108.2 sqft</li>
                                                    <li class="float-start me-3"><span class="text-secondary">Dining: </span>145.7 sqft</li>
                                                    <li class="float-start me-3"><span class="text-secondary">Bath: </span>38.7 sqft</li>
                                                    <li class="float-start me-3"><span class="text-secondary">Storage: </span>123. 2 sqft</li>
                                                </ul>
                                                <img src="assets/images/house-floor-plan.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simple-collaps mb-2">
                                        <span class="accordion bg-light text-secondary d-block px-4 py-2">Garden Plans [ 4200 sqft ]</span>
                                        <div class="panel">
                                            <div class="px-4 py-3">
                                                <ul class="d-inline-block">
                                                    <li class="float-start me-3"><span class="text-secondary">Bed: </span>162.5 sqft</li>
                                                    <li class="float-start me-3"><span class="text-secondary">Kitchen: </span>108.2 sqft</li>
                                                    <li class="float-start me-3"><span class="text-secondary">Dining: </span>145.7 sqft</li>
                                                    <li class="float-start me-3"><span class="text-secondary">Bath: </span>38.7 sqft</li>
                                                    <li class="float-start me-3"><span class="text-secondary">Storage: </span>123. 2 sqft</li>
                                                </ul>
                                                <img src="assets/images/house-floor-plan.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="property-overview border rounded bg-white p-30 mb-30">
                            <div class="row row-cols-1">
                                <div class="col">
                                    <h5 class="mb-4 font-400">Property Views</h5>
                                    <form class="rounded quick-search form-icon-right mb-4 p-0" action="#" method="post">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <select class="form-control">
													<option>Yearly</option>
													<option>Monthly</option>
													<option>Weekly</option>
													<option>Daily</option>
												</select>
                                            </div>
                                            <div class="col-md-3 ms-auto">
                                                <select class="form-control">
													<option>2020</option>
													<option>2019</option>
													<option>2018</option>
													<option>2017</option>
												</select>
                                            </div>
                                            <div class="col-md-2">
                                                <button class="btn btn-primary w-100">Go</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="tab-simple tab-action pb-3">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2150479.0412172596!2d133.71245934598468!3d-25.052785806689634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2b2bfd076787c5df%3A0x538267a1955b1352!2sAustralia!5e0!3m2!1sen!2sin!4v1733490064667!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Property Details End ==============-->

@endsection

@push('page-script')
<script src="{{ theme_url('assets/js/piechart/chart.min.js') }}"></script>
<script src="{{ theme_url('js/greensock.js') }}"></script>
<script src="{{ theme_url('js/layerslider.transitions.js') }}"></script>
<script src="{{ theme_url('js/layerslider.kreaturamedia.jquery.js') }}"></script>
<script>
    $('#single-property').layerSlider({
        sliderVersion: '6.5.0b2',
        type: 'popup',
        pauseOnHover: 'disabled',
        skin: 'photogallery',
        globalBGSize: 'cover',
        navStartStop: false,
        hoverBottomNav: true,
        showCircleTimer: false,
        thumbnailNavigation: 'always',
        tnContainerWidth: '100%',
        tnHeight: 70,
        popupShowOnTimeout: 1,
        popupShowOnce: false,
        popupCloseButtonStyle: 'background: rgba(0,0,0,.5); border-radius: 2px; border: 0; left: auto; right: 10px;',
        popupResetOnClose: 'disabled',
        popupDistanceLeft: 20,
        popupDistanceRight: 20,
        popupDistanceTop: 20,
        popupDistanceBottom: 20,
        popupDurationIn: 750,
        popupDelayIn: 500,
        popupTransitionIn: 'scalefromtop',
        popupTransitionOut: 'scaletobottom',
        skinsPath: 'assets/skins/'
    });

    // Statistic
    if (document.querySelector('#mychart') !== null) {
        var ctx = document.getElementById("mychart").getContext('2d');

        // Data with datasets options
        var data = {
            type: 'line',
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct"],
            datasets: [{
                label: 'Growth',
                fill: true,
                backgroundColor: "#def7e0",
                borderColor: "#17c788",
                data: [0, 150, 450, 400, 480, 630, 580, 500, 530, 400, 430, 600, 400],
            }]
        }

        // Chart declaration with some options:
        var mychart = new Chart(ctx, {
            type: 'line',
            data: data,
        });
    }

    //Doughnut and Pie
    if (document.querySelector('#mychart-2') !== null) {
        var ctx2 = document.getElementById("mychart-2").getContext('2d');

        // Data with datasets options
        var data2 = {
            type: 'doughnut',
            labels: ['Desktop', 'Tablet', 'Mobile'],
            datasets: [{
                data: [10, 20, 30],
                backgroundColor: ['rgb(255, 99, 132)', 'rgb(54, 162, 235)', 'rgb(255, 205, 86)']
            }],

        };

        // For a pie chart
        var myPieChart = new Chart(ctx2, {
            type: 'pie',
            data: data2,
        });
        // And for a doughnut chart
        var myDoughnutChart = new Chart(ctx2, {
            type: 'doughnut',
            data: data2,
        });
    }
</script>
@endpush
