@extends ('layouts.master')
@section('title', '| Designer')
@section('content')

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb-title">Designer</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{route('home') }} ">Home</a></li>
                        <li class="breadcrumb-item "><a href="{{ route('tailors') }}"></a> Designer</li>
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

                    <div class="d-flex justify-content-between">
                    @forelse ($clothes as $key => $item)
                    <div class="swiper-container zoom-thumbs mt-2 mb-3">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="{{ route('cloth.show', ['slug' => $item['slug']  ]) }}"><img class="img-responsive m-auto" src="{{ asset('/assets/images/clothes/'.$item['image'] ) }}"
                                    alt=""></a>
                                    {{ $item->presentPrice()}}
                            </div>
                            
                        </div>
                    </div>
                    @empty
                    <tr>
                        <td colspan="7">No Clothes posted </td>
                    </tr>
                    @endforelse
                </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="product-details-content quickview-content">
                        
                        <div class="pricing-meta">
                            <ul>
                                <li class="old-price not-cut">{{ $tailor['address'] }}</li>
                            </ul>
                        </div>
                        
                       <h2>{{ $tailor->fname }} {{ $tailor->lname }}</h2>
                        <div class="pro-details-quality">
                            
                            <div class="pro-details-cart">
                                <form action="{{ route('user.add.subscribe') }}" method="POST">
                                    @csrf
                                    @if(Auth::user())
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
                                    @endif
                                    <input type="hidden" name="tailor_id" value="{{ $tailor->id}} ">
                                    <button class="add-cart">Subscribe </button>
                                </form>
                                
                            </div>
                            {{-- <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                <a href="wishlist.html"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="pro-details-compare-wishlist pro-details-compare">
                                <a href="compare.html"><i class="pe-7s-refresh-2"></i></a>
                            </div> --}}
                        </div>
                         <div class="pro-details-social-info pro-details-same-style d-flex">
                            <span>Brand Name: </span>{{ $tailor['brand_name'] }}
                           
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