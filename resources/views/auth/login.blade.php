@extends ('layouts.master')
@section('title', '| login')
@section('content')
    <!-- breadcrumb-area start -->
   {{--  <div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb-title">Shop</h2>
             
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Login</li>
                    </ul>
                
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
                                <h4>Register as User</h4>
                            </a>
                            <a data-bs-toggle="tab" href="#ruser">
                                <h4>Register as Tailor</h4>
                            </a>
                        </div>


                        {{-- login start --}}
                        <div class="tab-content">
                            <div id="lg1" class="tab-pane active">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        @foreach ($errors->all() as $error)
                                            <li class="btn btn-danger">{{ $error }}</li>
                                        @endforeach
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
                                            <input type="hidden" name="picture" />
                                            <input name="location" placeholder="Location" type="hidden"/>
                                            <input name="phone_2" placeholder="phone Number 2" type="hidden" />
                                            <input type="hidden" name="brand_name" placeholder="Brand Name" />
                                            <input type="text" name="fname" placeholder="First Name" required />
                                                @if ($errors->has('fname'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('fname') }}</strong>
                                                    </span>
                                                @endif
                                            <input type="text" name="lname" placeholder="Last Name" required />
                                                @if ($errors->has('lname'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('lname') }}</strong>
                                                    </span>
                                                @endif
                                            <input type="hidden" name="role_id" value="1">
                                        
                                            <input name="email" placeholder="Email" type="email" required />
                                            @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            <input name="phone_1" placeholder="phone Number" type="text" required />
                                            @if ($errors->has('phone_1'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('phone_1') }}</strong>
                                                    </span>
                                                @endif
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
                                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" >
                                            @csrf
                                            <input type="file" name="picture" placeholder="Profile Picture" />
                                            <input type="text" name="fname" placeholder="First Name" required />
                                                @if ($errors->has('fname'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('fname') }}</strong>
                                                    </span>
                                                @endif
                                            <input type="text" name="lname" placeholder="Last Name" required />
                                                @if ($errors->has('lname'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('lname') }}</strong>
                                                    </span>
                                                @endif
                                            <input type="hidden" name="role_id" value="2">
                                            <input type="text" name="brand_name" placeholder="Brand Name" required/>
                                                @if ($errors->has('brand_name'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('brand_name') }}</strong>
                                                    </span>
                                                @endif
                                            <input name="email" placeholder="Email" type="email" required />
                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            <input name="phone_1" placeholder="phone Number 1" type="text" required />
                                                @if ($errors->has('phone_1'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('phone_1') }}</strong>
                                                    </span>
                                                @endif
                                            <input name="phone_2" placeholder="phone Number 2" type="text" />
                                                @if ($errors->has('phone_2'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('phone_2') }}</strong>
                                                    </span>
                                                @endif
                                            <input name="location" placeholder="Location" type="text" required />
                                                @if ($errors->has('location'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('location') }}</strong>
                                                    </span>
                                                @endif
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
