<div class="tab-pane fade" id="cloths">
    <h4>My Saved Cloths</h4>
    <div class="row">
        <div class="col">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="shop-grid">
                    <div class="row mb-n-30px">
                        @forelse ($wishlist as $key => $item)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                            data-aos-delay="200">
                            <!-- Single Prodect -->
                            <div class="product">
                                <div class="thumb">
                                    <a href="{{ route('cloth.show', ['slug' => $item->cloth->slug ]) }}" class="image">
                                        <img src="{{ asset('/assets/images/clothes/' .$item->cloth->image) }}"
                                            alt="Product" />
                                        <img class="hover-image"
                                            src="{{ asset('/assets/images/clothes/' .$item->cloth->image) }}" alt="Product" />
                                    </a>

                                </div>
                                <div class="content">
                                    
                                    <h5 class="title"><a href="{{ route('cloth.show', ['slug' => $item->cloth->slug ]) }}">{{$item->cloth->name}}
                                        </a>
                                    </h5>
                                    <span class="price">
                                        <span class="new">{{ $item->cloth->presentPrice()}}</span>
                                    </span>
                                    <div class="save_button">
                                        <a href="{{ route('user.delete.wishlist', ['id' => $item['id']]) }}"> <button class="btn" type="submit">Remove</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                            <h3> <font color="#fb5d5d">No Saved Clothes!</font></h3>
                        @endforelse
                       
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>