<!DOCTYPE html>
@include('_partials/montag')
<html lang="en">
  <head>
    <title>{{ $page->siteName }}</title>
    <meta name="description" content="{{ $page->siteDescription }}">
    <meta name="keywords" content="Architecture, BIM, production, coordination, consulting, content development, visualization, modeling, construction, BEP, VR, render, animation">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Barlow:100,300,400,400i,500,500i,700,800" rel="stylesheet">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="author" href="humans.txt" />
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.50.0/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#F39200">
    <meta name="theme-color" content="#F39200">

    <meta property="og:title" content="{{ $page->siteName }}" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}" />
    <meta property="og:image" content="{{ $page->getUrl() }}asg.jpg" />
    <meta property="og:description" content="{{ $page->siteDescription }}" />
    
  </head>
  <body id="up">
       
    @include('_partials/header')
    @include('_partials/covid')
    @include('_partials/hero')
    @include('_partials/struggle')
    @include('_partials/asg')
    @include('_partials/steps')
    @include('_partials/boxes')
    @include('_partials/services')
    @include('_partials/proposal')
    @include('_partials/favorites')
    @include('_partials/world')
    @include('_partials/about')
    @include('_partials/clients')
    @include('_partials/values')
    {{-- @include('_partials/testimonials') --}}
    @include('_partials/contact')

    {{-- @yield('body') --}}

    @include('_partials/footer')

    <script src="//code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
            crossorigin="anonymous"></script>
    <script src='//api.mapbox.com/mapbox-gl-js/v0.50.0/mapbox-gl.js'></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
    <script src="//cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@14/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
  </body>
</html>
