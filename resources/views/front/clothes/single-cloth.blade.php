@extends ('layouts.master')
@section('title', '| Designes')
@section('content')

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb-title">Designes</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{route('home') }} ">Home</a></li>
                        <li class="breadcrumb-item"> <a href="{{ route('clothes') }} "></a>Designes</li>
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
                                <li class="old-price not-cut">{{ $cloth->presentPrice()}}</li>
                            </ul>
                        </div>
                        
                        <div class="pro-details-quality">
                            {{-- <div class="cart-plus-minus">
                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                            </div> --}}
                            <div class="pro-details-cart">
                                {{-- <button class="add-cart" href=""> Add To Cart</button> --}}
                                <form action="{{ route('user.add.wishlist') }}" method="POST">
                                    @csrf
                                    @if(Auth::user())
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
                                    @endif
                                    <input type="hidden" name="cloth_id" value="{{ $cloth->id}} ">
                                    <button  class="add-cart"> Add To Wishlist</button>
                                </form>
                                
                                
                                <!-- <form action="{{ route('cart.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $cloth->id}} ">
                                    <input type="hidden" name="name" value="{{ $cloth->name}} ">
                                    <input type="hidden" name="price" value="{{ $cloth->price}} ">
                                    <button  class="add-cart"> Add To Cart</button>
                                </form> -->
                            </div>
                            <div class="pro-details-compare-wishlist pro-details-wishlist">

                                <!-- <form action="{{ route('user.add.wishlist') }}" method="POST">
                                    @csrf
                                    @if(Auth::user())
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
                                    @endif
                                    <input type="hidden" name="cloth_id" value="{{ $cloth->id}} ">
                                    <button><i class="pe-7s-like"></i> </button>
                                </form> -->
                                <a href="{{ route('user.message.tailor', ['tailor_id' => $cloth->tailor->id ]) }} "><i class="fa fa-comments" aria-hidden="true"></i></a>
                                
                            </div>
                            {{-- <div class="pro-details-compare-wishlist pro-details-compare">
                                <a href="compare.html"><i class="pe-7s-refresh-2"></i></a>
                            </div> --}}
                        </div>
                        <div class="pro-details-sku-info pro-details-same-style  d-flex">
                            <span>Designer:  </span>
                            <ul class="d-flex">
                                <li>
                                    <a href="#">{{ $cloth->tailor->brand_name}}</a>
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
                                    <a href="#">Reviews</a>
                                </li> --}}
                            </ul>
                        </div>
                        <div class="pro-details-categories-info pro-details-same-style d-flex">
                            <span>Ratings: </span>
                            <ul class="d-flex">
                                <li>
                                   
                                        @php $ratenum = number_format($rating_value) @endphp
                                    @for($i =1; $i<= $ratenum; $i++)
                                                    <i class="fa fa-star checked"></i>
                                                    @endfor
                                                    @for($j = $ratenum+1; $j <= 5; $j++)
                                                    <i class="fa fa-star"></i>
                                                    @endfor
                                                    
                                                 
                              
                                </li>
                                {{-- <li>
                                    <a href="#">Reviews</a>
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
                    <a data-bs-toggle="tab" href="#des-details3">Reviews ({{ $comment->count() }})</a>
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
                                    <p><strong> Ratings and Reviews</strong></p>
                                    @php $ratenum = number_format($rating_value) @endphp
                                    @for($i =1; $i<= $ratenum; $i++)
                                                    <i class="fa fa-star checked"></i>
                                                    @endfor
                                                    @for($j = $ratenum+1; $j <= 5; $j++)
                                                    <i class="fa fa-star"></i>
                                                    @endfor
                                                    <span>{{$comment->count() }} Ratings </span>
                                                    <hr>
                                    @forelse ($comment as $key => $item)
                                    <div class="single-review">
                                        
                                        <div class="review-content">
                                            <div class="review-top-wrap">
                                                <div class="review-left">
                                                    <div class="review-name">
                                                        
                                                    </div>
                                                   
                                                </div>
                                                
                                            </div>
                                            @php $ratenum = number_format($item->stars_rated) @endphp
                                            <div class="review-bottom">
                                                @for($i =1; $i<= $ratenum; $i++)
                                                    <i class="fa fa-star checked"></i>
                                                    @endfor
                                                    @for($j = $ratenum+1; $j <= 5; $j++)
                                                    <i class="fa fa-star"></i>
                                                    @endfor

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
                                        <p>No Review!</p>
                                    @endforelse
                                </div>
                            </div>
                            
                            <div class="col-lg-5">
                                <div class="ratting-form-wrapper pl-50">
                                    <h3>Add a Review</h3>

                                    <div class="ratting-form">
                                        <form method="POST" action="{{ route('user.store.comment') }}" class="form-horizontal">
                                        @csrf
                                        <div class="star-box">
                                            <span>Your rating:</span>
                                            <div class="rating-css">
                                                <div class="star-icon">
                                                    <input type="radio" value="1" name="stars_rated" checked id="rating1">
                                                    <label for="rating1" class="fa fa-star"></label>
                                                    <input type="radio" value="2" name="stars_rated" id="rating2">
                                                    <label for="rating2" class="fa fa-star"></label>
                                                    <input type="radio" value="3" name="stars_rated" id="rating3">
                                                    <label for="rating3" class="fa fa-star"></label>
                                                    <input type="radio" value="4" name="stars_rated" id="rating4">
                                                    <label for="rating4" class="fa fa-star"></label>
                                                    <input type="radio" value="5" name="stars_rated" id="rating5">
                                                    <label for="rating5" class="fa fa-star"></label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="rating-form-style">
                                                        <input placeholder="Name" name="name" type="text" required/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="rating-form-style">
                                                        <input placeholder="Email" name="email" type="email" required />
                                                    </div>
                                                </div>
                                                <input type="hidden" name="cloth_id" value="{{ $cloth->id}}">
                                                <div class="col-md-12">
                                                    <div class="rating-form-style form-submit">
                                                        <textarea name="comment" placeholder="Message" required></textarea>
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
