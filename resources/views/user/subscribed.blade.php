<div class="tab-pane fade" id="tailor">
    <h4>My Tailors</h4>
    <div class="row">
        <div class="col">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="shop-grid">
                    <div class="row mb-n-30px">
                        @forelse ($subscribe as $key => $item)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                            data-aos-delay="200">
                            <!-- Single Prodect -->
                            <div class="product">
                                <div class="thumb">
                                    <a href="{{ route('tailor.show', ['id' => $item->tailor->id ]) }}" class="image">
                                        <img src="{{ asset('/assets/images/tailors/'.$item->tailor->picture) }}"
                                            alt="Product" />
                                        <img class="hover-image"
                                            src="{{ asset('/assets/images/tailors/'.$item->tailor->picture) }}" alt="Product" />
                                    </a>
                                    
                                    
                                     
                                </div>
                                <div class="content">
                                    
                                    <h5 class="title"><a href="{{ route('tailor.show', ['id' => $item->tailor->id ]) }}">
                                        {{ $item->tailor->fname }} {{ $item->tailor->lname }}

                                        </a>
                                    </h5>
                                    <span class="price">
                                        <span class="new">{{ $item->tailor->location }}</span>
                                        <span class="new">{{ $item->tailor->email }}</span>
                                       
                                    </span>

                                    <div class="save_button">
                                        <a href="{{ route('user.delete.subscribe', ['id' => $item['id']]) }}"> <button class="btn" type="submit">Remove</button></a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        @empty
                        <tr>
                            <td><font color="#fb5d5d">No Tailor Subscribed To! </font></td>
                        </tr>
                        @endforelse
                                                                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>