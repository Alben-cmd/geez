
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="robots" content="index, follow" />
    <title>Geez @yield('title')</title>
    <meta name="description" content="Jesco - Fashoin eCommerce HTML Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Add site Favicon -->
    <link rel="shortcut icon" href="{!! asset('assets/images/favicon/favicon.ico') !!}" type="image/png">


    <!-- vendor css (Icon Font) -->
    <link rel="stylesheet" href="{!! asset('assets/css/vendor/bootstrap.min.css') !!}" />
    <link rel="stylesheet" href="{!! asset('assets/css/vendor/pe-icon-7-stroke.css') !!}" />
    <link rel="stylesheet" href="{!! asset('assets/css/vendor/font.awesome.css') !!}" />

    <!-- plugins css (All Plugins Files) -->
    <link rel="stylesheet" href="{!! asset('assets/css/plugins/animate.css') !!}" />
    <link rel="stylesheet" href="{!! asset('assets/css/plugins/swiper-bundle.min.css') !!}" />
    <link rel="stylesheet" href="{!! asset('assets/css/plugins/jquery-ui.min.css') !!}" />
    <link rel="stylesheet" href="{!! asset('assets/css/plugins/nice-select.css') !!}" />
    <link rel="stylesheet" href="{!! asset('assets/css/plugins/venobox.css') !!}" />

    
    <!-- Main Style -->
    <link rel="stylesheet" href="{!! asset('assets/css/style.css') !!}" />

</head>

<body>

    <!-- Top Bar -->

    {{-- <div class="header-to-bar"> HELLO EVERYONE! 25% Off All Products </div> --}}

    <!-- Top Bar -->
    <!-- Header Area Start -->
    @include('layouts.header')

    @include('layouts.cart')
    <!-- Header Area End -->
    <div class="offcanvas-overlay"></div>

    <!-- OffCanvas Wishlist Start -->
    @yield('content')
    <!--  Blog area End -->

    @include('layouts.footer')
    <!-- Modal end -->

    <!-- Global Vendor, plugins JS -->

    <!-- Vendor JS -->
    <script src="{!! asset('assets/js/vendor/jquery-3.5.1.min.js') !!}"></script>

    <script src="{!! asset('assets/js/vendor/bootstrap.bundle.min.js') !!}"></script>
    <script src="{!! asset('assets/js/vendor/jquery-migrate-3.3.0.min.js') !!}"></script>
    <script src="{!! asset('assets/js/vendor/modernizr-3.11.2.min.js') !!}"></script>

    <!--Plugins JS-->
    <script src="{!! asset('assets/js/plugins/swiper-bundle.min.js') !!}"></script>
    <script src="{!! asset('assets/js/plugins/jquery-ui.min.js') !!}"></script>
    <script src="{!! asset('assets/js/plugins/jquery.nice-select.min.js') !!}"></script>
    <script src="{!! asset('assets/js/plugins/countdown.js') !!}"></script>
    <script src="{!! asset('assets/js/plugins/scrollup.js') !!}"></script>
    <script src="{!! asset('assets/js/plugins/jquery.zoom.min.js') !!}"></script>
    <script src="{!! asset('assets/js/plugins/venobox.min.js') !!}"></script>
    <script src="{!! asset('assets/js/plugins/ajax-mail.js') !!}"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <script src="{!! asset('assets/js/vendor/vendor.min.js') !!}"></script>
    <script src="{!! asset('assets/js/plugins/plugins.min.js') !!}"></script> -->

    <!-- Main Js -->
    <script src="{!! asset('assets/js/main.js') !!}"></script>
</body>

</html>