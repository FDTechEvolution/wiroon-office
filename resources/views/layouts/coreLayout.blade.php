<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


    <!-- Smarty Style -->
    <link href="{{ asset('css/smarty_style/core.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/smarty_style/vendor_bundle.min.css') }}" rel="stylesheet">
    <!-- up to 10% speed up for external res -->
    <link rel="dns-prefetch" href="https://fonts.googleapis.com/">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <!-- preloading icon font is helping to speed up a little bit -->
    <link rel="preload" href="{{ asset('fonts/flaticon/Flaticon.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap">
    <link rel="apple-touch-icon" href="demo.files/logo/icon_512x512.png">

	<link rel="manifest" href="{{ asset('images/manifest/manifest.json') }}">
	<meta name="theme-color" content="#377dff">

</head>
<body class="layout-admin aside-sticky header-sticky" data-s2t-class="btn-primary btn-sm bg-gradient-default rounded-circle b-0">
    <div id="wrapper" class="d-flex align-items-stretch flex-column">
        @include('layouts.components.header')
        <div id="wrapper_content" class="d-flex flex-fill">
            @include('layouts.components.side-bar')
            <div id="middle" class="flex-fill">
                @include('flash-message')
                
                @yield('content')
            </div>
        </div>
        <footer id="footer" class="aside-primary text-white">
            @include('layouts.components.footer')
        </footer>
    </div>

    @yield('modal')

    <script src="{{ asset('js/smarty_js/core.min.js') }}"></script>

    @yield('script')
</body>
</html>