    <header>
        <div class="header-main sticky-nav ">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-auto align-self-center">
                        <div class="header-logo">
                            <a href="{{ route('home') }}"><img src="{!! asset('assets/images/logo/logo.png') !!}" alt="Site Logo" /></a>
                        </div>
                    </div>
                    <div class="col align-self-center d-none d-lg-block">
                        <div class="main-menu">
                            <ul>
                                <li class="{{ (Request()->is('/' )) ? 'active':"" }}"><a href="{{ route('home') }} ">Home</a></li>
                                <li class="{{ (Request()->is('clothes' )) ? 'active':"" }}"><a href="{{ route('clothes') }} ">Clothes</a></li>
                                <li class="{{ (Request()->is('designer' )) ? 'active':"" }}"><a href="{{ route('tailors') }} ">Designers</a></li>
                                <li class="{{ (Request()->is('about' )) ? 'active':"" }}"><a href="{{ route('about') }} ">About</a></li>
                                <li class="{{ (Request()->is('contact' )) ? 'active':"" }}"><a href="{{ route('contact') }} ">Contact us</a></li>
                               
                            </ul>
                        </div>
                    </div>
                    <!-- Header Action Start -->
                    <div class="col col-lg-auto align-self-center pl-0">
                        <div class="header-actions">
                            <!-- Single Wedge Start -->
                            @guest
                            <a href="{{ route('login') }}" class="header-action-btn login-btn">Sign In/Register</a>
                            @else
                            <div class="header-actions">
                                <ul>
                            @if(Auth::user()->role_id == 1)
                                    <li class="dropdown "><a href="#" style="color: #fb5d5d; font-weight: 600;">{{ Auth::user()->fname }}<i class="pe-7s-angle-down"></i></a>
                                    <ul class="sub-menu">
                                @else
                                <li class="dropdown "><a href="#"><img src="{{ asset('/assets/images/tailors/' . Auth::user()->picture )}}" style="width: 35px;" alt="{{ Auth::user()->fname }}" /><i class="pe-7s-angle-down"></i></a>
                                    <ul class="sub-menu">
                                @endif
                                        
                                        @if(Auth::user()->role_id == 1)
                                        <li><a href="{{ route('user.dashboard') }} ">Dashboard</a></li>
                                        @elseif(Auth::user()->role_id == 2)
                                        <li><a href="{{ route('designer.dashboard') }} ">Dashboard</a></li>
                                        @elseif(Auth::user()->role_id == 3)
                                        <li><a href="{{ route('admin.dashboard') }} ">Dashboard</a></li>
                                        @endif
                                      
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
                            </ul>
                        </li>
                    </ul>
                    </div>
                            
                            @endguest 
                            <a href="#" class="header-action-btn" data-bs-toggle="modal" data-bs-target="#searchActive">
                                <i class="pe-7s-search"></i>
                            </a>
                            <!-- Single Wedge End -->
                            <!-- Single Wedge Start -->
                    
                            <a href="{{ route('user.wishlist.index') }}" class="header-action-btn">
                                <i class="pe-7s-like"></i>
                            </a>
                            <!-- Single Wedge End -->
                            <!-- <a href="{{ route('cart.index') }}"
                                class="header-action-btn header-action-btn-cart">
                                <i class="pe-7s-shopbag"></i>
                                @if( Cart::instance('default')->count() > 0)
                                <span class="header-action-num">{{ Cart::instance('default')->count() }} </span>
                                @endif
                                
                            </a> -->
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