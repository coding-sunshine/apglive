<!--============== Header Section Start ==============-->
<header class="header-style nav-on-top bg-white">
    <div class="main-nav">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg nav-secondary nav-primary-hover nav-line-active">
                        <a class="navbar-brand" href="/"><img class="nav-logo" src="/assets/images/logo.png" alt="Lewis Properties"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon flaticon-menu flat-small text-primary"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="nav-link{{ (Route::currentRouteName() == 'home') ? ' active' : ''}}" href="/">Home</a>
                                </li>
                                <li class="nav-item{{ (Route::currentRouteName() == 'listings') ? ' active' : ''}}">
                                    <a class="nav-link" href="{{ route('listings') }}">Listing</a>
                                </li>
                                <li class="nav-item{{ (Route::currentRouteName() == 'about') ? ' active' : ''}}">
                                    <a class="nav-link" href="/about">About Us</a>
                                </li>
                            </ul>
                            <a href="/contact" class="btn btn-primary add-listing-btn">Contact Us</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!--============== Header Section End ==============-->
