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
                    @include('partials.user_dashboard')
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
                        <!-- dashboard  -->
                        {{-- error and success messages --}}
                        @include('partials.messaging')
                        <div class="tab-pane fade show active" id="dashboard">
                            <h4>Dashboard </h4>
                            <p>From your account dashboard. you can easily check &amp; view your <a href="{{ route('user.wishlist.index') }} ">Wishlist</a>,<a href="{{ route('user.subscribed') }}">Designer</a>,</a> and <a href="{{ route('user.profile') }}">Edit your Password and Account Details.</a></p>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3 grid-margin stretch-card">
                              <div class="card">
                                <div class="card-body">
                                  <p class="card-title text-md-center text-xl-left">Wishlists</p>
                                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                    
                                  </div>
                                  <br>  
                                  <p class="mb-0 mt-2 text-bold"> {{ $my_clothes->count() }} </p>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-3 grid-margin stretch-card">
                              <div class="card">
                                <div class="card-body">
                                    <p class="card-title text-md-center text-xl-left"> Designers</p>
                                    <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                      
                                    </div>
                                    <br>  
                                    <p class="mb-0 mt-2 text-bold">{{ $subscribe->count() }} </p>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
