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
                        <h2 class="title">Clothes</h2>

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
                                                        
                                                        
                                                        <a href="{{ route('cloth.show', ['slug' => $item['slug']  ]) }}"><button title="Add To Cart" class=" add-to-cart">{{ $item['name'] }} </button></a> 
                                                    </div>
                                                    <div class="content">
                                                        
                                                        <h5 class="title"><a href="{{ route('cloth.show', ['slug' => $item['slug']  ]) }}">Brand: {{ $item['brand_name'] }}
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">Price: {{ $item['price'] }}</span>

                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            @empty
                                            <tr>
                                                <td colspan="7">No Record Found </td>
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