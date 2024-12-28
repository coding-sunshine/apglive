<!doctype html>
<html lang="en">

    <head>
        @include('layout.partials.css')
    </head>

    <body>
        <div id="page_wrapper" class="@yield('page-wrapper-class', 'bg-light')">
            @include('layout.partials.header')

            @yield('main-content')

            @include('layout.partials.footer')
        </div>

        @include('layout.partials.scripts')
    </body>

</html>
