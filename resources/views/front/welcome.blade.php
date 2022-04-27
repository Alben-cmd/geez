@extends ('layouts.master')
@section('title', '| Home')
@section('content')

   <div class="section ">
        <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1">
            <!-- Hero slider Active -->
            <div class="swiper-wrapper">
                <!-- Single slider item -->
                <div class="hero-slide-item-2 slider-height swiper-slide d-flex bg-color1">
                    <div class="container align-self-center">
                        {{-- error and success messages --}}
                        <div class="row">
                            <div class="col-xl-6 col-lg-5 col-md-5 col-sm-5 align-self-center sm-center-view">
                                <div class="hero-slide-content hero-slide-content-2 slider-animated-1">
                                    {{-- <span class="category">Sale 45% Off</span> --}}
                                    <h2 class="title-1">Exclusive New<br> Designs</h2>
                                    <a href="{{ route('clothes') }} " class="btn btn-lg btn-primary btn-hover-dark"> Shop
                                        Now <i class="fa fa-shopping-basket ml-15px" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div
                                class="col-xl-6 col-lg-7 col-md-7 col-sm-7 d-flex justify-content-center position-relative">
                                <div class="show-case">
                                    <div class="hero-slide-image">
                                        <img src="{!! asset('assets/images/slider-image/slider2.jpg') !!}" alt="" style="border-radius: 10px;" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single slider item -->
                 <div class="hero-slide-item-2 slider-height swiper-slide d-flex bg-color1">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-xl-6 col-lg-5 col-md-5 col-sm-5 align-self-center sm-center-view">
                                <div class="hero-slide-content hero-slide-content-2 slider-animated-1">
                                    <span class="category"></span>
                                    <h2 class="title-1">Meet Designers Fast,<br> get that dream wears</h2>
                                    <a href="{{ route('tailors') }} " class="btn btn-lg btn-primary btn-hover-dark"> visit
                                        Now <i class="fa fa-shopping-basket ml-15px" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div
                                class="col-xl-6 col-lg-7 col-md-7 col-sm-7 d-flex justify-content-center position-relative">
                                <div class="show-case">
                                    <div class="hero-slide-image">
                                        <img src="{!! asset('assets/images/product-image/slide_1.jpg') !!}" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
                
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
                        <h2 class="title">Desinges</h2>
                        <hr>
                        <br>
                        <br>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>
            @include('partials.messaging')
            <div class="row">
                <div class="col">
                    <div class="tab-content mb-30px0px">
                        <!-- 1st tab start -->
                        <div class="tab-pane fade show active" id="tab-product--all">
                            <div class="row">
                                {{-- begining of single cloth  --}}
                                @forelse ($clothes as $key => $item)
                                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
           
                                    data-aos-delay="200">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="{{ route('cloth.show', ['slug' => $item['slug']  ]) }}" class="image">
                                                <img src="{{ asset('/assets/images/clothes/' .$item['image']) }}" alt="Product" />
                                                <img class="hover-image" src="{{ asset('/assets/images/clothes/' .$item['image']) }}"
                                                    alt="Product" />
                                            </a>
                                            <span class="badges">
                                                {{-- <span class="new">New</span> --}}
                                            </span>
                                            <div class="actions">
                                                <div class="action wishlist">
                                                <form action="{{ route('user.add.wishlist') }}" method="POST">
                                                    @csrf
                                                    @if(Auth::user())
                                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
                                                    @endif
                                                    <input type="hidden" name="cloth_id" value="{{ $item->id}} ">
                                                    <button><i class="pe-7s-like"></i> </button>
                                                </form>
                                            </div>
                                               {{--  <a href="#" class="action wishlist" title="Wishlist"><i class="pe-7s-like"></i>
                                                </a> --}}
                                                @if(Auth::user())
                                                @if(Auth::user()->role_id == 3)
                                                @if($item['trending'] == '0')
                                                <a href="{{ route('admin.enable.trending', ['id' => $item->id]) }}" class="action wishlist"
                                                title="Not Trending"><i class="pe-7s-cloud-download"></i></a>
                                                @elseif($item['trending'] == '1')
                                                <a href="{{ route('admin.disable.trending', ['id' => $item->id]) }}" class="action wishlist"
                                                title="Trending"><i class="pe-7s-cloud-upload"></i></a>
                                                @endif
                                                @endif
                                                @endif
                                            </div>
                                            <div class="pro-details-cart">
                                                {{-- <button class="add-cart" href=""> Add To Cart</button> --}}
                                                <form action="{{ route('cart.store') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $item->id}} ">
                                                    <input type="hidden" name="name" value="{{ $item->name}} ">
                                                    <input type="hidden" name="price" value="{{ $item->price}} ">
                                                    <button  class="add-to-cart"> Add To Cart</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="{{ route('cloth.show', ['slug' => $item['slug']  ]) }}">{{ $item->name }}</a></h5>
                                            <h5 class="title"><a href="#">Designer:{{ $item->tailor->brand_name }}
                                                </a>
                                            </h5>
                                            <span class="price">
                                                <span class="new">{{ $item->presentPrice()}}</span>
                                                
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <tr>
                                    <td><font color="#fb5d5d">No Design Found! </td>
                                </tr>
                                @endforelse
                                {{-- ending of single cloth --}}
                              
                               
                            </div>
                        </div>
                        <!-- 1st tab end -->
                        </div>
                    <a href="{{ route('clothes') }} " class="btn btn-lg btn-primary btn-hover-dark m-auto"> View More <i
                            class="fa fa-arrow-right ml-15px" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
    {{-- Clothes area ends --}}

    {{-- Designer area starts  --}}

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
                                            <a href="{{ route('tailor.show', ['id' => $item->id ]) }}" class="image">
                                                <img src="{{ asset('/assets/images/tailors/' .$item['picture']) }}" alt="Product" />
                                                <img class="hover-image" src="{{ asset('/assets/images/tailors/' .$item['picture']) }}"
                                                    alt="Product" />
                                            </a>
                                            {{-- <span class="badges">
                                                <span class="new">New</span>
                                            </span> --}}
                                            <div class="actions">
                                                
                                               {{--  <a href="{{ route('tailor.show', ['id' => $key ]) }}" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a> --}}
                                                
                                            </div>
                                            <div class=" pro-details-cart">
                                                <form action="{{ route('user.add.subscribe') }}" method="POST">
                                                    @csrf
                                                    @if(Auth::user())
                                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
                                                    @endif
                                                    <input type="hidden" name="tailor_id" value="{{ $item->id}} ">
                                                    <button class="add-to-cart">Subscribe </button>
                                                </form>
                                            </div>
                                            {{-- <a href="#"><button title="Add To Cart" class=" add-to-cart">Subscribe</button></a>  --}}
                                        </div>
                                        <div class="content">
                                           
                                           <h5>{{ $item['fname'] }} {{ $item['lname'] }}</h5>
                                            <h5 class="title">Location:{{ $item['location'] }}
                                                
                                            </h5>
                                            <span class="price">
                                                <span class="new">Email: {{ $item['email'] }} </span>
                                            </span>
                                            
                                        </div>
                                    </div>
                                </div>
                               @empty
                                <tr>
                                    <td><font color="#fb5d5d">No Designer Found!</font> </td>
                                </tr>
                                @endforelse
                              
                            </div>
                        </div>
                        
                        <!-- 1st tab end -->
                       
                        
                       
                    </div>
                    <a href="{{ route('tailors') }} " class="btn btn-lg btn-primary btn-hover-dark m-auto"> View More <i
                            class="fa fa-arrow-right ml-15px" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>

    {{-- Designer area ends  --}}


</main><!-- End #main -->
  @endsection