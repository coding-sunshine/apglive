@extends('layout.app')

@section('title') About Us @endsection

@section('main-content')
 <!--============== Page Banner Start ==============-->
 <div class="page-banner-simple py-50" style="background-image: url({{ theme_url('images/banner3.png') }}); background-repeat: no-repeat; background-position: center center; background-size: cover; margin-top: 75px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="banner-title text-white">About Us</h3>
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
            <div class="col">
                <img src="{{ theme_url('images/bg-5.png') }}" alt="">
            </div>
            <div class="col mb-4">
                <h2 class="text-dark mb-4 down-line">About Us</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
            </div>
        </div>
    </div>
</div>
<!--==============- our journey start ==============-->
<div class="our-journey full-row overlay-secondary" style="background-image: url({{ theme_url('images/banner3.png') }}); background-position: center center; background-repeat: no-repeat">
    <div class="container">
        <div class="row">
            <h2 class="text-white mb-4 down-line">The Journey That Brought Us Here</h2>
            <p class="text-white">Boasting two decades of experience in property development, financing, and investing before our establishment in 2018, we at Apollo Investment identified the unique opportunity Special Disability Accommodation (SDA) would present to both investors and tenants. This realisation led us to specialise in providing expert advice on navigating the complex landscape of SDA and NDIS housing policies.</p>
            <p class="text-white">Our mission is deeply personal, driven by firsthand experiences with individuals living with disabilities;<br> our commitment to the success of this industry extends beyond the business.</p>
            <p class="text-white">As enthusiastic property investors, our team are deeply dedicated to wealth creation through NDIS property investment.<br> Our passion isn’t merely theoretical— we walk the talk, having built our own personal NDIS property portfolios.

            </p>
        </div>
    </div>
