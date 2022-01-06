<div class="tab-pane fade" id="cloths">
    <h4>My Cloths</h4>
    {{-- error and success messages --}}
    {{-- @include('partials.messaging') --}}
    <div class="row">
    <div class="col">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="shop-grid">
                <div class="row mb-n-30px">
                    @forelse ($my_clothes as $key => $item)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                        data-aos-delay="200">
                        <!-- Single Prodect -->
                        <div class="product">
                            <div class="thumb">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="{{ route('tailor.cloth.edit', ['id' => $item['id'] ]) }} " class="btn btn-outline-dark ">Edit </a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{ route('tailor.cloth.delete', ['id' => $item['id']]) }}" class="btn btn-outline-dark ">Delete</a>
                                    </div>
                                </div>
                                <a href="#" class="image">
                                    <img src="{{ asset('/assets/images/clothes/'.$item['image'] ) }}">
                                        
                                    <img class="hover-image"
                                        src="{{ asset('/assets/images/clothes/'.$item['image'] ) }}" alt="Product" />
                                </a>

                            </div>
                            <div class="content">
                                
                                <h5 class="title">₦{{ $item['price'] }}
                                </h5>
                                <span class="price">
                                    <span class="new">{{ $item->presentPrice()}}</span>
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
</div>