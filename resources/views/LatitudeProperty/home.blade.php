@extends('layout.app')

@section('title') Home @endsection
@section('page-wrapper-class') bg-white @endsection
@section('nav-class') nav-white @endsection

@section('main-content')

    <!--============== Slider Area Start ==============-->
    <div class="full-row p-0 overflow-hidden banner-slider bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h1 class="mb-3">Achieve 12% + Government <br>Backed Returns With NDIS <br>Housing Investment</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <a href="#" class="btn btn-primary mt-2">Get Started</a>
                </div>
                <div class="col-lg-4 home-search">
                    <form class="bg-white shadow-sm quick-search form-icon-right position-relative" action="#" method="post">
                        <div class="row d-flex row-cols-lg-6 row-cols-1 g-3">
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
                                <div class="position-relative">
                                    <button class="form-control text-start toggle-btn" data-target="#aditional-check">Advanced <i class="fas fa-ellipsis-v font-mini icon-font y-center text-dark"></i></button>
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
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--============== Slider Area End ==============-->

        <!-- =============== About ================-->
    <div class="full-row py-100 home-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pe-5">
                   <img src="{{ theme_url('images/bg-5.png') }}">
                </div>
                <div class="col-lg-6">
                    <div class="py-2">
                        <h2 class="text-dark mb-3">Government backed, long-term<br> secure cashflow positive<br> property investing.</h2>
                        <p>Building wealth through property investing doesn’t happen by chance but by choice. SDA housing is high-yield and low-risk. It’s the asset of choice for sophisticated and first time investors alike. It’s for those who value cashflow and capital growth above all else no matter the market.</p>
                        <a href="#" class="btn btn-primary mt-2">Get Started</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- =============== About ================-->

    <!--============== Statistics Section Start ==============-->
    <div class="full-row bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-secondary mb-5">
                        <span class="tagline-2 text-primary">Statistics</span>
                        <h2 class="text-secondary mb-4">Number of projects we completed</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="fact-counter">
                        <div class="row row-cols-md-4 row-cols-1">
                            <div class="col">
                                <div class="mb-30 text-start count wow fadeIn" data-wow-duration="300ms">
                                    <span class="count-num text-secondary h1" data-speed="3000" data-stop="250">250</span><span class="text-secondary h1">+</span>
                                    <div class="text-secondary h5 py-2">Clients Assisted</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-30 text-start count wow fadeIn" data-wow-duration="300ms">
                                    <span class="text-secondary h1">$</span><span class="count-num text-secondary h1" data-speed="3000" data-stop="137">300</span><span class="text-secondary h1">m+</span>
                                    <div class="text-secondary h5 py-2">Markets Campaigns</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-30 text-start count wow fadeIn" data-wow-duration="300ms">
                                    <span class="count-num text-secondary h1" data-speed="3000" data-stop="137">100</span><span class="text-secondary h1">+</span>
                                    <div class="text-secondary h5 py-2">Our Clients</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-30 text-start count wow fadeIn" data-wow-duration="300ms">
                                    <span class="count-num text-secondary h1" data-speed="3000" data-stop="137">3000</span><span class="text-secondary h1">+</span>
                                    <div class="text-secondary h5 py-2">Completed projects</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============== Statistics Section End ==============-->
      <!--============== Features Start ==============-->
      <div class="full-row pb-30 home-section3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="text-secondary mb-5">
                        <span class="tagline-2 text-primary">Latitude Property Escapes</span>
                        <h2 class="text-secondary mb-4">Ethical Investment. Long Term Tenancy. Fee For Service.</h2>
                        <p>Apollo Investment is an NDIS Investment Property Consultant that works with you, for you. We help property investors just like you navigate investing in the complex but high-yielding Special Disability Accommodation (SDA) sector. Our team of specialists provide you with absolute clarity and confidence when it comes to building wealth through SDA housing.</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row row-cols-md-2 row-cols-1">
                        <div class="col border-start border-geay mb-5">
                            <div class="simple-thumb transation px-4">
                                <span class="h3 down-line text-general mb-4 d-table">01</span>
                                <h5 class="my-3"><a href="#" class="text-secondary">Passive Returns of 12%+</a></h5>
                                <p>Achieving above market returns for hundreds of clients is not by chance but by expertise. We do our best to maximise your return on capital.</p>
                            </div>
                        </div>
                        <div class="col border-start border-geay mb-5">
                            <div class="simple-thumb transation px-4">
                                <span class="h3 down-line text-general mb-4 d-table">02</span>
                                <h5 class="my-3"><a href="#" class="text-secondary">100% Transparency</a></h5>
                                <p>No hidden fees, back handed deals or rebates. We’re strictly a fee-for-service business that provides clients with guidance in a complex space.</p>
                            </div>
                        </div>
                        <div class="col border-start border-geay mb-5">
                            <div class="simple-thumb transation px-4">
                                <span class="h3 down-line text-general mb-4 d-table">03</span>
                                <h5 class="my-3"><a href="#" class="text-secondary">Exclusive Opportunities</a></h5>
                                <p>Get access to exclusive property deals through our acquisitions team. Don’t compete in the open market, get the deals before hand.</p>
                            </div>
                        </div>
                        <div class="col border-start border-geay mb-5">
                            <div class="simple-thumb transation px-4">
                                <span class="h3 down-line text-general mb-4 d-table">04</span>
                                <h5 class="my-3"><a href="#" class="text-secondary">Turn-Key Solutions</a></h5>
                                <p>Our service package is turn-key. We manage everything from planning to advisory, building to acquiring a tenant.</p>
                            </div>
                        </div>
                        <div class="col border-start border-geay mb-5">
                            <div class="simple-thumb transation px-4">
                                <span class="h3 down-line text-general mb-4 d-table">05</span>
                                <h5 class="my-3"><a href="#" class="text-secondary">Investment Analysis</a></h5>
                                <p>Our investment team analyse every deal in finite detail to ensure you’re achieving the highest possible return.</p>
                            </div>
                        </div>
                        <div class="col border-start border-geay mb-5">
                            <div class="simple-thumb transation px-4">
                                <span class="h3 down-line text-general mb-4 d-table">06</span>
                                <h5 class="my-3"><a href="#" class="text-secondary">Government Subsidised</a></h5>
                                <p>NDIS is here to stay providing investors an opportunity to get tenants supported by long term government funding.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============== Features End ==============-->

    <!--============== Accordian Start ==============-->
    <div class="full-row bg-light pb-0 home-video-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="text-secondary mb-lg-5">
                        <span class="tagline-2 text-primary">Latitude Property Escapes</span>
                        <h2 class="text-secondary mb-4">Lorem ipsum dolor sit amet</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row row-cols-xl-2 row-cols-1">
            <div class="col px-0"><img src="{{ theme_url('images/home-image.webp') }}" alt="Latitude property Escapes"></div>
                <div class="col bg-white" style="margin-top: -100px;">
                    <div class="w-75 w-lg-100 sm-px-0" style="padding:50px 80px">
                        <div class="simple-video-play d-flex mb-3">
                            <div class="position-relative d-inline-block">
                                <a data-fancybox href="https://www.youtube.com/watch?v=bh-klGboIg8" class="rounded-circle position-relative bg-secondary" style="z-index: 10"><i class="flaticon-play-button position-relative xy-center flat-mini rounded-circle text-white"></i></a>
                                <div class="loader position-absolute xy-center">
                                    <div class="loader-inner ball-scale-multiple">
                                        <div></div>
                                        <div></div>
                                    </div><span class="tooltip">
                                  <b>ball-scale-multiple</b></span>
                                </div>
                            </div>
                            <div class="ps-4 text-secondary font-medium">Play Video</div>
                        </div>

                        <h2 class="text-secondary mb-5">Lorem ipsum dolor sit amet.</h2>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                        ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============== Accordian End ==============-->
    <!--============== Property Agent Start ==============-->
    <div class="full-row">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="align-items-center d-flex">
                        <div class="me-auto">
                            <h2 class="d-table">Meet the team</h2>
                        </div>
                        <a href="# class="ms-auto btn-link">View All</a>
                    </div>
                </div>
            </div>
            <div class="row row-cols-xl-4 row-cols-md-2 row-cols-1 mt-5 gx-5 team-row">
                <div class="col bg-light">
                    <div class="thumb-team-simple">
                        <img class="rounded-lg" src="{{ theme_url('images/nic.jpg') }}" alt="">
                        <div class="user-info d-flex pt-3">
                            <div class="me-auto">
                                <h5 class="text-dark mb-0 font-400"><a href="#">Nic Alessio</a></h5>
                                <span class="text-secondary font-fifteen">Head of Acquisitions</span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col bg-light">
                    <div class="thumb-team-simple">
                        <img class="rounded-lg" src="{{ theme_url('images/ryan.jpg') }}" alt="">
                        <div class="user-info d-flex pt-3">
                            <div class="me-auto">
                                <h5 class="text-dark mb-0 font-400"><a href="#">Ryan Gordon</a></h5>
                                <span class="text-secondary font-fifteen">Client Manager</span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col bg-light">
                    <div class="thumb-team-simple">
                        <img class="rounded-lg" src="{{ theme_url('images/raveena.jpg') }}" alt="">
                        <div class="user-info d-flex pt-3">
                            <div class="me-auto">
                                <h5 class="text-dark mb-0 font-400"><a href="#">Raveena Vasisht</a></h5>
                                <span class="text-secondary font-fifteen">Client Manager</span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col bg-light">
                    <div class="thumb-team-simple">
                        <img class="rounded-lg" src="{{ theme_url('images/swathi.jpg') }}" alt="">
                        <div class="user-info d-flex pt-3">
                            <div class="me-auto">
                                <h5 class="text-dark mb-0 font-400"><a href="#">Swathi Raja</a></h5>
                                <span class="text-secondary font-fifteen">Acquisitions Coordinator</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============== Property Agent End ==============-->

     <!--============== Testimonial Section Start ==============-->
     <div class="full-row overlay-secondary testimonial-home" style="background-image: url({{ theme_url('images/banner3.png') }}); background-position: center center; background-repeat: no-repeat">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <span class="text-primary tagline pb-2 d-table m-auto">Testimonial</span>
                    <h2 class="down-line w-50 mx-auto mb-4 text-white text-center w-sm-100">Whay Client Says About Us</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="testimonial-simple text-center px-5">
                        <div class="text-carusel owl-carousel 3block-carusel home-testimonial">
                            <div class="item">
                                <i class="flaticon-right-quote flat-large text-primary d-table mx-auto"></i>
                                <blockquote class="text-white fs-5 fst-italic">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</blockquote>
                                <h4 class="mt-4 font-400 text-white">Lorem Ipsum</h4>
                                <span class="text-primary font-fifteen">CEO</span>
                            </div>
                            <div class="item">
                                <i class="flaticon-right-quote flat-large text-primary d-table mx-auto"></i>
                                <blockquote class="text-white fs-5 fst-italic">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</blockquote>
                                <h4 class="mt-4 font-400 text-white">Lorem Ipsum</h4>
                                <span class="text-primary font-fifteen">Executive director</span>
                            </div>
                            <div class="item">
                                <i class="flaticon-right-quote flat-large text-primary d-table mx-auto"></i>
                                <blockquote class="text-white fs-5 fst-italic">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</blockquote>
                                <h4 class="mt-4 font-400 text-white">Lorem Ipsum</h4>
                                <span class="text-primary font-fifteen">Executive director</span>
                            </div>
                            <div class="item">
                                <i class="flaticon-right-quote flat-large text-primary d-table mx-auto"></i>
                                <blockquote class="text-white fs-5 fst-italic">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</blockquote>
                                <h4 class="mt-4 font-400 text-white">Lorem Ipsum</h4>
                                <span class="text-primary font-fifteen">Executive director</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============== Testimonial Section End ==============-->
     <!--============== Client Logo Start ==============-->
     <div class="full-row bg-white clients-slider">
        <div class="container">
            <div class="row">
                <div class="col position-relative">
                    <h2 class="text-secondary text-center mx-auto mb-4 font-400">Our Clients</h2>
                    <span class="sub-title text-secondary text-center mx-auto higlight-font mb-5 w-50 w-md-100">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="owl-carousel partner-slider">
                        <div class="item bg-white">
                        <a href="#"><img src="{{ theme_url('images/BAM-logo.webp') }}" alt="" /></a>
                        </div>
                        <div class="item bg-white">
                        <a href="#"><img src="{{ theme_url('images/SPI-logo.webp') }}" alt="" /></a>
                        </div>
                        <div class="item bg-white">
                        <a href="#"><img src="{{ theme_url('images/Domain-logo.webp') }}" alt="" /></a>
                        </div>
                        <div class="item bg-white">
                        <a href="#"><img src="{{ theme_url('images/finder-logo.webp') }}" alt="" /></a>
                        </div>
                        <div class="item bg-white">
                        <a href="#"><img src="{{ theme_url('images/property-invester.webp') }}" alt="" /></a>
                        </div>
                        <div class="item bg-white">
                        <a href="#"><img src="{{ theme_url('images/property.webp') }}" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============== Client Logo End ==============-->
    <!--============== Faqs Start ==============-->
    <div class="full-row bg-light faq-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-secondary mx-auto mb-4 font-400">Frequently Asked Questions</h2>
                    <div class="simple-collaps px-4 py-3 bg-white border rounded mb-3">
                        <span class="accordion text-secondary d-block">What is the NDIS?</span>
                        <div class="panel">
                            <p>The National Disability Insurance Scheme is a government initiative implemented to provide financial assistance to hundreds of thousands of Australians with a significant and permanent disability and their families and carers. The NDIS is designed to assist people with disabilities to live more independently.</p>
                        </div>
                    </div>
                    <div class="simple-collaps px-4 py-3 bg-white border rounded mb-3">
                        <span class="accordion text-secondary d-block">What is SDA?</span>
                        <div class="panel">
                            <p>Some Participants in the NDIS will receive funding for SDA.SDA stands for ‘Specialised Disability Accommodation’ and isa system created under the NDIS for people with high support housing needs to ensure they are able to live independently and also receive support they require whilst at home in specially designed or adapted homes to help deliver their support needs.</p>
                        </div>
                    </div>
                    <div class="simple-collaps px-4 py-3 bg-white border rounded mb-3">
                        <span class="accordion text-secondary d-block">What makes SDA Property Investment appealing?</span>
                        <div class="panel">
                            <p>The approach to SDA funding has been to make investing in accommodation designed for NDIS participants both commercially viable and attractive for investors.</p>
                            <p><strong>summary is as follows:</strong> </p>
                             <ul>
                                <li>The NDIS is attractive to investors who want a long term, steady income, while receiving significant yields.</li>
                                <li>Gross rental yields of up to 25% on the high end, and 10% gross yields on the low end. However after costs, investors should expect an average 8-15% pa net return just to be conservative, as it depends on many factors.</li>
                                <li>NDIS property prices start from around $800,000 and can range up to $950,000, as an approximate figure. It all depends on land prices in the area selected, and the inclusions required for the different category of participants living within the SDA home.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="simple-collaps px-4 py-3 bg-white border rounded mb-3">
                        <span class="accordion text-secondary d-block">How do I receive my rent from a SDA Investment Property?</span>
                        <div class="panel">
                            <p>The SDA payment from the NDIS is a standardised annual amount calculated based on the dwellings location, size and</p>
                            <p>level of accessibility. This is on a per Participant basis. As for all NDIS support, Registered Providers can make a</p>
                            <p>claim for SDA payment after that support has been delivered or provided. Standard claiming frequency for SDA is monthly,</p>
                            <p>however the frequency can be flexible as long as it is in arrears. Owners should be paid monthly, in arrears from</p>
                            <p>the SDA. Each Participant’s payment is made up of 3 parts;</p>
                             <ul>
                                <li>Reasonable Rent Contribution (RRC): (25% of base disability supplement)</li>
                                <li>100% Commonwealth Rent Assistance</li>
                                <li>NDIS SDA Payment (Refer to the NDIS SDA Payments Schedule in this eBook)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============== Faqs End ==============-->

    <!--============== Our precess Start ==============-->
     <div class="full-row">
        <div class="container">
            <div class="row">
                <div class="col mb-5">
                    <h2 class="main-title down-line mx-auto mb-4 text-center w-sm-100">Our Process</h2>
                    <span class="d-table w-50 w-sm-100 sub-title mx-auto text-center">We provide you an end-to-end investment solution. It’s designed so you truely can be a passive investor because we take care of everything. From navigating the complex NDIS properties to finding a tenant, project management and completion sign off. We’re here every step of the way.</span>
                </div>
            </div>
            <div class="row row-cols-xl-3 row-cols-sm-2 row-cols-1 g-4 process-row">
                <div class="col">
                    <div class="text-center p-35 bg-white transation hover-shadow h-100 rounded bg-light">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#0473a2" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 56.396 47.002" preserveAspectRatio="xMidYMid meet" aria-hidden="true" role="img">
                            <defs>
                              <clipPath id="clip-path">
                                <rect id="Rechteck_49" data-name="Rechteck 49" width="56.396" height="47.002" fill="none"></rect>
                              </clipPath>
                            </defs>
                            <g id="Gruppe_56" data-name="Gruppe 56" clip-path="url(#clip-path)">
                              <path id="Pfad_174" data-name="Pfad 174" d="M27.684,2.225H5.355A3.594,3.594,0,0,0,2.716,3.406,4.242,4.242,0,0,0,1.627,6.248v15.28a4.206,4.206,0,0,0,1.089,2.842,3.612,3.612,0,0,0,2.639,1.2H7.532a.837.837,0,0,1,.812.886v5.259l6.108-5.905a.81.81,0,0,1,.572-.24h12.66a3.912,3.912,0,0,0,3.728-4.041V6.248a4.242,4.242,0,0,0-1.089-2.842,3.564,3.564,0,0,0-2.639-1.181m5.352,12.807v6.5a5.593,5.593,0,0,1-5.352,5.795H24.9v7.013a4.12,4.12,0,0,0,1.089,2.842,3.554,3.554,0,0,0,2.62,1.181H41.266a.827.827,0,0,1,.572.258l6.108,5.905V39.243a.864.864,0,0,1,.83-.886h2.178a3.554,3.554,0,0,0,2.62-1.181,4.12,4.12,0,0,0,1.089-2.842V19.055a4.153,4.153,0,0,0-1.089-2.842,3.554,3.554,0,0,0-2.62-1.181ZM5.355.453H27.684a5.113,5.113,0,0,1,3.783,1.7,6.01,6.01,0,0,1,1.569,4.1V13.26H50.955a5.1,5.1,0,0,1,3.765,1.7,6.025,6.025,0,0,1,1.587,4.1v15.28a6.025,6.025,0,0,1-1.587,4.1,5.1,5.1,0,0,1-3.765,1.7H49.589v6.348a.87.87,0,0,1-.221.591.769.769,0,0,1-1.144.074l-7.271-7.013H28.607a5.174,5.174,0,0,1-3.783-1.7,6.1,6.1,0,0,1-1.569-4.1V27.322H15.338L8.067,34.335a.756.756,0,0,1-1.144-.074.953.953,0,0,1-.2-.591V27.322H5.355a5.143,5.143,0,0,1-3.783-1.7A6.01,6.01,0,0,1,0,21.527V6.248a6.01,6.01,0,0,1,1.569-4.1A5.143,5.143,0,0,1,5.355.453" transform="translate(0.052 -0.453)"></path>
                              <path id="Pfad_175" data-name="Pfad 175" d="M6.44,7.166,5.609,4.49l-.83,2.676ZM5,2.035H5V2.017L5.019,2l.129-.221.2-.148H5.37V1.611h.018l.148-.037h.148l.148.037h.018v.018h.018l.185.148h.018L6.2,2v.018l.018.018v.018L9.226,11.8a.724.724,0,0,1-.406.886.62.62,0,0,1-.812-.443L6.864,8.568H4.355L3.21,12.24a.626.626,0,0,1-.812.443.724.724,0,0,1-.406-.886L5,2.054V2.035" transform="translate(34.214 19.113)"></path>
                              <path id="Pfad_176" data-name="Pfad 176" d="M5.445,9.957a.738.738,0,0,1,.111-.978.6.6,0,0,1,.9.129l.7.96a6.268,6.268,0,0,0,.794-3.174,5.917,5.917,0,0,0-.941-3.359A2.559,2.559,0,0,0,4.965,2.244,2.56,2.56,0,0,0,2.916,3.535a5.917,5.917,0,0,0-.941,3.359,5.979,5.979,0,0,0,.941,3.377,2.56,2.56,0,0,0,2.048,1.292,2.149,2.149,0,0,0,1.292-.48ZM4.965.841A3.785,3.785,0,0,1,8.065,2.7a7.481,7.481,0,0,1,1.2,4.189,7.544,7.544,0,0,1-1.2,4.208l-.074.111.757,1.052a.736.736,0,0,1-.111.978.612.612,0,0,1-.9-.111L7.05,12.19a3.279,3.279,0,0,1-2.085.775,3.829,3.829,0,0,1-3.1-1.864,7.544,7.544,0,0,1-1.2-4.208A7.481,7.481,0,0,1,1.865,2.7,3.785,3.785,0,0,1,4.965.841" transform="translate(11.607 6.319)"></path>
                            </g>
                          </svg>
                        <h5 class="mb-3 font-400"><a href="#" class="d-block text-secondary hover-text-primary mt-4">Initial Consultation</a></h5>
                        <p>Obligation free, the initial consultation is so we can better understand your investment goals and provide you detailed information about investing in SDA housing.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="text-center p-35 bg-white transation hover-shadow h-100 rounded bg-light">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#0473a2" xmlns:xlink="http://www.w3.org/1999/xlink" id="Gruppe_59" data-name="Gruppe 59" width="100%" height="100%" viewBox="0 0 51.179 51.179" preserveAspectRatio="xMidYMid meet" aria-hidden="true" role="img">
                            <defs>
                              <clipPath id="clip-path">
                                <rect id="Rechteck_55" data-name="Rechteck 55" width="51.179" height="51.179" fill="none"></rect>
                              </clipPath>
                            </defs>
                            <g id="Gruppe_67" data-name="Gruppe 67" transform="translate(0 0)" clip-path="url(#clip-path)">
                              <path id="Pfad_196" data-name="Pfad 196" d="M21.892,25.315H1.555V20.292a3.871,3.871,0,0,1,3.861-3.861H17.945a3.871,3.871,0,0,1,3.861,3.861v5.023ZM6.664,8.466a5.174,5.174,0,1,1,5.181,5.181A5.179,5.179,0,0,1,6.664,8.466m11.281,6.415H13.926a6.724,6.724,0,1,0-4.176,0H5.416A5.424,5.424,0,0,0,.005,20.292v5.8a.738.738,0,0,0,.775.775H22.667a.727.727,0,0,0,.761-.775v-5.8a5.439,5.439,0,0,0-5.482-5.411" transform="translate(0.067 24.315)" fill="#0473a2"></path>
                              <path id="Pfad_197" data-name="Pfad 197" d="M23.655,25.315H3.318V20.292a3.883,3.883,0,0,1,3.875-3.861h12.6a3.871,3.871,0,0,1,3.861,3.861ZM8.413,8.466a5.188,5.188,0,1,1,5.2,5.181,5.2,5.2,0,0,1-5.2-5.181m11.381,6.415H15.775a6.666,6.666,0,0,0,4.636-6.344,6.731,6.731,0,0,0-13.462,0,6.66,6.66,0,0,0,4.65,6.344H7.351A5.424,5.424,0,0,0,1.94,20.292v5.8a.727.727,0,0,0,.761.775H24.43a.738.738,0,0,0,.775-.775v-5.8a5.433,5.433,0,0,0-5.411-5.411" transform="translate(25.903 24.315)" fill="#0473a2"></path>
                              <path id="Pfad_198" data-name="Pfad 198" d="M22.635,10.7A14.283,14.283,0,0,0,20.4,2.344l1.78.388a.779.779,0,0,0,.919-.531.783.783,0,0,0-.531-.933L18.688.334a.648.648,0,0,0-.531.086,1.437,1.437,0,0,0-.474.531l-.531,3.631a.742.742,0,1,0,1.464.244l.3-1.866a12.161,12.161,0,0,1,2.167,7.664,12.209,12.209,0,0,1-4.09,8.568,12.287,12.287,0,0,1-8.97,3.172,11.626,11.626,0,0,1-5.569-1.622.778.778,0,0,0-1.076.316.773.773,0,0,0,.3,1.076,14.472,14.472,0,0,0,6.272,1.851A14.119,14.119,0,0,0,18,20.441,14.214,14.214,0,0,0,22.635,10.7" transform="translate(16.948 4.073)" fill="#0473a2"></path>
                              <path id="Pfad_199" data-name="Pfad 199" d="M1.293,22.6l3.789.933a.764.764,0,0,0,.933-.617l.531-3.789a.742.742,0,1,0-1.464-.244l-.23,2.024a12.406,12.406,0,0,1-2.1-7.578,12.229,12.229,0,0,1,4.1-8.582,12.325,12.325,0,0,1,8.97-3.172,11.978,11.978,0,0,1,5.64,1.694.762.762,0,0,0,1.076-.3.793.793,0,0,0-.3-1.091A15.564,15.564,0,0,0,15.832.023,14.031,14.031,0,0,0,5.771,3.583a13.582,13.582,0,0,0-4.55,9.659A13.692,13.692,0,0,0,3.46,21.523l-1.708-.388a.767.767,0,0,0-.919.531.691.691,0,0,0,.459.933" transform="translate(10.461 0.136)" fill="#0473a2"></path>
                            </g>
                          </svg>
                        <h5 class="mb-3 font-400"><a href="#" class="d-block text-secondary hover-text-primary mt-4">Tenant Coordination</a></h5>
                        <p>No hidden fees, back handed deals or rebates. We’re strictly a fee-for-service business that provides clients with guidance in a complex space.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="text-center p-35 bg-white transation hover-shadow h-100 rounded bg-light">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#0473a2" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 55.285 46.077" preserveAspectRatio="xMidYMid meet" aria-hidden="true" role="img">
                            <defs>
                              <clipPath id="clip-path">
                                <rect id="Rechteck_51" data-name="Rechteck 51" width="55.285" height="46.077" fill="none"></rect>
                              </clipPath>
                            </defs>
                            <g id="Gruppe_58" data-name="Gruppe 58" clip-path="url(#clip-path)">
                              <path id="Pfad_177" data-name="Pfad 177" d="M33.454,18.8V1.936H1.9V41.9h31.55V36.851a12.149,12.149,0,0,0,1.556-.724v7.254H.348V.453H35.01V19.521a10.107,10.107,0,0,0-1.556-.724" transform="translate(5.948 -0.453)" fill="#0473a2"></path>
                              <path id="Pfad_178" data-name="Pfad 178" d="M10.028,17.868A8.6,8.6,0,0,1,4,15.462,7.939,7.939,0,0,1,4,3.9a8.665,8.665,0,0,1,6.024-2.388A8.665,8.665,0,0,1,16.052,3.9a7.939,7.939,0,0,1,0,11.56,8.6,8.6,0,0,1-6.024,2.406M10.028,3A7.011,7.011,0,0,0,5.107,4.951a6.486,6.486,0,0,0,0,9.461,7.011,7.011,0,0,0,4.921,1.954,7.011,7.011,0,0,0,4.921-1.954,6.5,6.5,0,0,0,0-9.461A7.011,7.011,0,0,0,10.028,3" transform="translate(25.756 17.68)" fill="#0473a2"></path>
                              <path id="Pfad_179" data-name="Pfad 179" d="M4.9,7.832l-3.13-3,1.1-1.049L4.9,5.734,8.97,1.808l1.1,1.067Z" transform="translate(30.254 22.703)" fill="#0473a2"></path>
                              <path id="Pfad_180" data-name="Pfad 180" d="M14.059,1.807a5.632,5.632,0,0,0-.2.742H.708V1.807Z" transform="translate(12.1 22.688)" fill="#0473a2"></path>
                              <path id="Pfad_181" data-name="Pfad 181" d="M14.023,2.82H.708V2.078H13.824c.054.253.145.488.2.742" transform="translate(12.1 27.319)" fill="#0473a2"></path>
                              <rect id="Rechteck_50" data-name="Rechteck 50" width="10.818" height="0.742" transform="translate(12.808 34.282)" fill="#0473a2"></rect>
                              <path id="Pfad_182" data-name="Pfad 182" d="M2.8,37.208H.16V.628H2.8V1.37H.938v35.1H2.8Z" transform="translate(2.729 2.545)" fill="#0473a2"></path>
                              <path id="Pfad_183" data-name="Pfad 183" d="M2.117,31.28H0V.8H2.117v.742H.778v29H2.117Z" transform="translate(0.003 5.423)" fill="#0473a2"></path>
                              <path id="Pfad_184" data-name="Pfad 184" d="M5.036,5.954,2.25,3.277l1.1-1.049L6.14,4.9Z" transform="translate(38.461 29.871)" fill="#0473a2"></path>
                            </g>
                          </svg>
                        <h5 class="mb-3 font-400"><a href="#" class="d-block text-secondary hover-text-primary mt-4">Finance, Tax & Structuring</a></h5>
                        <p>Once you’ve engaged Apollo Investment we’ll connect you with  taxation, finance and structuring specialists including a CPA Accountant to provide you all the advice you need.</p>
                    </div>
                </div>
            </div>
            <div class="row text-center justify-content-center">
                <a href="{{ route('about') }}" class="btn btn-primary mt-4" style="max-width: 180px;">View moare</a>
            </div>
        </div>
    </div>
    <!--============== Our precess End ==============-->

    <!--============== Register Section Start ==============-->
    <div class="full-row bg-primary bg-gray home-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="main-title down-line mx-auto mb-4 w-sm-100">Get in touch with our team <br>for more information now.</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
                <div class="col-lg-6">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-20">
                                <label class="mb-2">Full Name:</label>
                                <input type="text" class="form-control bg-white" name="name" required="">
                            </div>
                            <div class="col-md-6 mb-20">
                                <label class="mb-2">Your Email:</label>
                                <input type="email" class="form-control bg-white" name="email" required="">
                            </div>
                            <div class="col-md-12 mb-20">
                                <label class="mb-2">Subject:</label>
                                <input type="text" class="form-control bg-white" name="subject" required="">
                            </div>
                            <div class="col-md-12 mb-20">
                                <label class="mb-2">Message:</label>
                                <textarea class="form-control bg-white" name="message" rows="8" required=""></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-primary" name="submit" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--============== Register Section End ==============-->

@endsection

    @push('page-script')
        <script>
            $('#slider').layerSlider({
                sliderVersion: '6.0.0',
                type: 'fullwidth',
                responsiveUnder: 0,
                maxRatio: 1,
                slideBGSize: 'auto',
                hideUnder: 0,
                hideOver: 100000,
                skin: 'outline',
                fitScreenWidth: true,
                fullSizeMode: 'fitheight',
                navButtons: false,
                navStartStop: false,
                height:840,
                skinsPath: 'assets/skins/'
            });
        </script>
    @endpush
