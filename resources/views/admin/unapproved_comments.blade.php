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
                        <h3>Comments </h3>
                        
                        <div class="table_page table-responsive">
                            <table>
                                
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Cloth Name</th>
                                        <th>Email</th>
                                        <th>Comment</th>
                                        <th>Actions</th>
                                    </tr>
                                    @php
                                   $count = 1;
                                  @endphp
                                </thead>
                                @forelse ($unapproved_comments as $key => $item)
                                <tbody>
                                    <tr>
                                        <td>{{ $count++ }} </td>
                                        <td><a href="{{ route('cloth.show', ['slug' => $item ->cloth->slug  ]) }}">{{$item->cloth->name}}</a> </td>
                                        <td>{{ $item['email'] }} </td>
                                        <td>{{ $item['comment'] }}</td>
                                        <td><a href="{{ route('admin.approve.comment', ['id' => $item['id']]) }} " class="view">Approve</a> {{-- | <a href="{{ route('admin.tailor.edit', ['id' => $item['id']]) }}" class="view">Edit</a> --}} | <a href="{{ route('admin.comment.delete', ['id' => $item['id']]) }}" class="view">Delete</a></td>
                                    </tr>
                                   
                                </tbody>
                                @empty
                                <tr>
                                    <td><font color="#fb5d5d">No Unaproved comment(s) Found! </font></td>
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

