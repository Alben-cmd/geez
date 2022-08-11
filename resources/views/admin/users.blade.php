@extends ('layouts.master')
@section('title', '| tailors')
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
                        <h4>Designers </h4>
                        
                        <div class="table_page table-responsive">
                            <table>
                                
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Actions</th>
                                    </tr>
                                    @php
                                   $count = 1;
                                  @endphp
                                </thead>
                                @forelse ($users as $key => $item)
                                <tbody>
                                    <tr>
                                        <td>{{ $count++ }} </td>
                                        <td>{{ $item['fname'] }} {{ $item['lname'] }}</td>
                                        <td>{{ $item['phone_1'] }}</td>
                                        <td><a href="{{ route('admin.user.delete', ['id' => $item['id']]) }}" onclick="return confirm('Are you sure?')"  class="view">Delete</a></td>
                                    </tr>
                                   
                                </tbody>
                                @empty
                                            <div class="container">
                                                <div class="row justify-content-center align-item-center">
                                                    <div class="text-center"><img src="{{ asset('assets/images/icons/designers.jpg') }} " width="130" height="">
                                                        <h3><strong>No designers!</strong></h3>
                                                       
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

