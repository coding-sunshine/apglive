<header class="@yield('header-class', 'header-style nav-on-top bg-white')">
    <div class="main-nav @yield('main-nav-class')">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg nav-line-active @yield('nav-class', 'nav-secondary nav-primary-hover')">
                        <a class="navbar-brand" href="#">
                            <img class="nav-logo" src="@yield('log-url', theme_url('images/logo.png'))"
                                alt="Lewis Properties"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon flaticon-menu flat-small text-primary"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item {{ request()->routeIs('home') ? 'home' :'' }}">
                                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item {{ request()->routeIs('about') ? 'active' :'' }}">
                                    <a class="nav-link" href="{{ route('about') }}">About</a>
                                </li>
                                <li class="nav-item {{ request()->routeIs('listing') ? 'active' :'' }}">
                                    <a class="nav-link" href="{{ route('listing') }}">Listing</a>
                                </li>
                            </ul>
                            <a href="{{ route('contact') }}" class="btn btn-primary add-listing-btn">Contact Us</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
