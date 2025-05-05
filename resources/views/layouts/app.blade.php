<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @hasSection('meta')
        @yield('meta')
    @else
        <meta name="description" content="Appiz - Modern Multipurpose Landing Page HTML Template">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @endif
    <!--====== Title ======-->
    <title>@yield('title', 'Appiz - Modern Multipurpose Landing Page HTML Template')</title>
    <!--====== Favicon ======-->
    <link rel="shortcut icon" href="/assets/img/logo/favicon.png" type="images/x-icon">
    <!--====== CSS Here ======-->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/lightcase.css">
    <link rel="stylesheet" href="/assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="/assets/css/nice-select.min.css">
    <link rel="stylesheet" href="/assets/css/odometer.min.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/animate.min.css">
    <link rel="stylesheet" href="/assets/css/tf-custom-animation.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    @stack('styles')
</head>
<body style="min-height: 100vh; display: flex; flex-direction: column;">
    @include('components.preloader')
    @include('components.header')
    <main id="ta-main-content" style="flex: 1 0 auto;">
        @yield('content')
        @include('components.footer')
    </main>

    <!--========= JS Here =========-->
    <script src="/assets/js/jquery-2.2.4.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/js/isotope.pkgd.min.js"></script>
    <script src="/assets/js/jquery.meanmenu.min.js"></script>
    <script src="/assets/js/jquery.nice-select.min.js"></script>
    <script src="/assets/js/lightcase.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/js-jquery.appear.js"></script>
    <script src="/assets/js/odometer.min.js"></script>
    <script src="/assets/js/js-jquery.knob.js"></script>
    <script src="/assets/js/jquery.marquee.min.js"></script>
    <script src="/assets/js/gsap.min.js"></script>
    <script src="/assets/js/ScrollSmoother.min.js"></script>
    <script src="/assets/js/ScrollTrigger.min.js"></script>
    <script src="/assets/js/SplitText3.min.js"></script>
    <script src="/assets/js/main.js"></script>
    @stack('scripts')
</body>
</html>
