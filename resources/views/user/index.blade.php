@extends ('layouts.master')
@section('title', '| dashboard')
@section('content')
    
    <!-- breadcrumb-area end -->

    <!-- account area start -->
    <div class="account-dashboard pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <!-- Nav tabs -->
                    <div class="dashboard_tab_button" data-aos="fade-up" data-aos-delay="0">
                        <ul role="tablist" class="nav flex-column dashboard-list">
                            <li><a href="#dashboard" data-bs-toggle="tab" class="nav-link active">Dashboard</a></li>
                            <li> <a href="#cloths" data-bs-toggle="tab" class="nav-link">My Saved Clothes</a></li>
                            <li><a href="#tailor" data-bs-toggle="tab" class="nav-link">My Tailors</a></li>
                            {{--  <li><a href="#items" data-bs-toggle="tab" class="nav-link">Saved Items</a></li> --}}
                            <li><a href="#profile" data-bs-toggle="tab" class="nav-link">My profile</a></li>
                            <li><a href="#become_tailor" data-bs-toggle="tab" class="nav-link">Become a Tailor</a></li>
                            <li>
                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); 
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>

                              
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
                        <!-- dashboard  -->
                        {{-- error and success messages --}}
                        @include('partials.messaging')
                        <div class="tab-pane fade show active" id="dashboard">
                            <h4>Dashboard </h4>
                            <p>From your account dashboard. you can easily check &amp; view your <a href="#">Cloths</a>,<a href="">Tailors</a>, <a href=""> Saved Cloths</a> and <a href="#">Edit your Password and Account Details.</a></p>
                        </div>

                        {{-- my saved clothes start --}}
                        @include('user.saved_clothes')
                        {{-- my saved clothes ends --}}

                        <!-- my tailors start -->
                        @include('user.subscribed')
                        {{-- my tailors end --}}

                        <!-- profile -->
                        @include('user.profile')
                        {{-- profile end --}}

                        <!-- user to tailor -->
                        @include('user.become_tailor')
                        {{-- user to tailor end --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
