@extends ('layouts.master')
@section('title', '| wishlist')
@section('content')

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb-title">Wishlist</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{ route('home') }} ">Home</a></li>
                        <li class="breadcrumb-item active">Wishlist</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumb-area end -->



 
    <!-- Wishlist Area Start -->
    <div class="cart-main-area pt-100px pb-100px">
        <div class="container">
            <h4 class="cart-page-title">Your Wishlist items</h4>
            {{-- error and success messages --}}
            @include('partials.messaging')
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <form action="#">
                        <div class="table-content table-responsive cart-table-content">
                            @if($wishlist->count() > 0)
                            <table>
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Message Tailor</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @endif
                                    @forelse ($wishlist as $key => $item)
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="{{ route('cloth.show', ['slug' => $item->cloth->slug  ]) }}"><img class="img-responsive ml-15px" src="{{ asset('/assets/images/clothes/' .$item->cloth->image) }}" alt="" /></a>
                                        </td>
                                        <td class="product-name"><a href="#">{{$item->cloth->name}}</a></td>
                                        <td class="product-price-cart"><span class="amount">{{ $item->cloth->presentPrice()}}</span></td>
                                        
                                      <td>
                                            <form action="{{ route('cart.store') }}" method="POST" class="product-wishlist-cart">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $item->cloth->id}} ">
                                                <input type="hidden" name="name" value="{{ $item->cloth->name}} ">
                                                <input type="hidden" name="price" value="{{ $item->cloth->price}} ">
                                                <button> Add To Cart</button>
                                            </form>
                                            <a href="{{ route('user.message.tailor', ['tailor_id' => $item->cloth->tailor_id ]) }} "><i class="fa fa-comments" aria-hidden="true"></i></a>
                                        </td>
                                         {{--<td>
                                           <form action="{{ route('message.tailor') }}" method="POST">
                                              
                                                
                                                <input type="hidden" name="cloth_name" value="{{ $item->cloth->name }}">
                                                <input type="hidden" name="price" value="{{ $item->cloth->price }} ">
                                                <input type="hidden" name="tailor_name" value="{{ $item->cloth->tailor_id }} ">

                                                <button type="submit"><i class="fa fa-comments" aria-hidden="true"></i></button>
                                                
                                            </form>
                                            
                                    
                                        </td>--}}
                                        <td><a href="{{ route('user.delete.wishlist', ['id' =>$item->id ]) }} "><i class="fa fa-times"></i></a>
                                            
                                            
                                        </td>
                                    </tr>
                                    @empty
                                        <h5><font color="#fb5d5d"> No Items in Wishlist!</font></h5>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </form>
                    
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="cart-shiping-update-wrapper">
                <div class="cart-shiping-update">
                    <a href="{{ route('clothes') }} ">Continue Shopping</a>
                </div>
                {{-- <div class="cart-clear">
                    
                    <a href="{{ route('cart.empty') }} ">Clear Shopping Cart</a>
                </div> --}}
            </div>
        </div>
    </div>

    @include('layouts.might-like')
    @endsection
    <!-- Cart Area End -->
   {{--  @section('extra-js')
    <script src="{{ asset('js.app.js') }} "></script>

    <script>
        (function(){
           const classname = document.querySelectorAll('.cart')

           Array.from(classname).forEach(function(element){

            element.addEventListener('change', function(){
                alert('changed');
            })
           })
       })();
    </script> --}}

    {{-- @endsection  --}}