<div class="related-product-area pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center mb-30px0px line-height-1">
                        <h2 class="title m-0">You might Also Like</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="tab-content mb-30px0px">
                        <!-- 1st tab start -->
                        <div class="tab-pane fade show active" id="tab-product--all">
                            <div class="row">
                                {{-- begining of single cloth  --}}
                                @forelse ($alsoLike as $key => $item)
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
                                                {{-- <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="pe-7s-like"></i></a> --}}
                                                <a href="{{ route('cloth.show', ['slug' => $item['slug']  ]) }}" class="action quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                               {{--  <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="pe-7s-refresh-2"></i></a> --}}
                                            </div>
                                           <a href="#"><button title="Add To Cart" class=" add-to-cart">{{ $item['name'] }}</button></a> 
                                        </div>
                                        <div class="content">
                                            
                                            <h5 class="title"><a href="#">Contact Designer:{{ $item['category'] }}
                                                </a>
                                            </h5>
                                            <span class="price">
                                                <span class="new">₦{{ $item['price'] }}</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <tr>
                                    <td colspan="7">No Record Found </td>
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