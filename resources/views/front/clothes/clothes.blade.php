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
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-left mb-0">
                        <h2 class="title">Mens Tops</h2>

                        <!-- Tab Start -->
                        
                        <!-- Tab End -->
                    </div>
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

                                            @if($jacket_array > 0)
                                            @foreach ($jacket_array as $key => $item)
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="200">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="{{ route('cloth.show', ['id' => $key, 'reference' => $item['address'] ]) }}" class="image">
                                                            <img src="{{ $item['designimage'] }}"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ $item['designimage'] }}" alt="Product" />
                                                        </a>
                                                        
                                                        
                                                        <button title="Add To Cart" class=" add-to-cart">Add
                                                            To Cart</button>
                                                    </div>
                                                    <div class="content">
                                                        
                                                        <h5 class="title"><a href="{{ route('cloth.show', ['id' => $key]) }}">{{ $item['designname'] }}
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">₦{{ $item['prize'] }}</span>
                                                        </span>
                                                        <p>
                                                            {{ $item['tailornumber'] }}
                                                        </p>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                          
                                            @endforeach
                                            @endif
                                            @if($shirt_array > 0)
                                            @forelse ($shirt_array as $key => $item)
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="200">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="{{ $item['designimage'] }}"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ $item['designimage'] }}" alt="Product" />
                                                        </a>
                                                        
                                                        
                                                        <button title="Add To Cart" class=" add-to-cart">Add
                                                            To Cart</button>
                                                    </div>
                                                    <div class="content">
                                                        
                                                        <h5 class="title"><a href="single-product.html">Women's
                                                                Elizabeth Coat
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">₦{{ $item['prize'] }}</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            @endif
                                            @if($sweater_array > 0)
                                            @foreach ($sweater_array as $key => $item)
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="200">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="{{ $item['designimage'] }}"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ $item['designimage'] }}" alt="Product" />
                                                        </a>
                                                        
                                                        
                                                        <button title="Add To Cart" class=" add-to-cart">Add
                                                            To Cart</button>
                                                    </div>
                                                    <div class="content">
                                                        
                                                        <h5 class="title"><a href="single-product.html">Women's
                                                                Elizabeth Coat
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">₦{{ $item['prize'] }}</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                           @endforeach
                                            @endif
                                            @if($ashebi_array > 0)
                                            @foreach ($ashebi_array as $key => $item)
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="200">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="{{ $item['designimage'] }}"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ $item['designimage'] }}" alt="Product" />
                                                        </a>
                                                        
                                                        
                                                        <button title="Add To Cart" class=" add-to-cart">Add
                                                            To Cart</button>
                                                    </div>
                                                    <div class="content">
                                                        
                                                        <h5 class="title"><a href="single-product.html">Women's
                                                                Elizabeth Coat
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">₦{{ $item['prize'] }}</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                           @endforeach
                                            @endif
                                            @if($native_array > 0 )
                                            @foreach ($native_array as $key => $item)
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="200">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="{{ $item['designimage'] }}"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ $item['designimage'] }}" alt="Product" />
                                                        </a>
                                                        
                                                        
                                                        <button title="Add To Cart" class=" add-to-cart">Add
                                                            To Cart</button>
                                                    </div>
                                                    <div class="content">
                                                        
                                                        <h5 class="title"><a href="single-product.html">Women's
                                                                Elizabeth Coat
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">₦{{ $item['prize'] }}</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                           @endforeach
                                            @endif
                                            @if($sleeve_array > 0)
                                            @foreach ($sleeve_array as $key => $item)
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="200">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="{{ $item['designimage'] }}"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ $item['designimage'] }}" alt="Product" />
                                                        </a>
                                                        
                                                        
                                                        <button title="Add To Cart" class=" add-to-cart">Add
                                                            To Cart</button>
                                                    </div>
                                                    <div class="content">
                                                        
                                                        <h5 class="title"><a href="single-product.html">Women's
                                                                Elizabeth Coat
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">₦{{ $item['prize'] }}</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                          @endforeach
                                            @endif
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
                <div class="col-12">
                    <div class="section-title text-left mb-0">
                        <br>
                        <h2 class="title">Men Bottoms</h2>

                        <!-- Tab Start -->
                        
                        <!-- Tab End -->
                    </div>
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

                                            @if($type1_array > 0)
                                            @foreach ($type1_array as $key => $item)
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="200">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/1.jpg"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="assets/images/product-image/1.jpg" alt="Product" />
                                                        </a>
                                                        
                                                        
                                                        <button title="Add To Cart" class=" add-to-cart">Add
                                                            To Cart</button>
                                                    </div>
                                                    <div class="content">
                                                        
                                                        <h5 class="title"><a href="single-product.html">Women's
                                                                Elizabeth Coat
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">₦{{ $item['prize'] }}</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                          
                                            @endforeach
                                            @endif
                                            @if($type2_array > 0)
                                            @forelse ($type2_array as $key => $item)
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="200">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/1.jpg"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="assets/images/product-image/1.jpg" alt="Product" />
                                                        </a>
                                                        
                                                        
                                                        <button title="Add To Cart" class=" add-to-cart">Add
                                                            To Cart</button>
                                                    </div>
                                                    <div class="content">
                                                        
                                                        <h5 class="title"><a href="single-product.html">Women's
                                                                Elizabeth Coat
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">₦{{ $item['prize'] }}</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            @endif
                                            @if($type3_array > 0)
                                            @foreach ($type3_array as $key => $item)
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="200">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/1.jpg"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="assets/images/product-image/1.jpg" alt="Product" />
                                                        </a>
                                                        
                                                        
                                                        <button title="Add To Cart" class=" add-to-cart">Add
                                                            To Cart</button>
                                                    </div>
                                                    <div class="content">
                                                        
                                                        <h5 class="title"><a href="single-product.html">Women's
                                                                Elizabeth Coat
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">₦{{ $item['prize'] }}</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                           @endforeach
                                            @endif
                                            @if($type4_array > 0)
                                            @foreach ($type4_array as $key => $item)
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="200">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/1.jpg"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="assets/images/product-image/1.jpg" alt="Product" />
                                                        </a>
                                                        
                                                        
                                                        <button title="Add To Cart" class=" add-to-cart">Add
                                                            To Cart</button>
                                                    </div>
                                                    <div class="content">
                                                        
                                                        <h5 class="title"><a href="single-product.html">Women's
                                                                Elizabeth Coat
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">₦{{ $item['prize'] }}</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                           @endforeach
                                            @endif
                                            @if($type5_array > 0 )
                                            @foreach ($type5_array as $key => $item)
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="200">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/1.jpg"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="assets/images/product-image/1.jpg" alt="Product" />
                                                        </a>
                                                        
                                                        
                                                        <button title="Add To Cart" class=" add-to-cart">Add
                                                            To Cart</button>
                                                    </div>
                                                    <div class="content">
                                                        
                                                        <h5 class="title"><a href="single-product.html">Women's
                                                                Elizabeth Coat
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">₦{{ $item['prize'] }}</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                           @endforeach
                                            @endif
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