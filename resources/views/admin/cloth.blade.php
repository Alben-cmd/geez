@extends ('layouts.master')
@section('title', '| dashboard')
@section('content')
    
    <!-- breadcrumb-area end -->

    <!-- account area start -->
    <div class="account-dashboard pt-100px pb-100px">
        <div class="container">
            <div class="row">

                {{-- dashboard section begins  --}}
               @include('partials.admin_dashboard')
               {{-- Dashboard section ends --}}

                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
                        <!-- dashboard  -->
                        {{-- error and success messages --}}
                        @include('partials.messaging')
                        <div class="tab-pane fade show active" id="dashboard">
                            <h4>My Cloths </h4>
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
                                                                <a href="{{ route('admin.cloth.edit', ['id' => $item['id'] ]) }} " class="btn btn-outline-dark ">Edit </a>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <a href="{{ route('admin.cloth.delete', ['id' => $item['id']]) }}" class="btn btn-outline-dark ">Delete</a>
                                                            </div>
                                                        </div>
                                                        <a href="#" class="image">
                                                            <img src="{{ asset('/assets/images/clothes/'.$item['image'] ) }}">
                                                                
                                                            <img class="hover-image"
                                                                src="{{ asset('/assets/images/clothes/'.$item['image'] ) }}" alt="Product" />
                                                        </a>

                                                    </div>
                                                    <div class="content">
                                                        
                                                        <h5 class="title">{{ $item->presentPrice()}}
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">{{ $item['details'] }}</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            @empty
                                            <div class="container">
                                                <div class="row justify-content-center align-item-center">
                                                    <div class="text-center"><img src="{{ asset('assets/images/icons/cloth.jpg') }} " width="130" height="">
                                                        <h3><strong>You do not have any cloth yet.</strong></h3>
                                                        <h4> Click the button bellow to add a cloth</h4>
                                                        <div class="save_button mt-3" align="center">
                                                            <a href="{{ route('admin.add_cloth') }} "><button class="btn" type="submit">Designers</button></a>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
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
