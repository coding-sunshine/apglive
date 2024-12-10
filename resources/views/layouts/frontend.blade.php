<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partials.meta')
    @include('layouts.partials.styles')
</head>
<body>
    <div id="page_wrapper" class="bg-white">
        @include('layouts.partials.header')

        {{ $slot }}

        @include('layouts.partials.footer')

        @include('layouts.partials.quickview')

    </div>

    @include('layouts.partials.scripts')
</body>
</html>
