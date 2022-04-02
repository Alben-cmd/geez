@extends ('layouts.master')
@section('title', '| tailors')
@section('content')

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb-title">Designers</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{ route('home') }} ">Home</a></li>
                        <li class="breadcrumb-item active">Designers</li>
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
                    <div class="shop-bottom-area">

                        <!-- Tab Content Area Start -->
                        <div class="row">
                            <div class="col">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="shop-grid">
                                        <div class="row mb-n-30px">
                                            
                                            @forelse ($tailors as $key => $item)
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="200">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="{{ route('tailor.show', ['id' => $item['id'] ]) }}" class="image">
                                                            <img src="{{ asset('/assets/images/tailors/' .$item['picture']) }}"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ asset('/assets/images/tailors/' .$item['picture']) }}" alt="Product" />
                                                        </a>
                                                        
                                                        <form action="{{ route('user.add.subscribe') }}" method="POST">
                                                            @csrf
                                                            @if(Auth::user())
                                                            <input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
                                                            @endif
                                                            <input type="hidden" name="tailor_id" value="{{ $item->id}} ">
                                                            <button class="add-to-cart">Subscribe </button>
                                                        </form>
                                                        
                                                    </div>
                                                    <div class="content">
                                                        
                                                        <h5 class="title"><a href="single-product.html">{{ $item['fname'] }} {{ $item['lname'] }}
                                                            </a>
                                                        </h5>
                                                        <h5 class="title"><a href="single-product.html">Location:{{ $item['location'] }}
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">Email: {{ $item['email'] }}</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            @empty
                                            <font color="#fb5d5d">No Designer(s) Found! </font></td>

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