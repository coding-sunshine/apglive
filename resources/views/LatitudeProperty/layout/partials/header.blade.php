<header class="header-style nav-on-top bg-dark">
    <div class="main-nav">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg @yield('nav-class', 'nav-secondary') nav-primary-hover nav-line-active">
                        <a class="navbar-brand" href="home.html"><img class="nav-logo" src="{{ theme_url('images/logo.png') }}" alt="Latitude Property Escapes"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon flaticon-menu flat-small text-primary"></span>
                          </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item {{ request()->routeIs('invest') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('invest') }}">Invest</a>
                                </li>
                                <li class="nav-item {{ request()->routeIs('listing') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('listing') }}">Listing</a>
                                </li>
                                <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('about') }}">About Us</a>
                                </li>
                            </ul>
                            <a href="{{ route('contact') }}" class="btn btn-primary add-listing-btn">Contact</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
