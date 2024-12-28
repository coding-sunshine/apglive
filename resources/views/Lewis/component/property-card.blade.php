
<div class="{{ $colClass ?? 'col' }}">
    <!-- Property Grid -->
    <div class="property-grid-1 property-block bg-white transation-this">
        <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom">
            <div class="cata position-absolute">
                <span class="sale bg-secondary text-white">For Sale</span>
                <span class="featured bg-primary text-white">Featured</span>
            </div>
            <a href="{{ route('property.detail') }}"><img src="{{ theme_url('images/property-grid-2.png') }}" alt="Image Not Found!"></a>
            <a href="#" class="listing-ctg text-white"><i class="fa-solid fa-building"></i><span>Condo</span></a>
            <ul class="position-absolute quick-meta">
                <li><a href="#" title="Add Compare"><i class="flaticon-transfer flat-mini"></i></a></li>
                <li><a href="#" title="Add Favourite"><i class="flaticon-like-1 flat-mini"></i></a></li>
                <li class="md-mx-none"><a class="quick-view" href="#quick-view" title="Quick View"><i class="flaticon-zoom-increasing-symbol flat-mini"></i></a></li>
            </ul>
        </div>
        <div class="property_text p-4">
            <span class="listing-price">$120,5500<small> ( One Time )</small></span>
            <h5><a class="text-secondary" href="{{ route('property.detail') }}">Luxury Condos Riverside</a></h5>
            <span class="listing-location"><i class="fas fa-map-marker-alt"></i> 2305 sydney, AB66210</span>
            <ul class="d-flex quantity font-fifteen">
                <li title="Beds"><span><i class="fa-solid fa-bed"></i></span>7</li>
                <li title="Baths"><span><i class="fa-solid fa-shower"></i></span>5</li>
                <li title="Area"><span><i class="fa-solid fa-vector-square"></i></span>1200 Sqft</li>
                <li title="Gas"><span><i class="fa-solid fa-fire"></i></span>Yes</li>
            </ul>
        </div>
        <div class="d-flex align-items-center post-meta mt-2 py-3 px-4 border-top">
            <div class="agent">
                <a href="#" class="d-flex text-general align-items-center"><img class="rounded-circle me-2" src="{{ theme_url('images/team/1.jpg')}}" alt="avata"><span>Ali Tufan</span></a>
            </div>
            <div class="post-date ms-auto"><span>2 Month Ago</span></div>
        </div>
    </div>
</div>
