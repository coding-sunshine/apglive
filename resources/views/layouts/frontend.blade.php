<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partials.meta')
    @include('layouts.partials.styles')
</head>
<body>
    <div id="page_wrapper" class="{{ (Route::currentRouteName() == 'home')? 'bg-white' : 'bg-light'}}">
        @if(Route::currentRouteName() == 'home')
            @include('layouts.partials.header-home')
        @else
            @include('layouts.partials.header')
        @endif

        {{ $slot }}

        @include('layouts.partials.footer')

        @include('layouts.partials.quickview')

    </div>

    @include('layouts.partials.scripts')
</body>
</html>
