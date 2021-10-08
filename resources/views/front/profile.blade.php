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
                            <li> <a href="#cloths" data-bs-toggle="tab" class="nav-link">My Cloths</a></li>
                            <li><a href="#tailor" data-bs-toggle="tab" class="nav-link">My Tailors</a></li>
                            <li><a href="#items" data-bs-toggle="tab" class="nav-link">Saved Items</a></li>
                            <li><a href="#profile" data-bs-toggle="tab" class="nav-link">My profile</a>
                            </li>
                            <li><a href="login.html" class="nav-link">logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
                        <!-- dashboard  --><div class="card-body">
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                </div>
                        <div class="tab-pane fade show active" id="dashboard">
                            <h4>Dashboard </h4>
                            <p>From your account dashboard. you can easily check &amp; view your <a href="#">Cloths</a>,<a href="">Tailors</a>, <a href=""> Saved Cloths</a> and <a href="#">Edit your Password and Account Details.</a></p>
                        </div>
                        <div class="tab-pane fade" id="cloths">
                            <h4>My Cloths</h4>
                            <div class="row">
                            <div class="col">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="shop-grid">
                                        <div class="row mb-n-30px">
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="200">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/1.jpg"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="assets/images/product-image/1.jpg" alt="Product" />
                                                        </a>
                                                        
                                                        
                                                         
                                                    </div>
                                                    <div class="content">
                                                        
                                                        <h5 class="title"><a href="single-product.html">Women's
                                                                Elizabeth Coat
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">$38.50</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="400">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/2.jpg"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="assets/images/product-image/2.jpg" alt="Product" />
                                                        </a>
                                                       
                                                       
                                                         
                                                    </div>
                                                    <div class="content">
                                                        
                                                        <h5 class="title"><a href="single-product.html">Ardene
                                                                Microfiber
                                                                Tights</a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">$30.50</span>
                                                            
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- Single Prodect -->
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="600">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/3.jpg"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="assets/images/product-image/3.jpg" alt="Product" />
                                                        </a>
                                                        
                                                       
                                                         
                                                    </div>
                                                    <div class="content">
                                                        
                                                        <h5 class="title"><a href="single-product.html">Women's Long
                                                                Sleeve
                                                                Shirts</a></h5>
                                                        <span class="price">
                                                            <span class="new">$30.50</span>
                                                            
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="800">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/4.jpg"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="assets/images/product-image/4.jpg" alt="Product" />
                                                        </a>
                                                        
                                                        
                                                         
                                                    </div>
                                                    <div class="content">
                                                       
                                                        <h5 class="title"><a href="single-product.html">Parrera Sunglasses - Lomashop</a></h5>
                                                        <span class="price">
                                                            <span class="new">$38.50</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- Single Prodect -->
                                            </div>
                                          
                                                   
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        </div>

                        <!-- tailor -->
                        <div class="tab-pane fade" id="tailor">
                            <h4>My Tailors</h4>
                           <div class="row">
                            <div class="col">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="shop-grid">
                                        <div class="row mb-n-30px">
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="200">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/1.jpg"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="assets/images/product-image/1.jpg" alt="Product" />
                                                        </a>
                                                        
                                                        
                                                         
                                                    </div>
                                                    <div class="content">
                                                        
                                                        <h5 class="title"><a href="single-product.html">Women's
                                                                Elizabeth Coat
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">$38.50</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="400">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/2.jpg"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="assets/images/product-image/2.jpg" alt="Product" />
                                                        </a>
                                                       
                                                       
                                                         
                                                    </div>
                                                    <div class="content">
                                                        
                                                        <h5 class="title"><a href="single-product.html">Ardene
                                                                Microfiber
                                                                Tights</a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">$30.50</span>
                                                            
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- Single Prodect -->
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="600">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/3.jpg"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="assets/images/product-image/3.jpg" alt="Product" />
                                                        </a>
                                                        
                                                       
                                                         
                                                    </div>
                                                    <div class="content">
                                                        
                                                        <h5 class="title"><a href="single-product.html">Women's Long
                                                                Sleeve
                                                                Shirts</a></h5>
                                                        <span class="price">
                                                            <span class="new">$30.50</span>
                                                            
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="800">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/4.jpg"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="assets/images/product-image/4.jpg" alt="Product" />
                                                        </a>
                                                        
                                                        
                                                         
                                                    </div>
                                                    <div class="content">
                                                       
                                                        <h5 class="title"><a href="single-product.html">Parrera Sunglasses - Lomashop</a></h5>
                                                        <span class="price">
                                                            <span class="new">$38.50</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- Single Prodect -->
                                            </div>
                                          
                                                   
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="tab-pane" id="items">
                            <h4>My Saved Items</h4>
                            <div class="row">
                            <div class="col">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="shop-grid">
                                        <div class="row mb-n-30px">
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="200">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/1.jpg"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="assets/images/product-image/1.jpg" alt="Product" />
                                                        </a>
                                                        
                                                        
                                                         
                                                    </div>
                                                    <div class="content">
                                                        
                                                        <h5 class="title"><a href="single-product.html">Women's
                                                                Elizabeth Coat
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">$38.50</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="400">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/2.jpg"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="assets/images/product-image/2.jpg" alt="Product" />
                                                        </a>
                                                       
                                                       
                                                         
                                                    </div>
                                                    <div class="content">
                                                        
                                                        <h5 class="title"><a href="single-product.html">Ardene
                                                                Microfiber
                                                                Tights</a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">$30.50</span>
                                                            
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- Single Prodect -->
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="600">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/3.jpg"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="assets/images/product-image/3.jpg" alt="Product" />
                                                        </a>
                                                        
                                                       
                                                         
                                                    </div>
                                                    <div class="content">
                                                        
                                                        <h5 class="title"><a href="single-product.html">Women's Long
                                                                Sleeve
                                                                Shirts</a></h5>
                                                        <span class="price">
                                                            <span class="new">$30.50</span>
                                                            
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="800">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/4.jpg"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="assets/images/product-image/4.jpg" alt="Product" />
                                                        </a>
                                                        
                                                        
                                                         
                                                    </div>
                                                    <div class="content">
                                                       
                                                        <h5 class="title"><a href="single-product.html">Parrera Sunglasses - Lomashop</a></h5>
                                                        <span class="price">
                                                            <span class="new">$38.50</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- Single Prodect -->
                                            </div>
                                          
                                                   
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        </div>

                        <!-- profile -->
                        <div class="tab-pane fade" id="profile">
                            <h3>My Profile </h3>
                            <div class="login">
                                <div class="login_form_container">
                                    <div class="account_login_form">
                                        <div class="row">
                                            <div class="col-6"> 
                                                <form method="POST" action="{{ route('profile.update', ['id' => $profile->id]) }} " class="form-horizontal">
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
                                                <input type="password" name="new-password">
                                               
                                            </div>
                                            <div class="save_button mt-3">
                                                <button class="btn"
                                                    type="submit">Save</button>
                                            </div>
                                            </div>
                                            <div class="col-6">
                                            <div class="default-form-box mb-20">
                                                <label>Last Name</label>
                                                <input type="text" name="lname" value="{{ $profile->lname }}">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Current Password</label>
                                                <input type="password" name="current-password">
                                                @if ($errors->has('current-password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('current-password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Confirm Password</label>
                                                <input type="password" name="new-password_confirmation">
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
        </div>
    </div>
    @endsection