</div>
<!--==============- our journey End ==============-->
<!--============== Our precess Start ==============-->
 <div class="full-row bg-white process-section">
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
                    <h5 class="mb-3 font-400"><a href="#" class="d-block text-secondary hover-text-primary mt-4">Finance, Tax &amp; Structuring</a></h5>
                    <p>Once you’ve engaged Apollo Investment we’ll connect you with  taxation, finance and structuring specialists including a CPA Accountant to provide you all the advice you need.</p>
                </div>
            </div>
            <div class="col">
                <div class="text-center p-35 bg-white transation hover-shadow h-100 rounded bg-light">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#0473a2" xmlns:xlink="http://www.w3.org/1999/xlink" id="Gruppe_60" data-name="Gruppe 60" width="100%" height="100%" viewBox="0 0 41.645 49.967" preserveAspectRatio="xMidYMid meet" aria-hidden="true" role="img">
                        <defs>
                          <clipPath id="clip-path">
                            <rect id="Rechteck_56" data-name="Rechteck 56" width="41.645" height="49.967" fill="none"></rect>
                          </clipPath>
                        </defs>
                        <g id="Gruppe_69" data-name="Gruppe 69" transform="translate(0 0)" clip-path="url(#clip-path)">
                          <path id="Pfad_200" data-name="Pfad 200" d="M11.543,24.839a.858.858,0,0,0-.343-.621.956.956,0,0,0-.687-.18,1.021,1.021,0,0,1-.818-.164,2.736,2.736,0,0,1-.785-1.324,21.8,21.8,0,0,1-.7-2.289,3.043,3.043,0,0,1-.1-1.553.956.956,0,0,1,.229-.392l.9,1.521a3.391,3.391,0,0,0,2.878,1.635h16.89a3.412,3.412,0,0,0,2.878-1.635l.9-1.521a1.18,1.18,0,0,1,.229.392,3.235,3.235,0,0,1-.1,1.553,21.8,21.8,0,0,1-.7,2.289,2.892,2.892,0,0,1-.8,1.341,1.1,1.1,0,0,1-.8.147.905.905,0,0,0-1.046.8,13.287,13.287,0,0,1-1.1,4.333c-.948,2.387-3.908,5.706-7.014,5.706H19.67c-3.107,0-6.066-3.319-7.031-5.706A14.165,14.165,0,0,1,11.543,24.839ZM14.307,4.81v10.4H8.944V13.018A8.992,8.992,0,0,1,14.307,4.81Zm2.24-1.488c.441-.131.9-.229,1.324-.327V4.483a1.79,1.79,0,0,0,1.8,1.782h1.782a1.786,1.786,0,0,0,1.782-1.782V3c.441.1.883.2,1.341.327a.653.653,0,0,1,.458.621V15.209H16.089V3.943a.633.633,0,0,1,.458-.621M19.67,1.916a3.652,3.652,0,0,1,1.782,0V4.483H19.67Zm12.508,11.1v2.191H26.815V4.81A9,9,0,0,1,32.178,13.018Zm-.687,3.973L30.346,18.92a1.614,1.614,0,0,1-1.341.752H12.116a1.593,1.593,0,0,1-1.341-.752L9.614,16.991Zm7.848,29.022v2.763a1.74,1.74,0,0,1-1.455,1.717c-.981.164-2.305.36-3.924.556V47.386a.879.879,0,0,0-.883-.883.893.893,0,0,0-.9.883v3.875c-2.371.245-5.216.458-8.4.556l-.507-5.15.294-.6a1.069,1.069,0,0,0,.376.213,1.229,1.229,0,0,0,1.014-.1,17.215,17.215,0,0,0,6.458-6.638L35.3,40.65A5.607,5.607,0,0,1,39.339,46.013ZM19.13,51.85l.441-4.464h1.962l.458,4.464c-.474,0-.948.016-1.439.016-.474,0-.948-.016-1.422-.016M1.782,48.776V46.013A5.607,5.607,0,0,1,5.821,40.65L9.7,39.538a17.223,17.223,0,0,0,6.475,6.638,1.178,1.178,0,0,0,.621.164,1.1,1.1,0,0,0,.392-.065,1.235,1.235,0,0,0,.376-.213l.294.6-.523,5.15c-3.188-.1-6.017-.311-8.388-.556V47.386a.9.9,0,0,0-1.8,0v3.662c-1.6-.2-2.927-.392-3.924-.556a1.738,1.738,0,0,1-1.439-1.717m20.569-6.818,5.494-3.434,1.8.523a15.423,15.423,0,0,1-5.1,5.281A6.759,6.759,0,0,0,22.351,41.958ZM19.326,45.6,18.7,44.378a6.073,6.073,0,0,1,1.848-1.39,5.473,5.473,0,0,1,1.848,1.39L21.8,45.6Zm-2.763-1.275a15.423,15.423,0,0,1-5.1-5.281l1.8-.523,5.51,3.434A6.642,6.642,0,0,0,16.563,44.329Zm3.107-7.668h1.782A7.775,7.775,0,0,0,26,35.009l.654,2.158-6.1,3.81-6.1-3.81.67-2.158A7.775,7.775,0,0,0,19.67,36.661ZM5.33,38.933A7.392,7.392,0,0,0,0,46.013v2.763a3.5,3.5,0,0,0,2.927,3.483c1.226.2,2.959.458,5.118.7a115.8,115.8,0,0,0,12.508.687,116.392,116.392,0,0,0,12.524-.687c2.142-.245,3.891-.507,5.1-.7a3.516,3.516,0,0,0,2.943-3.483V46.013a7.387,7.387,0,0,0-5.347-7.08l-7.358-2.109-.932-3.09a12.764,12.764,0,0,0,2.649-3.891,15.568,15.568,0,0,0,1.112-4.022,2.741,2.741,0,0,0,1.194-.474,4.3,4.3,0,0,0,1.439-2.175,21.121,21.121,0,0,0,.768-2.5,4.7,4.7,0,0,0,.065-2.518,2.963,2.963,0,0,0-1.014-1.39,2.174,2.174,0,0,0,.262-1.014V13.018A10.812,10.812,0,0,0,26.52,2.783a2.438,2.438,0,0,0-1.455-1.177c-.654-.18-1.275-.327-1.9-.441a1.421,1.421,0,0,0-.932-.9A6.5,6.5,0,0,0,20.552,0a6.369,6.369,0,0,0-1.668.262,1.356,1.356,0,0,0-.932.9q-.932.172-1.913.441a2.438,2.438,0,0,0-1.455,1.177A10.812,10.812,0,0,0,7.145,13.018v2.731a2.174,2.174,0,0,0,.262,1.014,2.931,2.931,0,0,0-1,1.39,4.7,4.7,0,0,0,.049,2.518,24.682,24.682,0,0,0,.768,2.5A4.291,4.291,0,0,0,8.666,25.33a2.578,2.578,0,0,0,1.194.491,15.59,15.59,0,0,0,1.128,4.022,12.381,12.381,0,0,0,2.649,3.891l-.948,3.09Z" transform="translate(0 0.046)" fill="#0473a2"></path>
                        </g>
                      </svg>
                    <h5 class="mb-3 font-400"><a href="#" class="d-block text-secondary hover-text-primary mt-4">Building Management</a></h5>
                    <p>From concept to completion is there through the entire development and delivery of your project.</p>
                </div>
            </div>
            <div class="col">
                <div class="text-center p-35 bg-white transation hover-shadow h-100 rounded bg-light">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#0473a2" xmlns:xlink="http://www.w3.org/1999/xlink" id="Gruppe_58" data-name="Gruppe 58" width="100%" height="100%" viewBox="0 0 52.023 43.358" preserveAspectRatio="xMidYMid meet" aria-hidden="true" role="img">
                        <defs>
                          <clipPath id="clip-path">
                            <rect id="Rechteck_54" data-name="Rechteck 54" width="52.023" height="43.358" fill="none"></rect>
                          </clipPath>
                        </defs>
                        <g id="Gruppe_65" data-name="Gruppe 65" transform="translate(0 0)" clip-path="url(#clip-path)">
                          <path id="Pfad_193" data-name="Pfad 193" d="M43.945,43.649l-35.953.119L7.855,15.646,25.968,2.81,44.2,15.714a1.16,1.16,0,0,0-.119.477Zm2.213,1.107L46.294,17.2l3.881,2.775a.979.979,0,0,0,1.549-.272.988.988,0,0,0-.255-1.549L26.615.546a1.025,1.025,0,0,0-1.294,0L.484,18.148a1,1,0,0,0-.409,1.243,1,1,0,0,0,1.055.766,1.07,1.07,0,0,0,.63-.2L5.642,17.2l.136,27.7A.976.976,0,0,0,6.885,46l38.149-.119a.968.968,0,0,0,1.124-1.124" transform="translate(0.077 -0.189)" fill="#0473a2"></path>
                          <path id="Pfad_194" data-name="Pfad 194" d="M7.475,3.359c2.741,0,4.1,1.345,4.1,4.086,0,2.758-1.362,4.12-4.1,4.12-2.724,0-4.1-1.362-4.1-4.12,0-2.707,1.379-4.086,4.1-4.086m0,10.418a6.157,6.157,0,0,0,4.477-1.839A6.14,6.14,0,0,0,13.79,7.445,6.053,6.053,0,0,0,11.952,3,6.079,6.079,0,0,0,7.475,1.146,6.042,6.042,0,0,0,3.015,3,6,6,0,0,0,1.159,7.445a6.09,6.09,0,0,0,1.856,4.477,6.042,6.042,0,0,0,4.46,1.856" transform="translate(18.571 13.102)" fill="#0473a2"></path>
                          <path id="Pfad_195" data-name="Pfad 195" d="M17.306,1.909a.981.981,0,0,0-1.464.63.965.965,0,0,0,.664,1.43,5.414,5.414,0,0,1,3.745,5.447v3.949H3.109V9.383a5.381,5.381,0,0,1,3.32-5.243.987.987,0,0,0,.545-1.481.978.978,0,0,0-1.481-.528A7.455,7.455,0,0,0,.9,9.383v5.09A.969.969,0,0,0,2,15.579H21.358a.969.969,0,0,0,1.107-1.107V9.4a7.454,7.454,0,0,0-5.158-7.49" transform="translate(14.357 23.302)" fill="#0473a2"></path>
                        </g>
                      </svg>
                    <h5 class="mb-3 font-400"><a href="#" class="d-block text-secondary hover-text-primary mt-4">Site Acquisition</a></h5>
                    <p>Our acquisitions team will do their best to find land based on your investment goals that fits your budget and provides a good opportunity for tenancy and capital growth.</p>
                </div>
            </div>
            <div class="col">
                <div class="text-center p-35 bg-white transation hover-shadow h-100 rounded bg-light">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#0473a2" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 50 50" preserveAspectRatio="xMidYMid meet" aria-hidden="true" role="img">
                        <defs>
                          <clipPath id="clip-path">
                            <rect id="Rechteck_57" data-name="Rechteck 57" width="50" height="50" fill="none"></rect>
                          </clipPath>
                        </defs>
                        <g id="Gruppe_61" data-name="Gruppe 61" transform="translate(0 0)">
                          <g id="Gruppe_72" data-name="Gruppe 72" transform="translate(0 0)">
                            <g id="Gruppe_71" data-name="Gruppe 71" transform="translate(0 0)" clip-path="url(#clip-path)">
                              <path id="Pfad_201" data-name="Pfad 201" d="M31.463,40.969a.81.81,0,0,0-.818.818.81.81,0,1,0,1.62,0,.807.807,0,0,0-.8-.818m2.421-.818a.81.81,0,0,0-.818.818.81.81,0,1,0,1.62,0,.807.807,0,0,0-.8-.818m2.405-.818a.807.807,0,0,0-.8.818.81.81,0,1,0,.8-.818m3.24-4.925a5.017,5.017,0,0,1,1.1.131l.1.016L48.4,36.274v9.784l-6.234-1.783a.7.7,0,0,0-.409,0L25.72,48.234l.1.016a.708.708,0,0,0-.262.016,2.24,2.24,0,0,1-.556.065,2.418,2.418,0,0,1-1.014-.229l-.229-.065h.082l-12.516-6.07-.278.72a.862.862,0,0,0-.425-1.063,1.6,1.6,0,0,1-.933-1.473,1.617,1.617,0,0,1,1.6-1.652,1.5,1.5,0,0,1,.7.18.807.807,0,0,0,1.08-.36l-.327.671,10.34,4.368a.634.634,0,0,0,.425.049l1.047-.164a3.574,3.574,0,0,0,2.471,1A5.405,5.405,0,0,0,28.485,44c.425-.131.818-.278.818-.278a.779.779,0,0,0,.573-.589.815.815,0,0,0-.229-.8.768.768,0,0,0-.8-.18c-.229.065-.458.164-.818.262a3.569,3.569,0,0,1-1,.2,2.026,2.026,0,0,1-1.505-.671l-.049-.1a2.136,2.136,0,0,1-.344-.589l-.016-.049-.065-.262A1.586,1.586,0,0,1,25,40.56a2.04,2.04,0,0,1,1.571-2,.775.775,0,0,0,.589-.589l-.1.425,10.52-3.583.065-.016a4.507,4.507,0,0,1,1.882-.393m0-1.636a6.415,6.415,0,0,0-2.52.507l-10.88,3.714-.2.082A3.669,3.669,0,0,0,23.4,40.4v.164a2.818,2.818,0,0,0,.065.638,2.213,2.213,0,0,0,.147.54l-.115.016L12.664,37.19a.709.709,0,0,0-.311-.065,2.906,2.906,0,0,0-1.063-.262,3.276,3.276,0,0,0-3.223,3.289A3.224,3.224,0,0,0,9.6,42.818a.757.757,0,0,0,.344.295l13.334,6.463.147.065A4.155,4.155,0,0,0,25,49.985a3.324,3.324,0,0,0,.72-.1l.245-.016,15.969-3.959,7.052,2.012a.824.824,0,0,0,.7-.131A.863.863,0,0,0,50,47.138V35.619a.811.811,0,0,0-.622-.8l-8.393-1.882-.18-.016a6.485,6.485,0,0,0-1.276-.147M29.385,17.72a2.983,2.983,0,0,0,1.26.311,2.887,2.887,0,0,0,1.08-.213l.54.54v3.419l-1.145,1.162H29.041v8.671l-.344.344h-.933l-.344-.344V22.939H25.344L24.2,21.778V20.24l.9.164.18.016a2.71,2.71,0,0,0,.54.065,3.149,3.149,0,0,0,1.407-.36,1.661,1.661,0,0,0,1.014.36,1.632,1.632,0,0,0,1.145-2.765m-12.5-8.688,5.726,1.587,2.16,2.405a17.88,17.88,0,0,0-7.019-1.554H15.33v-.818a1.5,1.5,0,0,1,.72-1.178,3.391,3.391,0,0,1,.638-.376l.2-.065m-.753-7.4a2.267,2.267,0,0,1,1.162.327.987.987,0,0,0,.311.1l-.131-.016,8.557,4.516,5.694,6.954.049.065a1.58,1.58,0,0,1,.491,1.162,1.609,1.609,0,0,1-2.88,1.014l-.1-.115L23.658,9.327a.806.806,0,0,0-.393-.229L17.147,7.4l-.213-.016a1.82,1.82,0,0,0-.851.213,4.02,4.02,0,0,0-.982.556,3.155,3.155,0,0,0-1.391,2.5v1.636a.807.807,0,0,0,.8.818h3.24A18.491,18.491,0,0,1,26.6,15.79l.049.016a1.658,1.658,0,0,1,.769,1.407,1.613,1.613,0,0,1-1.6,1.636,1.7,1.7,0,0,1-.376-.049h-.016l-.049-.016H25.36a34.183,34.183,0,0,0-6-.753,26.3,26.3,0,0,0-3.174.409,30.939,30.939,0,0,1-4.892.409,22.779,22.779,0,0,1-6.266-1.587c-1.882-.72-3.06-1.26-3.4-1.423V6.366L15.134,1.833H15a.835.835,0,0,0,.344-.049,2.223,2.223,0,0,1,.785-.147m0-1.636a3.823,3.823,0,0,0-1.063.2.545.545,0,0,0-.278.033L.556,4.991A.832.832,0,0,0,0,5.777v10.6a.812.812,0,0,0,.474.753s1.783.834,4.009,1.669a22.27,22.27,0,0,0,6.806,1.685,33.022,33.022,0,0,0,5.121-.425c1.391-.2,2.454-.393,2.945-.393a22.793,22.793,0,0,1,3.223.311v2.487l2.094,2.111h1.145V32.3l1.276,1.293h2.274L30.645,32.3V24.576H31.79l2.094-2.111V17.687l-.8-.818a3.232,3.232,0,0,0-.18-4.45l.065.049L27.176,5.384a1,1,0,0,0-.262-.2L18.079.508,17.965.459A4,4,0,0,0,16.132,0" transform="translate(0 0.009)"></path>
                            </g>
                          </g>
                        </g>
                      </svg>
                    <h5 class="mb-3 font-400"><a href="#" class="d-block text-secondary hover-text-primary mt-4">Completion &amp; Leasing</a></h5>
                    <p>Upon completion our tenancy partners will assist with the complete tenancy process.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--============== Our precess End ==============-->

 <!--============== About Us Section Start ==============-->
