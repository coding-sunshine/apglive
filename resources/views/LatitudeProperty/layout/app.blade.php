<!doctype html>
<html lang="en">

    <head>
        @include('layout.partials.css')
    </head>

    <body>
        <div id="page_wrapper" class=" @yield('page-wrapper-class', 'bg-ligh')">
            @include('layout.partials.header')

            @yield('main-content')

            @include('layout.partials.footer')
            @include('component.quick-view-modal')
        </div>

        @include('layout.partials.scripts')

    </body>

</html>
