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
                    <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
                        <!-- dashboard  -->
                        {{-- error and success messages --}}
                        @include('partials.messaging')
                        <div class="tab-pane fade show active" id="dashboard">
                            <h4>Hi Admin {{ $profile->fname }} </h4>
                            <p>From your account dashboard. you can easily check &amp; view your <a href="#">Cloths</a>,<a href="">Tailors</a>, <a href=""> Saved Cloths</a> and <a href="#">Edit your Password and Account Details.</a></p>
                        </div>

                        {{-- my cloth section  --}}
                        @include('admin.cloth')
                       

                   
                        {{-- adding clothes start --}}
                        @include('admin.add_cloth')
                        {{-- adding clothes ends --}}

                        {{--  category start --}}
                        @include('admin.category')
                        {{--  category ends --}}

                        {{-- adding category start --}}
                        @include('admin.add_category')
                        {{-- adding category ends --}}

                        <!-- tailors -->
                        @include('admin.tailors')
                        <!-- Tailors ends  -->

                        <!-- approved comments -->
                        @include('admin.approved_comments')
                        <!-- approved comments ends  -->

                        <!-- Unapproved comments -->
                        @include('admin.unapproved_comments')
                        <!-- inapproved comments ends  -->

                        <!-- profile -->
                       @include('admin.profile')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
