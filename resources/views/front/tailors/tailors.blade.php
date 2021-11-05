@extends ('layouts.master')
@section('title', '| tailors')
@section('content')

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb-title">Tailors</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{ route('home') }} ">Home</a></li>
                        <li class="breadcrumb-item active">Tailors</li>
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
            <div class="row">
                <div class="col-12">
                    <!-- Shop Top Area Start -->
                    
                    <!-- Shop Top Area End -->

                    <!-- Shop Bottom Area Start -->
                    <div class="shop-bottom-area">

                        <!-- Tab Content Area Start -->
                        <div class="row">
                            <div class="col">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="shop-grid">
                                        <div class="row mb-n-30px">
                                            @if(Session::has('status'))
                                                <div class="alert alert-primary">
                                                    {{ Session::get('status') }}
                                                </div>
                                            @endif
                                            @foreach ($tailors as $key => $item)
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="200">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="{{ route('tailor.show', ['id' => $item['id'] ]) }}" class="image">
                                                            <img src="assets/images/product-image/1.jpg"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ $item['profilepicture'] }}" alt="Product" />
                                                        </a>
                                                        
                                                        
                                                        <button title="Add To Cart" class=" add-to-cart">{{ $item['name'] }}</button>
                                                    </div>
                                                    <div class="content">
                                                        
                                                        <h5 class="title"><a href="single-product.html">Location:{{ $item['address'] }}
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">Email: {{ $item['email'] }}</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        
                                           
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