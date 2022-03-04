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
                            <h4>My Profile</h4>
                        
                            <div class="login">
                                <div class="login_form_container">
                                    <div class="account_login_form">
                                        <div class="row">
                                             <div class="col-6"> 
                                            <form method="POST" action="{{ route('tailor.profile.update', ['id' => $profile->id]) }}" enctype="multipart/form-data" class="form-horizontal">
                                                    @csrf
                                               
                                                    <div class="default-form-box mb-20">
                                                        <label>First Name</label>
                                                        <input type="text" name="fname" value="{{ $profile->fname }} ">
                                                    </div>
                                                    
                                                    <div class="default-form-box mb-20">
                                                    <label>Picture</label>
                                                    <input type="file" name="picture">
                                                    <span style="color: green;"> Optional</span>
                                                    </div>

                                                    <div class="default-form-box mb-20">
                                                        <label>Phone Number 1</label>
                                                        <input type="text" name="phone_1" value="{{ $profile->phone_1 }}">
                                                    </div>
                                                     <div class="default-form-box mb-20">
                                                        <label>Brand Name</label>
                                                        <input type="text" name="brand_name" value="{{ $profile->brand_name }}">
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

                                                    <div class="default-form-box mb-20">
                                                        <label>Confirm Password</label>
                                                        <input type="password" name="new_password_confirmation">
                                                    </div>
                                                    
                                                    
                                                </div>
                                                <div class="col-6">
                                                    <div class="default-form-box mb-20">
                                                        <label>Last Name</label>
                                                        <input type="text" name="lname" value="{{ $profile->lname }}">
                                                    </div>

                                                    <div class="default-form-box mb-20">
                                                        <label>Email</label>
                                                        <input type="text" name="email" value="{{ $profile->email }}">
                                                    </div>
                                                    <br>
                                                    <div class="default-form-box mb-20">
                                                        <label>Phone Number 2</label>
                                                        <input type="text" name="phone_2" value="{{ $profile->phone_2 }}">
                                                    </div>

                                                     <div class="default-form-box mb-20">
                                                        <label>Location</label>
                                                        <input type="text" name="location" value="{{ $profile->location }}">
                                                    </div>
                                                    
                                                    <div class="default-form-box mb-20">
                                                        <label>New Password</label>
                                                        <input type="password" name="new_password">
                                                       
                                                    </div>

                                                    <br>
                                                    
                                                    
                                                    
                                                </div>
                                                <div class="save_button mt-3" align="center">
                                                        <button class="btn"
                                                            type="submit">Update</button>
                                                    </div>
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
