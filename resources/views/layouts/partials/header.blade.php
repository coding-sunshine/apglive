<!--============== Header Section Start ==============-->
<header class="header-style-1 nav-on-banner fixed-bg-secondary">
    <div class="top-header xs-mx-none">
        <div class="container">
            <div class="row row-cols-md-2 row-cols-1">
                <div class="col">
                    <ul class="top-contact list-color-white">
                        <li><a href="tel:+61-467 862 576"><i class="fa fa-phone" aria-hidden="true"></i> Need Support ? +61-467 862 576</a></li>
                    </ul>
                </div>
                @if(config('settings.auth'))
                    <div class="col">
                        <ul class="nav-bar-top right list-color-white d-flex">
                            <li><a href="#">Sign Up</a></li>
                            <li><a href="#">Login</a></li>
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="main-nav">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg nav-white nav-primary-hover nav-line-active">
                        <a class="navbar-brand" href="home.html"><img class="nav-logo" src="/assets/images/apg_logo_black_bg.png" alt="Image not found !"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon flaticon-menu flat-small text-primary"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="home.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('listings') }}">Listing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/about">About Us</a>
                                </li>
                            </ul>
                            <a href="/contact" class="btn btn-primary add-listing-btn">Contact</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!--============== Header Section End ==============-->
