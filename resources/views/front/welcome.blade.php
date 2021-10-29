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
                                @forelse ($cloth_array as $key => $item)
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
                                            
                                            <h5 class="title"><a href="single-product.html">
                                                </a>
                                            </h5>
                                            <span class="price">
                                                <span class="new">{{ $item['prize'] }}</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <tr>
                                    <td colspan="7">No Record Found </td>
                                </tr>
                                @endforelse
                                {{-- ending of single cloth --}}
                              
                               
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
                                @forelse ($tailors as $key => $item)
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
                                                <span class="new">{{ $item['emailaddress'] }}</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                               
                              
                            </div>
                        </div>
                        @empty
                                <tr>
                                    <td colspan="7">No Record Found </td>
                                </tr>
                                @endforelse
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