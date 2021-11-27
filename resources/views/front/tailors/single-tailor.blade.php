@extends ('layouts.master')
@section('title', '| about')
@section('content')

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb-title">Tailor</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{route('home') }} ">Home</a></li>
                        <li class="breadcrumb-item "><a href="{{ route('tailors') }}"></a> Tailor</li>
                        <li class="breadcrumb-item active">{{ $tailor['fname'] }} {{ $tailor['lname'] }}</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumb-area end -->

    <!-- Product Details Area Start -->
    {{-- error and success messages --}}
    @include('partials.messaging')
    <div class="product-details-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                    <!-- Swiper -->
                    <div class="swiper-container zoom-top">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide zoom-image-hover">
                                <img class="img-responsive m-auto" src="{{ asset('/assets/images/tailors/' .$tailor['picture']) }}"
                                    alt="">
                            </div>
                            
                        </div>
                    </div>
                    {{-- <div class="swiper-container zoom-thumbs mt-3 mb-3">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="{!! asset('assets/images/product-image/small-image/1.jpg') !!}"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="{!! asset('assets/images/product-image/small-image/2.jpg') !!}"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="{!! asset('assets/images/product-image/small-image/3.jpg') !!}"
                                    alt="">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="{!! asset('assets/images/product-image/small-image/4.jpg') !!}"
                                    alt="">
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="product-details-content quickview-content">
                        <h2>{{ $tailor['name'] }}</h2>
                        <div class="pricing-meta">
                            <ul>
                                <li class="old-price not-cut">{{ $tailor['address'] }}</li>
                            </ul>
                        </div>
                        
                       <h2>{{ $tailor->fname }} {{ $tailor->lname }}</h2>
                        <div class="pro-details-quality">
                            
                            <div class="pro-details-cart">
                                <button class="add-cart" href="#"> Subscribe</button>
                            </div>
                            {{-- <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                <a href="wishlist.html"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="pro-details-compare-wishlist pro-details-compare">
                                <a href="compare.html"><i class="pe-7s-refresh-2"></i></a>
                            </div> --}}
                        </div>
                         <div class="pro-details-social-info pro-details-same-style d-flex">
                            <span>Brand Name:</span>
                            <ul class="d-flex">
                                <li>
                                    <a href="">{{ $tailor['brand_name'] }}</a>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="pro-details-sku-info pro-details-same-style  d-flex">
                            <span>Email: </span>
                            <ul class="d-flex">
                                <li>
                                    <a href="mailto:{{ $tailor['email'] }}">{{ $tailor['email'] }}</a>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="pro-details-categories-info pro-details-same-style d-flex">
                            <span>Phone: </span>
                            <ul class="d-flex">
                                <li>
                                    <a href="{{ $tailor['phone'] }}">{{ $tailor['phone_1'] }}</a>
                                </li>
                                
                            </ul>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>   
   <br><br><br>
@endsection