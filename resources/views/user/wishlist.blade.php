@extends ('layouts.master')
@section('title', '| clothes')
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
            <h3 class="cart-page-title">Your Wishlist items</h3>
            {{-- error and success messages --}}
            @include('partials.messaging')
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <form action="#">
                        <div class="table-content table-responsive cart-table-content">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Qty</th>
                                       {{--  <th>Subtotal</th> --}}
                                        <th>Add To Cart</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($wishlist as $key => $item)
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="#"><img class="img-responsive ml-15px" src="{{ asset('/assets/images/clothes/' .$item->cloth->image) }}" alt="" /></a>
                                        </td>
                                        <td class="product-name"><a href="#">{{$item->cloth->name}}</a></td>
                                        <td class="product-price-cart"><span class="amount">{{ $item->cloth->presentPrice()}}</span></td>
                                        <td class="product-quantity">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                            </div>
                                        </td>
                                        {{-- <td class="product-subtotal">$70.00</td> --}}
                                        <td class="product-wishlist-cart">
                                            <form action="{{ route('cart.store') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $item->cloth->id}} ">
                                                <input type="hidden" name="name" value="{{ $item->cloth->name}} ">
                                                <input type="hidden" name="price" value="{{ $item->cloth->price}} ">
                                                <button> Add To Cart</button>
                                            </form>
                                            
                                        </td>
                                        <td><a href="{{ route('user.delete.wishlist', ['id' =>$item->id ]) }} "><i class="fa fa-times"></i></a></td>
                                    </tr>
                                    @empty
                                        <h3> No Items in Wishlist!</h3>
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