@extends('layout.app')

@section('title') Invest @endsection

@section('main-content')

        <!--============== Page Banner Start ==============-->
        <div class="page-banner-simple py-50" style="background-image: url({{ theme_url('images/banner3.png') }}); background-repeat: no-repeat; background-position: center center; background-size: cover; margin-top: 75px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="banner-title text-white">Investment</h3>
                        <span class="banner-tagline font-medium text-white">Your Partner in Building Wealth Through Property Investment</span>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Page Banner End ==============-->
         <!--============== About Us Section Start ==============-->
         <div class="full-row bg-white about-section1">
            <div class="container">
                <div class="row row-cols-md-2 row-cols-1 gx-5">
                    <div class="col mb-4">
                        <span class="tagline-2 text-primary">Investment with Purpose</span>
                        <h2 class="text-dark mb-4">The Appeal of NDIS <br>Investment Properties</h2>
                        <p>NDIS Investment Properties are an exceptional opportunity for investors seeking enduring positive cash flow, substantial capital growth, and above-market returns ranging from 12-15%.</p>
                        <p>The high-yielding nature of NDIS investments is uniquely positioned to enable investors to accumulate wealth, even under the pressures of a high-interest rate environment. This makes it ideal for long-term investors looking to broaden their portfolio while simultaneously making a significant social impact.</p>
                    </div>
                    <div class="col">
                        <img src="{{ theme_url('images/bg-5.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="full-row ethical-invest" style="background-image: url({{ theme_url('images/7.png') }}); background-position: left center; background-repeat: no-repeat; background-size: 45%;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 desktop-none">
                        <img src="{{ theme_url('images/7.png') }}">
                    </div>
                    <div class="col-lg-6">
                        <span class="tagline-2 text-primary">Ethical Investing:</span>
                        <h2 class="text-dark mb-4">Striking a Balance between Financial Gains and Social Impact</h2>
                        <p>Our strategy to invest in properties tailored for individuals with disabilities results in a societal improvement that we are steadfastly committed to. These efforts lead to quality housing solutions for NDIS participants, directly enhancing their living conditions.</p>
                        <p>For our investors, it’s not just about the financial gain. By partnering with us, they journey towards making a tangible difference in the lives of those who need it most. It’s an opportunity to leverage investments for socially responsible outcomes, thereby elevating the living standards for the NDIS participants while reaping considerable financial benefits.</p>
                        <p>Do well by doing good.</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="full-row bg-white faq-section about-faq-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="text-dark mb-4">The Apollo Investment Process</h2>
                        <p>Apollo Investment adopts a transparent ‘Fee for Service’ model, creating significant alignment with their clients’ success. Their comprehensive process consists of several stages, each focusing on a particular aspect of the investment journey and associated with a specific fee. Here’s a detailed overview of the process:</p>
                    </div>
                    <div class="col-lg-6">
                            <div class="simple-collaps px-4 py-3 bg-white border rounded mb-3">
                                <span class="accordion text-secondary d-block"><strong>STEP 1</strong><br> Preliminary Consultation</span>
                                <div class="panel" style="">
                                    <p>Every investors goals are different so we take the time to understand you and your property goals. During the initial consultation we’ll also provide you an in-depth explanation of the how the process works, the types of investments, the time frames and most importantly next steps.</p>
                                </div>
                            </div>
                            <div class="simple-collaps px-4 py-3 bg-white border rounded mb-3">
                                <span class="accordion text-secondary d-block"><strong>STEP 2</strong><br> Advice Presentation</span>
                                <div class="panel">
                                    <p>Once a confidentiality deed is signed, we then begin work on assessing your finance and getting tax and entity advice from a CPA Accountant that specialises in this field.</p>
                                </div>
                            </div>
                            <div class="simple-collaps px-4 py-3 bg-white border rounded mb-3">
                                <span class="accordion text-secondary d-block"><strong>STEP 3</strong><br> Investment Proposal</span>
                                <div class="panel">
                                    <p>Based on your initial consultation, we’ll provide you an Investment Proposal which outlines the most suitable NDIS property investment relevant to your goals. This includes all costs, fees and charged to complete the project.</p>
                                </div>
                            </div>
                            <div class="simple-collaps px-4 py-3 bg-white border rounded mb-3">
                                <span class="accordion text-secondary d-block"><strong>STEP 4</strong><br> Client Services Agreement</span>
                                <div class="panel">
                                    <p>If the Investment Proposal is acceptable, we then issue a Client Services Agreement. This is the agreement between you and us, explaining exactly what we’ll delivery, when and what fees are relevant to each stage. Remember, we’re a Fee-For-Service firm, therefore we don’t get kick backs or commissions, we only get paid for the service we provide you in acquiring your NDIS property.</p>
                                </div>
                            </div>
                            <div class="simple-collaps px-4 py-3 bg-white border rounded mb-3">
                                <span class="accordion text-secondary d-block"><strong>STEP 5</strong><br> Project Commencement</span>
                                <div class="panel">
                                    <p>Your entity structures are setup, potential sites are shortlisted, SDA providers are consulted and participant matching begins. Plans and designs are finalised based on the most suitable site.</p>
                                </div>
                            </div>
                            <div class="simple-collaps px-4 py-3 bg-white border rounded mb-3">
                                <span class="accordion text-secondary d-block"><strong>STEP 6</strong><br> Site Acquisition</span>
                                <div class="panel">
                                    <p>Your land contract settles and you’re the proud owner of a future site for an SDA house.</p>
                                </div>
                            </div>
                            <div class="simple-collaps px-4 py-3 bg-white border rounded mb-3">
                                <span class="accordion text-secondary d-block"><strong>STEP 7</strong><br> Construction</span>
                                <div class="panel">
                                    <p>Once the land has settled building begins. The time frame of this can vary from 14-24 weeks depending on the size and scope of the property you’re building.</p>
                                </div>
                            </div>
                            <div class="simple-collaps px-4 py-3 bg-white border rounded mb-3">
                                <span class="accordion text-secondary d-block"><strong>STEP 8</strong><br> Participant Secured</span>
                                <div class="panel">
                                    <p>In advance of completion, the tenant coordination team liaise with SDA providers to secure you the best tenant/s ready to move in when the property is complete.</p>
                                </div>
                            </div>
                            <div class="simple-collaps px-4 py-3 bg-white border rounded mb-3">
                                <span class="accordion text-secondary d-block"><strong>STEP 9</strong><br>Completion</span>
                                <div class="panel">
                                    <p>Upon the property being complete and the tenants moving in, the project has now reached completion and final payment to Apollo Investment is due.</p>
                                    <p>Any third-party commissions during this process are credited back to our clients. This 'Fee for Service' model provides an all-inclusive property investment service, where Apollo Investment does not receive their full fee until the property is tenanted, ensuring their commitment to the clients' long-term success.</p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="full-row bg-light faq-section about-faq-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <span class="tagline-2 text-primary">Ensuring Secure Tenancy:</span>
                        <h2 class="text-dark mb-4">A Streamlined Roadmap</h2>
                    </div>
                    <div class="col-lg-6">
                            <div class="simple-collaps px-4 py-3 bg-white border rounded mb-3">
                                <span class="accordion text-secondary d-block"><strong>STEP 1</strong><br> Identify the NDIS Participant’s Unique Requirements</span>
                                <div class="panel" style="">
                                    <p>Understanding exactly what participants need and where participants are is the first step in our process. Other NDIS property firms build and hope, where as at Apollo Investment, we only advise based on where and what actual NDIS Participants require.</p>
                                </div>
                            </div>
                            <div class="simple-collaps px-4 py-3 bg-white border rounded mb-3">
                                <span class="accordion text-secondary d-block"><strong>STEP 1</strong><br> SDA Provider Liaison</span>
                                <div class="panel">
                                    <p>Our Expert Panel team liaise with SDA providers to discuss potential participants that would suit your property. Having built a network of providers all over Australia, Apollo Investment pride ourselves on holding quality relationships with key SDA providers.</p>
                                </div>
                            </div>
                            <div class="simple-collaps px-4 py-3 bg-white border rounded mb-3">
                                <span class="accordion text-secondary d-block"><strong>STEP 3</strong><br> Securing The Right Tenant</span>
                                <div class="panel">
                                    <p>Once a match is made between a property and the NDIS Participant we then begin formalising this through the relevant documentation and approval requirements.</p>
                                </div>
                            </div>
                            <div class="simple-collaps px-4 py-3 bg-white border rounded mb-3">
                                <span class="accordion text-secondary d-block"><strong>STEP 4</strong><br> Move In</span>
                                <div class="panel">
                                    <p>Once the property is complete then tenant moves into their new home. Move in day is often an emotional one. Knowing that you’ve helped someone in need find a new home has more than just financial reward for the investor. and write a title about finding a secure tenant</p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
