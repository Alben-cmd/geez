@extends ('layouts.master')
@section('title', '| login')
@section('content')
    <!-- breadcrumb-area start -->
   {{--  <div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb-title">Shop</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Login</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div> --}}

    <!-- breadcrumb-area end -->

    <!-- login area start -->
    <div class="login-register-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                    <div class="login-register-wrapper">
                        <div class="login-register-tab-list nav">
                            <a class="active" data-bs-toggle="tab" href="#lg1">
                                <h4>login</h4>
                            </a>
                            <a data-bs-toggle="tab" href="#user">
                                <h4>User register</h4>
                            </a>
                            <a data-bs-toggle="tab" href="#ruser">
                                <h4>Tailor register</h4>
                            </a>
                        </div>


                        {{-- login start --}}
                        <div class="tab-content">
                            <div id="lg1" class="tab-pane active">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <input type="password" name="password" placeholder="Password" />
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            

                                            <div class="button-box">
                                                <div class="login-toggle-btn">
                                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} /> Remember me
                                                    <a href="{{ route('password.request') }}">Forgot Password?</a>
                                                </div>
                                                <button type="submit"><span>Login</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            {{-- login ends --}}
                            {{-- User Register start --}}
                            <div id="user" class="tab-pane">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <input type="text" name="fname" placeholder="First Name" required />
                                            <input type="text" name="lname" placeholder="Last Name" required />
                                            <input type="hidden" name="Role" value="1">
                                            <input name="user-email" placeholder="Email" type="email" required />
                                            <input type="password" name="password" placeholder="Password" required/>
                                            <input type="password" name="password_confirmation" placeholder="Confirm Password" required/>
                                            <div class="button-box">
                                                <button type="submit"><span>Register</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        {{-- User register ends --}}
                        {{-- tailor register starts --}}
                        <div id="ruser" class="tab-pane">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <input type="text" name="fname" placeholder="First Name" required />
                                            <input type="text" name="lname" placeholder="Last Name" required />
                                            <input type="hidden" name="Role" value="2">
                                            <input type="text" name="brand_name" placeholder="Brand Name" required />
                                            <input name="user-email" placeholder="Email" type="email" required />
                                            <input type="password" name="password" placeholder="Password" required/>
                                            <input type="password" name="password_confirmation" placeholder="Confirm Password" required/>
                                            <div class="button-box">
                                                <button type="submit"><span>Register</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            {{-- tailor register ends --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
