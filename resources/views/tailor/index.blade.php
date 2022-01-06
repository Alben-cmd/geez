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
                            <h4>Hi Tailor {{ $profile->fname }}</h4>
                            <p>From your account dashboard. you can easily check &amp; view your <a href="#">Cloths</a>,<a href="">Tailors</a>, <a href=""> Saved Cloths</a> and <a href="#">Edit your Password and Account Details.</a></p>
                        </div>
                        {{-- viewing cloth start --}}
                        @include('tailor.cloth')
                        {{-- viewing cloth ends --}}

                        {{-- adding clothes start --}}
                        @include('tailor.add_cloth')
                        {{-- adding clothes ends --}}               

                        <!-- profile -->
                        @include('tailor.profile')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
