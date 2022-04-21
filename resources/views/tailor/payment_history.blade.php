@extends ('layouts.master')
@section('title', '| payments')
@section('content')
    
    <!-- breadcrumb-area end -->

    <!-- account area start -->
    <div class="account-dashboard pt-100px pb-100px">
        <div class="container">
            <div class="row">

                {{-- dashboard section begins  --}}
               @include('partials.tailor_dashboard')
               {{-- Dashboard section ends --}}

                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
                        <!-- dashboard  -->
                        {{-- error and success messages --}}
                        @include('partials.messaging')
                        <h3>Payment History </h3>
                        
                        <div class="table_page table-responsive">
                            <table>
                                
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Amonth</th>
                                        <th>Date</th>
                                    </tr>
                                    
                                </thead>
                                
                                <tbody>
                                    <tr>
                                        <td>1 </td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>

                                    </tr>
                                   
                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

