<!DOCTYPE html>
@include('_partials/montag')
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Barlow:100,300,400,400i,500,500i,700,800" rel="stylesheet">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="author" href="humans.txt" />
        <link href='https://api.mapbox.com/mapbox-gl-js/v0.50.0/mapbox-gl.css' rel='stylesheet' />
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body id="up">
        
        
        @include('_partials/header')
        {{-- @include('_partials/hero') --}}
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
        @include('_partials/testimonials')

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
