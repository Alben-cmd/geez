@extends ('layouts.master')
@section('title', '| cart')
@section('content')

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb-title">Cart</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="home">Home</a></li>
                        <li class="breadcrumb-item active">Cart</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumb-area end -->

    <!-- Cart Area Start -->
    <div class="cart-main-area pt-100px pb-100px">
        <div class="container">
            <h3 class="cart-page-title">Your Cart Items</h3>
            {{-- error and success messages --}}
            @include('partials.messaging')
            @if (Cart::count() > 0)
            
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <form action="#">
                        <div class="table-content table-responsive cart-table-content">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Until Price</th>
                                        <th>Qty</th>
                                        <th>Subtotal</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach(Cart:: content() as $item)
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="{{ route('cloth.show', $item->model->slug) }} "><img class="img-responsive ml-15px"
                                                    src="{{ asset('/assets/images/clothes/' .$item->model->image) }} " alt="" /></a>
                                        </td>
                                        <td class="product-name"><a href="{{ route('cloth.show', $item->model->slug) }}">{{$item->model->name}}  </a></td>
                                        <input type="hidden" name="" value="{{ $item->model->tailor_id }}">
                                        
                                        <td class="product-price-cart"><span class="amount">{{ $item->model->presentPrice()}}</span></td>
                                        <td class="product-quantity">
                                            <div class="cart-plus-minus">
                                                
                                                    <a class="dec qtybutton" href="{{ route('cart.sub_quanity', $item->rowId) }}"><div >-</a>
                                              
                                                <input class="cart-plus-minus-box" type="text" name="qtybutton"
                                                    value="{{ $item->qty }}" />
                                                        <a class="inc qtybutton" href="{{ route('cart.add_quantity', $item->rowId) }}">+</a>                                                    
                                            </div>
                                        </td>
                                        <td class="product-subtotal">&#8358;{{$item->subtotal() / 100 }}</td>
                                        <td class="product-remove">
                                            {{-- <a href="#"><i class="pe-7s-like"></i></a> --}}
                                            {{-- <a href=""><i class="fa fa-times"></i></a> --}}
                                            {{-- <form action="{{ route('cart.destroy', $item->rowId) }} " method="POST">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button type="submit"><i class="fa fa-times"></i></button> 
                                            </form> --}}
                                            <a href="{{ route('user.message.tailor', ['tailor_id' => $item->model->tailor_id ]) }} "><i class="fa fa-comments" aria-hidden="true"></i></a>
                                            <a href="{{ route('cart.destroy', ['id' => $item->rowId]) }}"><i class="fa fa-times"></i></a>
                                            
                                            {{-- <form method="POST" action="{{ route('user.checkout') }}" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="body" value="{{ $item->model->name }}, {{ $item->qty }}, {{$item->subtotal() }} ">

                                                <button type="submit">submit</button>
                                                
                                            </form> --}}
                                        </td>

                                    </tr>
                                    
                                   @endforeach
                                </tbody>
                            </table>
                        </div>
                        @else
                            <h3> <font color="#fb5d5d">No Item(s) in Cart!</font></h3>
                        @endif
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cart-shiping-update-wrapper">
                                    <div class="cart-shiping-update">
                                        <a href="{{ route('clothes') }} ">Continue Shopping</a>
                                    </div>
                                    <div class="cart-clear">
                                        @if(Cart:: content()->count() > 0)
                                        <a href="{{ route('empty_cart') }} ">Clear Shopping Cart</a>
                                        @else
                                        <a href="" onclick="event.preventDefault()">Clear Shopping Cart</a>
                                        
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-lm-30px">
                            {{--<div class="discount-code-wrapper">
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gray">Use Coupon Code</h4>
                                </div>
                                <div class="discount-code">
                                    <p>Enter your coupon code if you have one.</p>
                                    <form>
                                        <input type="text" required="" name="name" />
                                        <button class="cart-btn-2" type="submit">Apply Coupon</button>
                                    </form>
                                </div>
                            </div>--}}
                        </div>
                        <div class="col-lg-4 col-md-6 mb-lm-30px">
                            
                        </div>
                        <div class="col-lg-4 col-md-12 mt-md-30px">
                            <div class="grand-totall">
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                                </div>
                                <h5>Sub Total products <span>&#8358;{{Cart::subtotal() / 100}} </span></h5>
                                <h5>Tax <span>{{Cart::tax() }}</span></h5>
                              {{--<div class="total-shipping">
                                    <h5>Total shipping</h5>
                                    <ul>
                                        <li><input type="checkbox" /> Standard <span>$20.00</span></li>
                                        <li><input type="checkbox" /> Express <span>$30.00</span></li>
                                    </ul>
                                </div>--}}
                                <h4 class="grand-totall-title">Grand Total <span>{{Cart::total() / 100 }}</span></h4>
                                @auth
                                <div class="discount-code-wrapper">
                                        
                                <div class="discount-code">
                                <form method="POST" action="{{ route('user.pay') }}" accept-charset="UTF-8" role="form">
                                    <div class="row" style="margin-bottom:40px;">
                                        <div class="col-md-8 col-md-offset-2">
                                            
                                            <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                                            <input type="hidden" name="first_name" value="{{ Auth::user()->fname }}">
                                            <input type="hidden" name="last_name" value="{{ Auth::user()->lname }}">
                                            <input type="hidden" name="phone" value="{{ Auth::user()->phone_1 }}">
                                            <input type="hidden" name="first_name" value="{{ Auth::user()->fname }}">
                                            <input type="hidden" name="orderID" value="345">
                                            <input type="hidden" name="amount" value="{{Cart::total() }}"> 
                                            <input type="hidden" name="quantity" value="{{ $item->qty }}">
                                            <input type="hidden" name="currency" value="NGN">
                                            {{--<input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" >  For other necessary things you want to add to your payload. it is optional though --}}
                                            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                                            
                                            
                                            {{ csrf_field() }}

                                                
                                                    <button class="cart-btn-2" type="submit" style="text-align:center">
                                                        Pay now!
                                                    </button>  
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>                         
                                @endauth                              
                            </div>
                        </div>
                    </div> 
                </div>
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