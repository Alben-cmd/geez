@extends ('layouts.master')
@section('title', '| dashboard')
@section('content')
    
    <!-- breadcrumb-area end -->

    <!-- account area start -->
    <div class="account-dashboard pt-100px pb-100px">
        <div class="container">
            <div class="row">
                @include('partials.tailor_dashboard')
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
                        <!-- dashboard  -->
                        {{-- error and success messages --}}
                        @include('partials.messaging')
                        <div class="tab-pane fade show active" id="dashboard">
                            <h4>Hi Designer {{ $profile->fname }}</h4>
                            <p>From your account dashboard. you can easily check &amp; view your <a href="#">Designes</a>,<a href="">Designer</a>, <a href=""> Saved Designes</a> and <a href="#">Edit your Password and Account Details.</a></p>
                        </div>               

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