<div class="full-row bg-white about-content-section bg-light">
<div class="container">
    <div class="row row-cols-md-2 row-cols-1 gx-5">
        <div class="col">
            <span class="tagline-2 text-primary">Expert Advice at Every Step:</span>
            <h2 class="text-dark mb-4">Embrace Your Investment Journey with Us</h2>
            <p>Building wealth through investing in NDIS properties takes an entire panel of experts. From finance to acquisitions, tax structuring to project management and even tenant coordinating. It’s why at Apollo Investment we put the full weight of our expert panel behind every client.</p>
            <p>We’re experts in NDIS property investment so you don’t have to be. Our team of Sales Consultants are there every step of the way to help you buy, invest and develop a high yielding growth portfolio. From initial consultation to completion, we’re here for you.</p>
        </div>
        <div class="col">
            <img src="{{ theme_url('images/bg-5.png') }}" alt="">
        </div>
    </div>
</div>
</div>
<div class="full-row bg-white about-section">
    <div class="container">
        <div class="row row-cols-md-2 row-cols-1 gx-5" style="align-items: flex-start;">
            <div class="col">
                <h3 class="mb-4 down-line">Lorem Ipsum</h3>
                <span class="text-secondary w-sm-100 mx-auto pb-4">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span>
            </div>
            <div class="col">
                <div class="simple-thumb transation px-4 mb-5">
                    <h5 class="my-3"><a href="#" class="text-secondary">Our Vision</a></h5>
                    <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <div class="simple-thumb transation px-4 mb-5">
                    <h5 class="my-3"><a href="#" class="text-secondary">Our Mission</a></h5>
                    <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <div class="simple-thumb transation px-4">
                    <h5 class="my-3"><a href="#" class="text-secondary">Our value</a></h5>
                    <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
