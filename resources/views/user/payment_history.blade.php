@extends ('layouts.master')
@section('title', '| payments')
@section('content')
    
    <!-- breadcrumb-area end -->

    <!-- account area start -->
    <div class="account-dashboard pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">

                {{-- dashboard section begins  --}}
                    @include('partials.user_dashboard')
                </div>
               {{-- Dashboard section ends --}}

                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
                        <!-- dashboard  -->
                        {{-- error and success messages --}}
                        @include('partials.messaging')
                        <h4>Payment History</h4>
                        
                        <div class="table_page table-responsive">
                            <table>
                                
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Iniate date</th>
                                        <th>Amount</th>
                                        <th>Reference</th>
                                        <th>Status</th>
                                    </tr>
                                    @php
                                    $count = 1;
                                   @endphp 
                                </thead>
                                @forelse ($history as $key => $item)
                                <tbody>
                                    <tr>
                                        <td>{{ $count++ }}</td>
                                        <td>{{$item->created_at->format('d-m-Y')}}</td>
                                        <td>{{ $item->presentAmount()}}</td>
                                        <td>{{$item->reference}}</td>
                                        <td>@if($item->status == 1)
                                          Success
                                        @else 
                                            Failed
                                        @endif</td>
                                    </tr>
                                   
                                </tbody>
                                @empty
                                <div class="container">
                                    <div class="row justify-content-center align-item-center">
                                        <div class="text-center"><img src="{{ asset('assets/images/icons/payment.png') }} " width="130" height="">
                                            <h3><strong>No Payments Yet!</strong></h3>
                                            
                                        </div>
                                    </div>
                                </div>
                                @endforelse
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

