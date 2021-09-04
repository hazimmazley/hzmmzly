<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
    #myVideo {
        position: absolute;
        top: 0;
        left: 0;
        width: auto;
        height: auto;
        min-width: 100%; 
        min-height: 100%;
        overflow: hidden;
        object-fit: cover;
        z-index: -100;
}
</style>
<body>
    <div id="app">
        <video autoplay muted loop id="myVideo">
            <source src="video/mybackground.webm" type="video/mp4">
        </video>
        
        <main class="h-screen">
            @yield('content')
        </main>
    </div>
</body>
</html>
