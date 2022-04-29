@extends ('layouts.master')
@section('title', '| profile')
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
                    <h4>My Profile </h4>
                    <div class="login">
                        <div class="login_form_container">
                            <div class="account_login_form">
                                <div class="row">
                                    <div class="col-6"> 
                                        <form method="POST" action="{{ route('user.profile.update', ['id' => $profile->id]) }} " class="form-horizontal">
                                            @csrf
                                            <div class="default-form-box mb-20">
                                                <label>First Name</label>
                                                <input type="text" name="fname" value="{{ $profile->fname }} ">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Email</label>
                                                <input type="text" name="email" value="{{ $profile->email }}">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>New Password</label>
                                                <input type="password" name="new_password">
                                               
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Confirm Password</label>
                                                <input type="password" name="new_password_confirmation">
                                            </div>     

                                            <div class="save_button mt-3">
                                                <button class="btn"
                                                    type="submit">Update</button>
                                                    <br>
                                            </div>
                                            </div>
                                            <div class="col-6">
                                            <div class="default-form-box mb-20">
                                                <label>Last Name</label>
                                                <input type="text" name="lname" value="{{ $profile->lname }}">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Phone Number</label>
                                                <input type="text" name="phone_1" value="{{ $profile->phone_1 }} ">
                                              
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Current Password</label>
                                                <input type="password" name="current_password">
                                                @if ($errors->has('current_password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('current_password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                                                   
                                        </form>
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
