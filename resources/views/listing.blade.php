<x-frontend-layout>
    <!--============== Page title Start ==============-->
    <div class="full-row py-5 listing-heading">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="text-secondary">Property Listing</h3>
                </div>
            </div>
        </div>
    </div>
    <!--============== Page title End ==============-->

    @include('layouts.partials.listing-searchbar')

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
                                <a href="listing.html"><i class="flaticon-grid-1 flat-mini"></i></a>
                                <a href="listing-full.html"><i class="flaticon-grid flat-mini"></i></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-xl-3 row-cols-md-2 row-cols-1 property-listing">
                <div class="col">
                    <!-- Property Grid -->
                    <div class="property-grid-1 property-block bg-white transation-this">
                        <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                            <div class="cata position-absolute">
                                <span class="sale bg-secondary text-white">For Sale</span>
                                <span class="featured bg-primary text-white">Featured</span>
                            </div>
                            <a href="property-single.html"><img src="/assets/images/property-grid-3.png" alt="Image Not Found!"></a>
                            <a href="#" class="listing-ctg text-white"><i class="fa-solid fa-building"></i><span>Condos</span></a>
                            <ul class="position-absolute quick-meta">
                                <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                            </ul>
                        </div>
                        <div class="property_text p-4">
                            <span class="listing-price">$100,8850<small> ( One Time )</small></span>
                            <h5 class="listing-title"><a href="#">Luxury Condos</a></h5>
                            <span class="listing-location"><i class="fas fa-map-marker-alt"></i>Rhodes, Sydney, NSW, 2138</span>
                            <ul class="d-flex quantity font-fifteen">
                                <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>7</li>
                                <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>5</li>
                                <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                            </ul>
                        </div>
                        <div class="d-flex align-items-center post-meta mt-2 py-3 px-4 border-top">
                            <div class="agent">
                                <a href="#" class="d-flex text-general align-items-center"><img class="rounded-circle me-2" src="/assets/images/avatar.png" alt="avata"><span>Anil Amaravathi</span></a>
                            </div>
                            <div class="post-date ms-auto"><span>2 Month Ago</span></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <!-- Property Grid -->
                    <div class="property-grid-1 property-block bg-white transation-this">
                        <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                            <div class="cata position-absolute">
                                <span class="sale bg-secondary text-white">For Rent</span>
                            </div>
                            <a href="property-single.html"><img src="/assets/images/property-grid-1.png" alt="Image Not Found!"></a>
                            <a href="#" class="listing-ctg text-white"><i class="fa-solid fa-building"></i><span>Condo</span></a>
                            <ul class="position-absolute quick-meta">
                                <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                            </ul>
                        </div>
                        <div class="property_text p-4">
                            <span class="listing-price">$1,0450<small> ( Monthly )</small></span>
                            <h5 class="listing-title"><a href="#">New Developed Condos</a></h5>
                            <span class="listing-location"><i class="fas fa-map-marker-alt"></i> Rhodes, Brisbane, NSW, 2138</span>
                            <ul class="d-flex quantity font-fifteen">
                                <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>7</li>
                                <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>5</li>
                                <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                            </ul>
                        </div>
                        <div class="d-flex align-items-center post-meta mt-2 py-3 px-4 border-top">
                            <div class="agent">
                                <a href="#" class="d-flex text-general align-items-center"><img class="rounded-circle me-2" src="/assets/images/avatar.png" alt="avata"><span>Anil Amaravathi</span></a>
                            </div>
                            <div class="post-date ms-auto"><span>2 Month Ago</span></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <!-- Property Grid -->
                    <div class="property-grid-1 property-block bg-white transation-this">
                        <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                            <div class="cata position-absolute">
                                <span class="sale bg-secondary text-white">For Sale</span>
                                <span class="featured bg-primary text-white">Featured</span>
                            </div>
                            <a href="property-single.html"><img src="/assets/images/property-grid-3.png" alt="Image Not Found!"></a>
                            <a href="#" class="listing-ctg text-white"><i class="fa-solid fa-building"></i><span>Condos</span></a>
                            <ul class="position-absolute quick-meta">
                                <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                            </ul>
                        </div>
                        <div class="property_text p-4">
                            <span class="listing-price">$100,8850<small> ( One Time )</small></span>
                            <h5 class="listing-title"><a href="#">Luxury Condos</a></h5>
                            <span class="listing-location"><i class="fas fa-map-marker-alt"></i>Rhodes, Sydney, NSW, 2138</span>
                            <ul class="d-flex quantity font-fifteen">
                                <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>7</li>
                                <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>5</li>
                                <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                            </ul>
                        </div>
                        <div class="d-flex align-items-center post-meta mt-2 py-3 px-4 border-top">
                            <div class="agent">
                                <a href="#" class="d-flex text-general align-items-center"><img class="rounded-circle me-2" src="/assets/images/avatar.png" alt="avata"><span>Anil Amaravathi</span></a>
                            </div>
                            <div class="post-date ms-auto"><span>2 Month Ago</span></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <!-- Property Grid -->
                    <div class="property-grid-1 property-block bg-white transation-this">
                        <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                            <div class="cata position-absolute"><span class="sale bg-secondary text-white">For Sale</span></div>
                            <a href="property-single.html"><img src="/assets/images/property-grid-2.png" alt="Image Not Found!"></a>
                            <a href="#" class="listing-ctg text-white"><i class="fa-solid fa-building"></i><span>Apartment</span></a>
                            <ul class="position-absolute quick-meta">
                                <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                            </ul>
                        </div>
                        <div class="property_text p-4">
                            <span class="listing-price">$1850<small> ( Monthly )</small></span>
                            <h5 class="listing-title"><a href="#">Family House Residense</a></h5>
                            <span class="listing-location"><i class="fas fa-map-marker-alt"></i> Rhodes, Brisbane, NSW, 2138</span>
                            <ul class="d-flex quantity font-fifteen">
                                <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>7</li>
                                <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>5</li>
                                <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                            </ul>
                        </div>
                        <div class="d-flex align-items-center post-meta mt-2 py-3 px-4 border-top">
                            <div class="agent">
                                <a href="#" class="d-flex text-general align-items-center"><img class="rounded-circle me-2" src="/assets/images/avatar.png" alt="avata"><span>Anil Amaravathi</span></a>
                            </div>
                            <div class="post-date ms-auto"><span>2 Month Ago</span></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <!-- Property Grid -->
                    <div class="property-grid-1 property-block bg-white transation-this">
                        <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                            <div class="cata position-absolute">
                                <span class="sale bg-secondary text-white">For Rent</span>
                            </div>
                            <a href="property-single.html"><img src="/assets/images/property-grid-1.png" alt="Image Not Found!"></a>
                            <a href="#" class="listing-ctg text-white"><i class="fa-solid fa-building"></i><span>Condo</span></a>
                            <ul class="position-absolute quick-meta">
                                <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                            </ul>
                        </div>
                        <div class="property_text p-4">
                            <span class="listing-price">$1,0450<small> ( Monthly )</small></span>
                            <h5 class="listing-title"><a href="#">New Developed Condos</a></h5>
                            <span class="listing-location"><i class="fas fa-map-marker-alt"></i> Rhodes, Brisbane, NSW, 2138</span>
                            <ul class="d-flex quantity font-fifteen">
                                <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>7</li>
                                <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>5</li>
                                <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                            </ul>
                        </div>
                        <div class="d-flex align-items-center post-meta mt-2 py-3 px-4 border-top">
                            <div class="agent">
                                <a href="#" class="d-flex text-general align-items-center"><img class="rounded-circle me-2" src="/assets/images/avatar.png" alt="avata"><span>Anil Amaravathi</span></a>
                            </div>
                            <div class="post-date ms-auto"><span>2 Month Ago</span></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <!-- Property Grid -->
                    <div class="property-grid-1 property-block bg-white transation-this">
                        <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                            <div class="cata position-absolute">
                                <span class="sale bg-secondary text-white">For Sale</span>
                                <span class="featured bg-primary text-white">Featured</span>
                            </div>
                            <a href="property-single.html"><img src="/assets/images/property-grid-3.png" alt="Image Not Found!"></a>
                            <a href="#" class="listing-ctg text-white"><i class="fa-solid fa-building"></i><span>Condos</span></a>
                            <ul class="position-absolute quick-meta">
                                <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                            </ul>
                        </div>
                        <div class="property_text p-4">
                            <span class="listing-price">$100,8850<small> ( One Time )</small></span>
                            <h5 class="listing-title"><a href="#">Luxury Condos</a></h5>
                            <span class="listing-location"><i class="fas fa-map-marker-alt"></i>Rhodes, Sydney, NSW, 2138</span>
                            <ul class="d-flex quantity font-fifteen">
                                <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>7</li>
                                <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>5</li>
                                <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                            </ul>
                        </div>
                        <div class="d-flex align-items-center post-meta mt-2 py-3 px-4 border-top">
                            <div class="agent">
                                <a href="#" class="d-flex text-general align-items-center"><img class="rounded-circle me-2" src="/assets/images/avatar.png" alt="avata"><span>Anil Amaravathi</span></a>
                            </div>
                            <div class="post-date ms-auto"><span>2 Month Ago</span></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <!-- Property Grid -->
                    <div class="property-grid-1 property-block bg-white transation-this">
                        <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                            <div class="cata position-absolute"><span class="sale bg-secondary text-white">For Sale</span></div>
                            <a href="property-single.html"><img src="/assets/images/property-grid-2.png" alt="Image Not Found!"></a>
                            <a href="#" class="listing-ctg text-white"><i class="fa-solid fa-building"></i><span>Apartment</span></a>
                            <ul class="position-absolute quick-meta">
                                <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                            </ul>
                        </div>
                        <div class="property_text p-4">
                            <span class="listing-price">$1850<small> ( Monthly )</small></span>
                            <h5 class="listing-title"><a href="#">Family House Residense</a></h5>
                            <span class="listing-location"><i class="fas fa-map-marker-alt"></i> Rhodes, Brisbane, NSW, 2138</span>
                            <ul class="d-flex quantity font-fifteen">
                                <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>7</li>
                                <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>5</li>
                                <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                            </ul>
                        </div>
                        <div class="d-flex align-items-center post-meta mt-2 py-3 px-4 border-top">
                            <div class="agent">
                                <a href="#" class="d-flex text-general align-items-center"><img class="rounded-circle me-2" src="/assets/images/avatar.png" alt="avata"><span>Anil Amaravathi</span></a>
                            </div>
                            <div class="post-date ms-auto"><span>2 Month Ago</span></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <!-- Property Grid -->
                    <div class="property-grid-1 property-block bg-white transation-this">
                        <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                            <div class="cata position-absolute">
                                <span class="sale bg-secondary text-white">For Sale</span>
                                <span class="featured bg-primary text-white">Featured</span>
                            </div>
                            <a href="property-single.html"><img src="/assets/images/property-grid-3.png" alt="Image Not Found!"></a>
                            <a href="#" class="listing-ctg text-white"><i class="fa-solid fa-building"></i><span>Condos</span></a>
                            <ul class="position-absolute quick-meta">
                                <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                            </ul>
                        </div>
                        <div class="property_text p-4">
                            <span class="listing-price">$100,8850<small> ( One Time )</small></span>
                            <h5 class="listing-title"><a href="#">Luxury Condos</a></h5>
                            <span class="listing-location"><i class="fas fa-map-marker-alt"></i>Rhodes, Sydney, NSW, 2138</span>
                            <ul class="d-flex quantity font-fifteen">
                                <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>7</li>
                                <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>5</li>
                                <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                            </ul>
                        </div>
                        <div class="d-flex align-items-center post-meta mt-2 py-3 px-4 border-top">
                            <div class="agent">
                                <a href="#" class="d-flex text-general align-items-center"><img class="rounded-circle me-2" src="/assets/images/avatar.png" alt="avata"><span>Anil Amaravathi</span></a>
                            </div>
                            <div class="post-date ms-auto"><span>2 Month Ago</span></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <!-- Property Grid -->
                    <div class="property-grid-1 property-block bg-white transation-this">
                        <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                            <div class="cata position-absolute"><span class="sale bg-secondary text-white">For Sale</span></div>
                            <a href="property-single.html"><img src="/assets/images/property-grid-2.png" alt="Image Not Found!"></a>
                            <a href="#" class="listing-ctg text-white"><i class="fa-solid fa-building"></i><span>Apartment</span></a>
                            <ul class="position-absolute quick-meta">
                                <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                            </ul>
                        </div>
                        <div class="property_text p-4">
                            <span class="listing-price">$1850<small> ( Monthly )</small></span>
                            <h5 class="listing-title"><a href="#">Family House Residense</a></h5>
                            <span class="listing-location"><i class="fas fa-map-marker-alt"></i> Rhodes, Brisbane, NSW, 2138</span>
                            <ul class="d-flex quantity font-fifteen">
                                <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>7</li>
                                <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>5</li>
                                <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                            </ul>
                        </div>
                        <div class="d-flex align-items-center post-meta mt-2 py-3 px-4 border-top">
                            <div class="agent">
                                <a href="#" class="d-flex text-general align-items-center"><img class="rounded-circle me-2" src="/assets/images/avatar.png" alt="avata"><span>Anil Amaravathi</span></a>
                            </div>
                            <div class="post-date ms-auto"><span>2 Month Ago</span></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <!-- Property Grid -->
                    <div class="property-grid-1 property-block bg-white transation-this">
                        <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                            <div class="cata position-absolute">
                                <span class="sale bg-secondary text-white">For Rent</span>
                            </div>
                            <a href="property-single.html"><img src="/assets/images/property-grid-1.png" alt="Image Not Found!"></a>
                            <a href="#" class="listing-ctg text-white"><i class="fa-solid fa-building"></i><span>Condo</span></a>
                            <ul class="position-absolute quick-meta">
                                <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                            </ul>
                        </div>
                        <div class="property_text p-4">
                            <span class="listing-price">$1,0450<small> ( Monthly )</small></span>
                            <h5 class="listing-title"><a href="#">New Developed Condos</a></h5>
                            <span class="listing-location"><i class="fas fa-map-marker-alt"></i> Rhodes, Brisbane, NSW, 2138</span>
                            <ul class="d-flex quantity font-fifteen">
                                <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>7</li>
                                <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>5</li>
                                <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                            </ul>
                        </div>
                        <div class="d-flex align-items-center post-meta mt-2 py-3 px-4 border-top">
                            <div class="agent">
                                <a href="#" class="d-flex text-general align-items-center"><img class="rounded-circle me-2" src="/assets/images/avatar.png" alt="avata"><span>Anil Amaravathi</span></a>
                            </div>
                            <div class="post-date ms-auto"><span>2 Month Ago</span></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <!-- Property Grid -->
                    <div class="property-grid-1 property-block bg-white transation-this">
                        <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                            <div class="cata position-absolute">
                                <span class="sale bg-secondary text-white">For Sale</span>
                                <span class="featured bg-primary text-white">Featured</span>
                            </div>
                            <a href="property-single.html"><img src="/assets/images/property-grid-3.png" alt="Image Not Found!"></a>
                            <a href="#" class="listing-ctg text-white"><i class="fa-solid fa-building"></i><span>Condos</span></a>
                            <ul class="position-absolute quick-meta">
                                <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                            </ul>
                        </div>
                        <div class="property_text p-4">
                            <span class="listing-price">$100,8850<small> ( One Time )</small></span>
                            <h5 class="listing-title"><a href="#">Luxury Condos</a></h5>
                            <span class="listing-location"><i class="fas fa-map-marker-alt"></i>Rhodes, Sydney, NSW, 2138</span>
                            <ul class="d-flex quantity font-fifteen">
                                <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>7</li>
                                <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>5</li>
                                <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                            </ul>
                        </div>
                        <div class="d-flex align-items-center post-meta mt-2 py-3 px-4 border-top">
                            <div class="agent">
                                <a href="#" class="d-flex text-general align-items-center"><img class="rounded-circle me-2" src="/assets/images/avatar.png" alt="avata"><span>Anil Amaravathi</span></a>
                            </div>
                            <div class="post-date ms-auto"><span>2 Month Ago</span></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <!-- Property Grid -->
                    <div class="property-grid-1 property-block bg-white transation-this">
                        <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
                            <div class="cata position-absolute"><span class="sale bg-secondary text-white">For Sale</span></div>
                            <a href="property-single.html"><img src="/assets/images/property-grid-2.png" alt="Image Not Found!"></a>
                            <a href="#" class="listing-ctg text-white"><i class="fa-solid fa-building"></i><span>Apartment</span></a>
                            <ul class="position-absolute quick-meta">
                                <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                                <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
                            </ul>
                        </div>
                        <div class="property_text p-4">
                            <span class="listing-price">$1850<small> ( Monthly )</small></span>
                            <h5 class="listing-title"><a href="#">Family House Residense</a></h5>
                            <span class="listing-location"><i class="fas fa-map-marker-alt"></i> Rhodes, Brisbane, NSW, 2138</span>
                            <ul class="d-flex quantity font-fifteen">
                                <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>7</li>
                                <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>5</li>
                                <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                                <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
                            </ul>
                        </div>
                        <div class="d-flex align-items-center post-meta mt-2 py-3 px-4 border-top">
                            <div class="agent">
                                <a href="#" class="d-flex text-general align-items-center"><img class="rounded-circle me-2" src="/assets/images/avatar.png" alt="avata"><span>Anil Amaravathi</span></a>
                            </div>
                            <div class="post-date ms-auto"><span>2 Month Ago</span></div>
                        </div>
                    </div>
                </div>
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
</x-frontend-layout>
