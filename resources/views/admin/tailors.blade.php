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
                        <h3>Designers </h3>
                        
                        <div class="table_page table-responsive">
                            <table>
                                
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Brand Name</th>
                                        <th>Phone</th>
                                        <th>Actions</th>
                                    </tr>
                                    @php
                                   $count = 1;
                                  @endphp
                                </thead>
                                @forelse ($tailors as $key => $item)
                                <tbody>
                                    <tr>
                                        <td>{{ $count++ }} </td>
                                        <td>{{ $item['fname'] }} {{ $item['lname'] }}</td>
                                        <td>{{ $item['brand_name'] }}</td>
                                        <td>{{ $item['phone_1'] }}</td>
                                        <td><a href="{{ route('admin.tailor.show', ['id' => $item['id']]) }} " class="view">view</a> {{-- | <a href="{{ route('admin.tailor.edit', ['id' => $item['id']]) }}" class="view">Edit</a> --}} | <a href="{{ route('admin.tailor.delete', ['id' => $item['id']]) }}" class="view">Delete</a></td>
                                    </tr>
                                   
                                </tbody>
                                @empty
                                <tr>
                                    <td><font color="#fb5d5d">No Designer(S) Found! </font></td>
                                </tr>
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

