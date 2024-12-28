<div class="col">
    <!-- Property Grid -->
    <div class="property-list-2 p-2 bg-white property-block border transation-this hover-shadow rounded">
        <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
            <div class="cata position-absolute"><span class="sale bg-secondary text-white">For Rent</span></div>
            <div class="owl-carousel single-carusel dot-disable nav-between-in">
                <div class="item">
                    <a href="{{ route('property.detail') }}"><img src="{{ theme_url('images/3.png')}}" alt="Image Not Found!"></a>
                </div>
                <div class="item">
                    <a href="{{ route('property.detail') }}"><img src="{{ theme_url('assets/images/property_grid/property-grid-2.png')}}" alt="Image Not Found!"></a>
                </div>
            </div>
            <a href="#" class="listing-ctg text-white"><i class="fa-solid fa-building"></i><span>Apartment</span></a>
            <ul class="position-absolute quick-meta">
                <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
            </ul>
        </div>
        <div class="property_text p-3">
            <span class="listing-price">$10450<small> ( Monthly )</small></span>
            <h5 class="listing-title"><a href="{{ route('property.detail') }}">Apolo Family House Residense</a></h5>
             <span class="listing-location"><i class="fas fa-map-marker-alt"></i> Rhodes, Brisbane, NSW, 2138</span>
            <ul class="d-flex quantity font-fifteen">
                <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>5</li>
                <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>3</li>
                <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1100 Sqft</li>
                <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
            </ul>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<a href="#" class="btn-link">More Info...</a></p>
            <div class="d-flex align-items-center post-meta mt-auto">
                <div class="agent">
                    <a href="#" class="d-flex text-general align-items-center"><img class="rounded-circle me-2" src="{{ theme_url('images/avatar.png')}}" alt="avata"><span>Brandan Write</span></a>
                </div>
                <div class="post-date ms-auto"><span>2 Month Ago</span></div>
            </div>
        </div>
    </div>
</div>
