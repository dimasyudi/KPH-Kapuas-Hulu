<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title') - KPHP Kapuas Hulu Selatan Unit XXI</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="icon" href="{{ asset('front/favicon.gif')}}" type="image/gif" sizes="16x16">

        <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/et-line-icon.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/reset.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/material-design-iconic-font.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}">
        <script src="{{ asset('front/js/vendor/modernizr-2.8.3.min.js') }}"></script>

        @yield('custom_css')
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Header Area Start -->
    		@include('front.partials.nav')
  		  <!-- Header Area End -->

        @yield('content')

        <!-- Footer Start -->
        @include('front.partials.footer')
        <!-- Footer End -->

        <script src="{{ asset('front/js/vendor/jquery-1.12.0.min.js') }}"></script>
        <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('front/js/jquery.meanmenu.js') }}"></script>
        <script src="{{ asset('front/js/jquery.magnific-popup.js') }}"></script>
        <script src="{{ asset('front/js/ajax-mail.js') }}"></script>
        <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('front/js/jquery.mb.YTPlayer.js') }}"></script>
        <script src="{{ asset('front/js/jquery.nicescroll.min.js') }}"></script>
        <script src="{{ asset('front/js/plugins.js') }}"></script>
        <script src="{{ asset('front/js/main.js') }}"></script>
        <script src="{{ asset('front/js/jquery.lighterbox.0.0.5.min.js')}}"></script>
        @yield('custom_js')
    </body>
</html>
