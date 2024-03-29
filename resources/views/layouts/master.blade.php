
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="robots" content="index, follow" />
    <title>Geez @yield('title')</title>
    <meta name="description" content="geez fashion" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Add site Favicon -->
    <link rel="shortcut icon" href="{!! asset('assets/images/favicon/favicon_i.ico') !!}" type="image/png">

    <link rel="stylesheet" href="{!! asset('css/message.css') !!}" />

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
     @livewireStyles

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
    @yield('extra-js')

    @livewireScripts
    <!-- Message image Modal Start -->
                                        <div class="modal popup-search-style" id="messageimage">
                                            <button type="button" class="close-btn" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                            <div class="modal-overlay">
                                                <div class="modal-dialog p-0" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <h2>Search  For Desgins</h2>
                                                            <form action="{{ route('search') }} " method="GET" class="navbar-form position-relative" role="search">
                                                                <div class="form-group">
                                                                    <input type="text" name="query" value="{{ request()->input('query') }} " class="form-control" placeholder="Search here...">
                                                                </div>
                                                                <button type="submit" class="submit-btn"><i class="pe-7s-search"></i></button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Message image Modal End -->
</body>

</html>