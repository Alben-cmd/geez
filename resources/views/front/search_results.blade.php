@extends ('layouts.master')
@section('title', '| Search')
@section('content')

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb-title">Search</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Search</li>
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
            <h5 class="cart-page-title">{{ $cloth->count() }} Result(s) for '{{ request()->input('query') }}'</h5>
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
                                        <th>Category</th>
                                        <th>Brand</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cloth as $clothes)
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="{{ route('cloth.show', $clothes->slug) }} "><img class="img-responsive ml-15px"
                                                    src="{{ asset('/assets/images/clothes/' .$clothes->image) }} " alt="" /></a>
                                        </td>
                                        <td class="product-name"><a href="{{ route('cloth.show', $clothes->slug) }} ">{{$clothes->name}}</a></td>
                                        <td>{{$clothes->category}}</td>
                                        <td>{{$clothes->brand_name}}</td>
                                        <td class="product-price-cart"><span class="amount">&#8358{{$clothes->price}}</span></td>
                                       
                                    </tr>
                                    
                                   @endforeach
                                </tbody>
                            </table>
                        </div>
                       
                    </form>
                
                </div>
            </div>
        </div>
    </div>
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