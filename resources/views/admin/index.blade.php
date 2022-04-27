@extends ('layouts.master')
@section('title', '| dashboard')
@section('content')
    
    <!-- breadcrumb-area end -->

    <!-- account area start -->
    <div class="account-dashboard pt-100px pb-100px">
        <div class="container">
            <div class="row">

                {{-- dashboard section begins  --}}
               @include('partials.admin_dashboard')
               {{-- Dashboard section ends --}}

                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="row">
                        <div class="col-md-3 grid-margin stretch-card">
                          <div class="card">
                            <div class="card-body">
                              <p class="card-title text-md-center text-xl-left">Designes</p>
                              <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                
                              </div>
                              <br>  
                              <p class="mb-0 mt-2 text-bold">{{ $clothes->count() }} </p>
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
                                <p class="mb-0 mt-2 text-bold">{{ $tailors->count() }} </p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3 grid-margin stretch-card">
                          <div class="card">
                            <div class="card-body">
                                <p class="card-title text-md-center text-xl-left">Payments</p>
                                <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                  
                                </div>
                                <br>  
                                <p class="mb-0 mt-2 text-bold">{{ $payments->count() }} </p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3 grid-margin stretch-card">
                          <div class="card">
                            <div class="card-body">
                                <p class="card-title text-md-center text-xl-left">Comments</p>
                                <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                  
                                </div>
                                <br>  
                                <p class="mb-0 mt-2 text-bold">{{ $approved_comments->count() }}</p>
                              </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
