    <header>
        <div class="header-main sticky-nav ">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-auto align-self-center">
                        <div class="header-logo">
                            <a href="index.html"><img src="{!! asset('assets/images/logo/logo.png') !!}" alt="Site Logo" /></a>
                        </div>
                    </div>
                    <div class="col align-self-center d-none d-lg-block">
                        <div class="main-menu">
                            <ul>
                                <li class="{{ (Request()->is('/' )) ? 'active':"" }}"><a href="{{ route('home') }} ">Home</a></li>
                                <li class="{{ (Request()->is('clothes' )) ? 'active':"" }}"><a href="{{ route('men_cloth') }} ">Clothes</a></li>
                                <li class="{{ (Request()->is('tailors' )) ? 'active':"" }}"><a href="{{ route('tailors') }} ">Tailors</a></li>
                                <li class="{{ (Request()->is('about' )) ? 'active':"" }}"><a href="{{ route('about') }} ">About</a></li>
                                <li class="{{ (Request()->is('contact' )) ? 'active':"" }}"><a href="{{ route('contact') }} ">Contact us</a></li>
                                @guest
                                <li><a href="{{ route('login') }} ">Sign In/Register</a></li>
                                @else
                                <li class="dropdown "><a href="#">{{ Auth::user()->fname }} <i class="pe-7s-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('profile') }} ">Dashboard</a></li>
                                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                                    </ul>
                                </li>
                                @endguest 
                            </ul>
                        </div>
                    </div>
                    <!-- Header Action Start -->
                    <div class="col col-lg-auto align-self-center pl-0">
                        <div class="header-actions">
                            <!-- Single Wedge Start -->
                            <a href="#" class="header-action-btn" data-bs-toggle="modal" data-bs-target="#searchActive">
                                <i class="pe-7s-search"></i>
                            </a>
                            <!-- Single Wedge End -->
                            <!-- Single Wedge Start -->
                            <a href="#offcanvas-wishlist" class="header-action-btn offcanvas-toggle">
                                <i class="pe-7s-like"></i>
                            </a>
                            <!-- Single Wedge End -->
                            <a href="#offcanvas-cart"
                                class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                                <i class="pe-7s-shopbag"></i>
                                <span class="header-action-num">01</span>
                                <!-- <span class="cart-amount">€30.00</span> -->
                            </a>
                            <a href="#offcanvas-mobile-menu"
                                class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                                <i class="pe-7s-menu"></i>
                            </a>
                        </div>
                        <!-- Header Action End -->
                    </div>
                </div>
            </div>
    </header>