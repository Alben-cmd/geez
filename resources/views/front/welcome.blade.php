@extends ('layouts.master')
@section('title', '| Home')
@section('content')

    <div class="section">
        <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1">
            <!-- Hero slider Active -->
            <div class="swiper-wrapper">
                <!-- Single slider item -->
                <div class="hero-slide-item-2 slider-height swiper-slide d-flex bg-color1">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 align-self-center sm-center-view">
                                <div class="hero-slide-content hero-slide-content-2 -animated-1">
                                    
                                    <h2 class="title-1">Meet Tailors Fast,<br> get that dream wear</h2>
                                    <a href="shop-left-sidebar.html" class="btn btn-lg btn-primary btn-hover-dark"> Shop
                                        Now <i class="#" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- Single slider item -->
                
            </div>
            <!-- Add Pagination -->
           
            </div>
        </div>
    </div>

    <!-- Clothes Area Start -->
    <div class="product-area pt-100px pb-100px">
        <div class="container">
            <!-- Section Title & Tab Start -->
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-12">
                    <div class="section-title text-center mb-0">
                        <h2 class="title">Clothes</h2>
                        <hr>
                        <br>
                        <br>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <div class="col">
                    <div class="tab-content mb-30px0px">
                        <!-- 1st tab start -->
                        <div class="tab-pane fade show active" id="tab-product--all">
                            <div class="row">
                                {{-- begining of single cloth  --}}
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                    data-aos-delay="200">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="{!! asset('assets/images/product-image/1.jpg') !!}" alt="Product" />
                                                <img class="hover-image" src="{!! asset('assets/images/product-image/2.jpg') !!}"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                                {{-- <span class="new">New</span> --}}
                                            </span>
                                            <div class="actions">
                                                {{-- <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="pe-7s-like"></i></a> --}}
                                                <a href="#" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                               {{--  <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="pe-7s-refresh-2"></i></a> --}}
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            
                                            <h5 class="title"><a href="single-product.html">Women's Elizabeth Coat
                                                </a>
                                            </h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                {{-- ending of single cloth --}}
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                    data-aos-delay="400">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="{!! asset('assets/images/product-image/3.jpg') !!}" alt="Product" />
                                                <img class="hover-image" src="{!! asset('assets/images/product-image/4.jpg') !!}"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                                {{-- <span class="sale">-10%</span>
                                                <span class="new">New</span> --}}
                                            </span>
                                            <div class="actions">
                                                {{-- <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="pe-7s-like"></i></a> --}}
                                                <a href="#" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                {{-- <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="pe-7s-refresh-2"></i></a> --}}
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                        
                                            <h5 class="title"><a href="single-product.html">Ardene Microfiber
                                                    Tights</a>
                                            </h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                                {{-- <span class="old">$48.50</span> --}}
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                    data-aos-delay="600">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="{!! asset('assets/images/product-image/5.jpg') !!}" alt="Product" />
                                                <img class="hover-image" src="{!! asset('assets/images/product-image/6.jpg') !!}"
                                                    alt="Product" />
                                            </a>
                                            
                                            <div class="actions">
                                                
                                                <a href="#" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            
                                            <h5 class="title"><a href="single-product.html">Women's Long Sleeve
                                                    Shirts</a></h5>
                                            <span class="price">
                                                <span class="new">$30.50</span>
                                                
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                    data-aos-delay="800">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="{!! asset('assets/images/product-image/7.jpg') !!}" alt="Product" />
                                                <img class="hover-image" src="{!! asset('assets/images/product-image/8.jpg') !!}"
                                                    alt="Product" />
                                            </a>
                                            
                                            <div class="actions">
                                                
                                                <a href="#" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                               
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            
                                            <h5 class="title"><a href="single-product.html">Parrera Sunglasses -
                                                    Lomashop</a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px"
                                    data-aos="fade-up" data-aos-delay="200">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="{!! asset('assets/images/product-image/2.jpg') !!}" alt="Product" />
                                                <img class="hover-image" src="{!! asset('assets/images/product-image/10.jpg') !!}"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                                
                                            </span>
                                            <div class="actions">
                                                
                                                <a href="#" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            
                                            <h5 class="title"><a href="single-product.html">Cool Man Wearing
                                                    Leather</a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                               
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6  mb-md-30px mb-lm-30px"
                                    data-aos="fade-up" data-aos-delay="400">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="{!! asset('assets/images/product-image/4.jpg') !!}" alt="Product" />
                                                <img class="hover-image" src="{!! asset('assets/images/product-image/12.jpg') !!}"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                            </span>
                                            <div class="actions">
                                                
                                                <a href="#" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                               
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                           
                                            <h5 class="title"><a href="single-product.html">Portrait Of A Young
                                                    Stylish</a>
                                            </h5>
                                            
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-es-30px" data-aos="fade-up"
                                    data-aos-delay="600">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="{!! asset('assets/images/product-image/6.jpg') !!}" alt="Product" />
                                                <img class="hover-image" src="{!! asset('assets/images/product-image/14.jpg') !!}"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                            </span>
                                            <div class="actions">
                                                
                                                <a href="#" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            
                                            <h5 class="title"><a href="single-product.html">Men's Fashion Leather
                                                    Bag</a></h5>
                                            <span class="price">
                                                <span class="new">$30.50</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 " data-aos="fade-up"
                                    data-aos-delay="800">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="{!! asset('assets/images/product-image/8.jpg') !!}" alt="Product" />
                                                <img class="hover-image" src="{!! asset('assets/images/product-image/16.jpg') !!}"
                                                    alt="Product" />
                                            </a>
                                           
                                            <div class="actions">
                                                
                                                <a href="#" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            
                                            <h5 class="title"><a href="single-product.html">Long sleeve knee length</a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                            </div>
                        </div>
                        <!-- 1st tab end -->
                        </div>
                    <a href="shop-left-sidebar.html" class="btn btn-lg btn-primary btn-hover-dark m-auto"> View More <i
                            class="fa fa-arrow-right ml-15px" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
    {{-- Clothes area ends --}}

    {{-- tailor area starts  --}}

    <div class="product-area pt-100px pb-100px">
        <div class="container">
            <!-- Section Title & Tab Start -->
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-12">
                    <div class="section-title text-center mb-0">
                        <h2 class="title">Tailors</h2>
                        <hr>
                        <br>
                        <br>
                        <!-- Tab Start -->
                        
                        <!-- Tab End -->
                    </div>
                </div>
                <!-- Section Title End -->
            </div>
            <!-- Section Title & Tab End -->

            <div class="row">
                <div class="col">
                    <div class="tab-content mb-30px0px">
                        <!-- 1st tab start -->
                        <div class="tab-pane fade show active" id="tab-product--all">
                            <div class="row">
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                    data-aos-delay="200">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="{!! asset('assets/images/product-image/1.jpg') !!}" alt="Product" />
                                                <img class="hover-image" src="{!! asset('assets/images/product-image/2.jpg') !!}"
                                                    alt="Product" />
                                            </a>
                                            {{-- <span class="badges">
                                                <span class="new">New</span>
                                            </span> --}}
                                            <div class="actions">
                                                
                                                <a href="#" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                           
                                            <h5 class="title"><a href="single-product.html">Women's Elizabeth Coat
                                                </a>
                                            </h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                    data-aos-delay="400">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="{!! asset('assets/images/product-image/3.jpg') !!}" alt="Product" />
                                                <img class="hover-image" src="{!! asset('assets/images/product-image/4.jpg') !!}"
                                                    alt="Product" />
                                            </a>
                                           
                                            <div class="actions">
                                               
                                                <a href="#" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            
                                            <h5 class="title"><a href="single-product.html">Ardene Microfiber
                                                    Tights</a>
                                            </h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                                
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                    data-aos-delay="600">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="{!! asset('assets/images/product-image/5.jpg') !!}" alt="Product" />
                                                <img class="hover-image" src="{!! asset('assets/images/product-image/6.jpg') !!}"
                                                    alt="Product" />
                                            </a>
                                            
                                            <div class="actions">
                                               
                                                <a href="#" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            
                                            <h5 class="title"><a href="single-product.html">Women's Long Sleeve
                                                    Shirts</a></h5>
                                            <span class="price">
                                                <span class="new">$30.50</span>
                                               
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                    data-aos-delay="800">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="{!! asset('assets/images/product-image/7.jpg') !!}" alt="Product" />
                                                <img class="hover-image" src="{!! asset('assets/images/product-image/8.jpg') !!}"
                                                    alt="Product" />
                                            </a>
                                           
                                            <div class="actions">
                                               
                                                <a href="#" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                               
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            
                                            <h5 class="title"><a href="single-product.html">Parrera Sunglasses -
                                                    Lomashop</a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px"
                                    data-aos="fade-up" data-aos-delay="200">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="{!! asset('assets/images/product-image/2.jpg') !!}" alt="Product" />
                                                <img class="hover-image" src="{!! asset('assets/images/product-image/10.jpg') !!}"
                                                    alt="Product" />
                                            </a>
                                           
                                            <div class="actions">
                                                
                                                <a href="#" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            
                                            <h5 class="title"><a href="single-product.html">Cool Man Wearing
                                                    Leather</a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                        
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6  mb-md-30px mb-lm-30px"
                                    data-aos="fade-up" data-aos-delay="400">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="{!! asset('assets/images/product-image/4.jpg') !!}" alt="Product" />
                                                <img class="hover-image" src="{!! asset('assets/images/product-image/12.jpg') !!}"
                                                    alt="Product" />
                                            </a>
                                            
                                            <div class="actions">
                                                
                                                <a href="#" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            
                                            <h5 class="title"><a href="single-product.html">Portrait Of A Young
                                                    Stylish</a>
                                            </h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-es-30px" data-aos="fade-up"
                                    data-aos-delay="600">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="{!! asset('assets/images/product-image/6.jpg') !!}" alt="Product" />
                                                <img class="hover-image" src="{!! asset('assets/images/product-image/14.jpg') !!}"
                                                    alt="Product" />
                                            </a>
                                           
                                            <div class="actions">
                                               
                                                <a href="#" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                                
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            
                                            <h5 class="title"><a href="single-product.html">Men's Fashion Leather
                                                    Bag</a></h5>
                                            <span class="price">
                                                <span class="new">$30.50</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 " data-aos="fade-up"
                                    data-aos-delay="800">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="{!! asset('assets/images/product-image/8.jpg') !!}" alt="Product" />
                                                <img class="hover-image" src="{!! asset('assets/images/product-image/16.jpg') !!}"
                                                    alt="Product" />
                                            </a>
                                            
                                            <div class="actions">
                                               
                                                <a href="#" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                               
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            
                                            <h5 class="title"><a href="single-product.html">Long sleeve knee
                                                    length</a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                            </div>
                        </div>
                        <!-- 1st tab end -->
                       
                        
                       
                    </div>
                    <a href="shop-left-sidebar.html" class="btn btn-lg btn-primary btn-hover-dark m-auto"> View More <i
                            class="fa fa-arrow-right ml-15px" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>

    {{-- Tailor area ends  --}}


</main><!-- End #main -->
  @endsection