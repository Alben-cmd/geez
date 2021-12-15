@extends ('layouts.master')
@section('title', '| cloth')
@section('content')

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb-title">Clothes</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{route('home') }} ">Home</a></li>
                        <li class="breadcrumb-item"> <a href="{{ route('clothes') }} "></a>Clothes</li>
                        <li class="breadcrumb-item active">{{ $cloth->slug }}</li>
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
                                <img class="img-responsive m-auto" src="{{ asset('/assets/images/clothes/' .$cloth->image) }}"
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
                                <img class="img-responsive m-auto" src="{!! asset('assets/images/product-image/small-image/2.jpg') !!}') !!}"
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
                        <h2>{{ $cloth->name }}</h2>
                        <div class="pricing-meta">
                            <ul>
                                <li class="old-price not-cut">₦{{ $cloth->price }}</li>
                            </ul>
                        </div>
                        
                        <p class="mt-30px mb-0">{{ $cloth->details }}</p>
                        <div class="pro-details-quality">
                            <div class="cart-plus-minus">
                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                            </div>
                            <div class="pro-details-cart">
                                {{-- <button class="add-cart" href=""> Add To Cart</button> --}}
                                <form action="{{ route('cart.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $cloth->id}} ">
                                    <input type="hidden" name="name" value="{{ $cloth->name}} ">
                                    <input type="hidden" name="price" value="{{ $cloth->price}} ">
                                    <button  class="add-cart"> Add To Cart</button>
                                </form>
                            </div>
                            <div class="pro-details-compare-wishlist pro-details-wishlist ">

                                <form action="{{ route('user.add.wishlist') }}" method="POST">
                                    @csrf
                                    @if(Auth::user())
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
                                    @endif
                                    <input type="hidden" name="cloth_id" value="{{ $cloth->id}} ">
                                    <button><i class="pe-7s-like"></i> </button>
                                </form>
                                
                            </div>
                            {{-- <div class="pro-details-compare-wishlist pro-details-compare">
                                <a href="compare.html"><i class="pe-7s-refresh-2"></i></a>
                            </div> --}}
                        </div>
                        <div class="pro-details-sku-info pro-details-same-style  d-flex">
                            <span>Designer:  </span>
                            <ul class="d-flex">
                                <li>
                                    <a href="#">{{ $cloth->brand_name}}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="pro-details-categories-info pro-details-same-style d-flex">
                            <span>Categories: </span>
                            <ul class="d-flex">
                                <li>
                                    <a href="#">{{ $cloth->category}}</a>
                                </li>
                                {{-- <li>
                                    <a href="#">eCommerce</a>
                                </li> --}}
                            </ul>
                        </div>
                       {{--  <div class="pro-details-social-info pro-details-same-style d-flex">
                            <span>Share: </span>
                            <ul class="d-flex">
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-google"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    
    <!-- product details description area start -->
    <div class="description-review-area pb-100px" data-aos="fade-up" data-aos-delay="200">
        <div class="container">
            <div class="description-review-wrapper">
                <div class="description-review-topbar nav">
                    {{-- <a data-bs-toggle="tab" href="#des-details2">Information</a> --}}
                    <a class="active" data-bs-toggle="tab" href="#des-details1">Details</a>
                    <a data-bs-toggle="tab" href="#des-details3">Comments ({{ $comment->count() }})</a>
                </div>
                <div class="tab-content description-review-bottom">
                    {{-- <div id="des-details2" class="tab-pane">
                        <div class="product-anotherinfo-wrapper text-start">
                            <ul>
                                <li><span>Weight</span> 400 g</li>
                                <li><span>Dimensions</span>10 x 10 x 15 cm</li>
                                <li><span>Materials</span> 60% cotton, 40% polyester</li>
                                <li><span>Other Info</span> American heirloom jean shorts pug seitan letterpress</li>
                            </ul>
                        </div>
                    </div> --}}
                    <div id="des-details1" class="tab-pane active">
                        <div class="product-description-wrapper">
                            <p>
                                {{ $cloth->details}}

                            </p>
                        </div>
                    </div>
                    <div id="des-details3" class="tab-pane">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="review-wrapper">
                                    @forelse ($comment as $key => $item)
                                    <div class="single-review">
                                        
                                        <div class="review-content">
                                            <div class="review-top-wrap">
                                                <div class="review-left">
                                                    <div class="review-name">
                                                        
                                                    </div>
                                                   
                                                </div>
                                                
                                            </div>
                                            <div class="review-bottom">
                                                <p align="justify">
                                                    {{$item->comment}}
                                                </p>
                                                <small>{{$item->name}}. <em>{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</em> </small> 
                                            </div>
                                        </div>

                                    </div>
                                    <hr>
                                    {{-- single end --}}
                                   @empty
                                        <p> No Comments!</p>
                                    @endforelse
                                </div>
                            </div>
                            
                            <div class="col-lg-5">
                                <div class="ratting-form-wrapper pl-50">
                                    <h3>Add a Comment</h3>
                                    <br>
                                    <div class="ratting-form">
                                        <form method="POST" action="{{ route('user.store.comment') }}" class="form-horizontal">
                                        @csrf

                                        
                                           
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="rating-form-style">
                                                        <input placeholder="Name" name="name" type="text" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="rating-form-style">
                                                        <input placeholder="Email" name="email" type="email" />
                                                    </div>
                                                </div>
                                                <input type="hidden" name="cloth_id" value="{{ $cloth->id}}">
                                                <div class="col-md-12">
                                                    <div class="rating-form-style form-submit">
                                                        <textarea name="comment" placeholder="Message"></textarea>
                                                        {{-- @if(Auth::user())
                                                            @if(Auth::user()->role_id == '1')
                                                                <button class="btn btn-primary btn-hover-color-primary "
                                                                    type="submit" value="Submit">Submit
                                                                </button>
                                                        @endif
                                                                @else
                                                                <button class="btn btn-primary btn-hover-color-primary "
                                                                    type="submit" value="Submit" disabled>Submit</button>
                                                                    <p class="text-success">To Comment, login as user!</p>
                                                                
                                                                @endif --}}

                                                        @if(Auth::check() && Auth::user()->role_id == '1')
                                                            <button class="btn btn-primary btn-hover-color-primary "
                                                                type="submit" value="Submit">Submit
                                                            </button>
                                                        @else
                                                            <button class="btn btn-primary btn-hover-color-primary "
                                                                type="submit" value="Submit" disabled>Submit
                                                            </button>
                                                            <p class="text-success">To Comment, login as user!</p>
                                                        @endif
                                                    </div>
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
    <!-- product details description area end -->

    <!-- Related product Area Start -->
    @include('layouts.might-like')
    <!-- Related product Area End -->

                      </div>
                    <!-- Shop Bottom Area End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Page End  -->

    
   
@endsection
