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
                                    
                                    <h5 class="title"><span><a href="{{ route('tailor.show', ['id' => $item->tailor->id ]) }}">
                                        {{ $item->tailor->fname }} {{ $item->tailor->lname }}

                                        </a></span>&nbsp; <a href="#" wire:click.prevent="startConversation({{ $item->tailor->id }})"><i class="fa fa-comments" aria-hidden="true"></i></a>
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
                        <div class="container">
                            <div class="row justify-content-center align-item-center">
                                <div class="text-center"><img src="{{ asset('assets/images/icons/tailor.jpg') }} " width="130" height="">
                                    <h3><strong>You do not have any message.</strong></h3>
                                    
                                </div>
                            </div>
                        </div>
                        @endforelse
                                                                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>