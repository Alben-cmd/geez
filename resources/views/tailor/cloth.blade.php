@extends ('layouts.master')
@section('title', '| dashboard')
@section('content')
    
    <!-- breadcrumb-area end -->

    <!-- account area start -->
    <div class="account-dashboard pt-100px pb-100px">
        <div class="container">
            <div class="row">
                @include('partials.tailor_dashboard')
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
                        <!-- dashboard  -->
                        {{-- error and success messages --}}
                        @include('partials.messaging')
                            <h4>My Cloths</h4>
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
                                                    <a href="{{ route('cloth.show', ['slug' => $item['slug']  ]) }}" class="image">
                                                        <img src="{{ asset('/assets/images/clothes/'.$item['image'] ) }}">
                                                            
                                                        <img class="hover-image"
                                                            src="{{ asset('/assets/images/clothes/'.$item['image'] ) }}" alt="Product" />
                                                    </a>

                                                </div>
                                                <div class="content">
                                                    
                                                    <h5 class="title">{{ $item['name'] }}</h5>
                                                    <span class="price">
                                                        <span class="new">{{ $item->presentPrice()}}</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                        <tr>
                                            <td><font color="#fb5d5d">No Record Found</font> </td>
                                        </tr>
                                        @endforelse
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
    @endsection