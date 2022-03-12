@extends ('layouts.master')
@section('title', '| clothes')
@section('content')
    
    <!-- breadcrumb-area end -->

    <!-- account area start -->
    <div class="account-dashboard pt-100px pb-100px">
        <div class="container">
            <div class="row">
               {{-- Dashboard section ends --}}
               @include('partials.admin_dashboard')
                <div class="col-sm-12 col-md-9 col-lg-9">
                   {{-- error and success messages --}}
                        @include('partials.messaging')
                   <div class="row">
                     <h4>{{$tailor_data->fname}} {{$tailor_data->lname}}</h4>
                       <div class="col-md-5">
                            <a href="#" class="image">
                                <img src="{{ asset('/assets/images/tailors/'.$tailor_data->picture ) }}">
                            </a>
                       </div>
                       <div class="col-md-7">
                        <br>
                           
                            <address>
                                <span class="mb-1 d-inline-block"><strong>Brand Name:</strong> {{$tailor_data->brand_name}}</span>
                                <br>
                                <span class="mb-1 d-inline-block"><strong>Email:</strong> {{$tailor_data->email}}</span>,
                                <br>
                                <span class="mb-1 d-inline-block"><strong>Location:</strong> {{$tailor_data->location}}</span>
                                <br>
                                <span class="mb-1 d-inline-block"><strong>Phone Numbers:</strong> {{$tailor_data->phone_1}} | {{$tailor_data->phone_2}}</span>,
                                
                            </address>
                       </div>
                   </div>
                   <br>
                   <hr>
                   <div class="row">
                            <div class="col">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="shop-grid">
                                        <div class="row mb-n-30px">
                   @forelse ($cloths as $key => $item)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                        data-aos-delay="200">
                        <!-- Single Prodect -->
                        <div class="product">
                            <div class="thumb">
                               
                                <a href="{{ route('cloth.show', ['slug' => $item['slug']  ]) }}" class="image">
                                    <img src="{{ asset('/assets/images/clothes/'.$item['image'] ) }}">
                                        
                                    <img class="hover-image"
                                        src="{{ asset('/assets/images/clothes/'.$item['image'] ) }}" alt="Product" />
                                </a>

                            </div>
                            <div class="content">
                                
                                <h5 class="title">{{ $item->presentPrice() }}
                                </h5>
                                <span class="price">
                                    <span class="new">{{ $item['details'] }}</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    @empty
                    <tr>
                        <td><font color="#fb5d5d">No Clothe(s) Posted! </font></td>
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

@endsection