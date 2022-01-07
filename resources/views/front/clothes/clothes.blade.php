@extends ('layouts.master')
@section('title', '| clothes')
@section('content')

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb-title">Clothes</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{ route('home') }} ">Home</a></li>
                        <li class="breadcrumb-item active">Clothes</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumb-area end -->

    <!-- Shop Page Start  -->
    <div class="shop-category-area pt-100px pb-100px">
        <div class="container">
        {{-- error and success messages --}}
        @include('partials.messaging')

            <div class="row">
                <div class="col-12">
                    <!-- Shop Top Area Start -->
                    <div class="shop-top-bar d-flex">
                        <!-- Left Side start -->
                        <div class="select-shoing-wrap d-flex align-items-center">
                            <div class="shot-product">
                                <p>Sort By: &nbsp</p>
                            </div>
                            <div class="shop-select">
                                {{-- <ul>
                                    <li><a href="">All</a></li>
                                    @forelse ($categories as $category)
                                        <li><a href="{{ route('clothes', ['category' => $category->slug ]) }} ">{{ $category->name }}</a>  </li>
                                    @empty
                                        <tr>
                                           No Record Found
                                        </tr>
                                    @endforelse
                                
                                </ul> --}}

                                <div class="col align-self-center d-none d-lg-block">
                        <div class="main-menu">
                            <ul>
                                <li class="dropdown "><a href="#"> Preference <i class="pe-7s-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('clothes') }}">All</a></li>
                                        @forelse ($categories as $category)
                                        <li><a href="{{ route('clothes', ['category' => $category->slug ]) }}">{{ $category->name }}</a></li>
                                   
                                    @empty
                                        <tr>
                                           No Record Found
                                        </tr>
                                    @endforelse
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                                {{-- <select class="shop-sort">
                                    <option data-display="Relevance">Relevance</option>
                                    @forelse ($categories as $category)
                                        <a href="#"><option value="1"> {{ $category->name }} </option></a>
                                    @empty
                                        <tr>
                                           No Record Found
                                        </tr>
                                    @endforelse
                                </select> --}}

                            </div>

                            
                            
                        </div>
                        <div><p><h3> <strong>{{ $Category_name }} Clothes</strong> </h3> </p></div>
                        <!-- Left Side End -->
                        <div class="shop-tab nav">
                            .
                        </div>
                        <!-- Right Side Start -->
                        
                        <!-- Right Side End -->
                    </div>
                    <!-- Shop Top Area End -->
                                    
                    <div class="shop-bottom-area">

                        <!-- Tab Content Area Start -->
                        <div class="row">
                            <div class="col">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="shop-grid">
                                        <div class="row mb-n-30px">
                                            @forelse ($clothes as $key => $item)
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="200">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="{{ route('cloth.show', ['slug' => $item['slug']  ]) }}" class="image">
                                                            <img src="{{ asset('/assets/images/clothes/' .$item['image']) }}"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ asset('/assets/images/clothes/' .$item['image']) }}" alt="Product" />
                                                        </a>
                                                        <div class="actions">
                                                            {{-- <a href="wishlist.html" class="action"
                                                                title="Wishlist"><i class="pe-7s-like"></i></a> --}}
                                                                <div class="action">
                                                                <form action="{{ route('user.add.wishlist') }}" method="POST">
                                                                    @csrf
                                                                    @if(Auth::user())
                                                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
                                                                    @endif
                                                                    <input type="hidden" name="cloth_id" value="{{ $item->id}} ">
                                                                    <button><i class="pe-7s-like"></i> </button>
                                                                </form>
                                                            </div>
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
                                                       
                                                        <form action="{{ route('cart.store') }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{ $item->id}} ">
                                                            <input type="hidden" name="name" value="{{ $item->name}} ">
                                                            <input type="hidden" name="price" value= "{{ $item->price}} ">
                                                            <button  title="Add To Cart" class=" add-to-cart"> Add To Cart</button>
                                                        </form>
                                                    </div>
                                                    <div class="content">
                                                        
                                                        <h5 class="title"><a href="{{ route('cloth.show', ['slug' => $item['slug']  ]) }}">{{ $item['name'] }}
                                                            </a>
                                                        </h5>
                                                        <h5 class="title"><a href="{{ route('cloth.show', ['slug' => $item['slug']  ]) }}"><strong>Brand: </strong> {{ $item['brand_name'] }}
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
                                                <td colspan="7">No Cloth Found </td>
                                            </tr>
                                            @endforelse
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- Tab Content Area End -->

                        <!--  Pagination Area Start -->
                       
                    </div>
                    <!-- Shop Bottom Area End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Page End  -->   
@endsection