   <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Uniland - Real Estate HTML5 Template">
    <meta name="keywords"
        content="real estate, property, property search, agent, apartments, booking, business, idx, housing, real estate agency, rental">
    <meta name="author" content="unicoder">

    <title>@yield('title') - {{ config('app.name') }}</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ theme_url('images/favicon.png') }}">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap"
        rel="stylesheet">

    <!-- Required style of the theme -->
    <link rel="stylesheet" href="{{ theme_url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ theme_url('css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{ theme_url('css/all.min.css')}}">
    <link rel="stylesheet" href="{{ theme_url('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ theme_url('webfonts/flaticon/flaticon.css')}}">
    <link rel="stylesheet" href="{{ theme_url('css/owl.css')}}">
    <link rel="stylesheet" href="{{ theme_url('css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{ theme_url('css/layerslider.css')}}">
    <link rel="stylesheet" href="{{ theme_url('css/template.css')}}">
    <link rel="stylesheet" href="{{ theme_url('css/style.css')}}">
    <link rel="stylesheet" href="{{ theme_url('css/colors/color.css')}}">
    <link rel="stylesheet" href="{{ theme_url('css/loader.css')}}">

    @yield('page-style')
