@extends ('layouts.master')
@section('title', '| category')
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

                        <h4>Add Category</h4>
                        <hr>
                        {{-- error and success messages --}}
                        {{-- @include('partials.messaging') --}}
                        <div class="login">
                            <div class="login_form_container">
                                <div class="account_login_form">
                                    <div class="row">
                                        <div class="col-6"> 
                                            <form method="POST" action="{{ route('admin.category.add') }}" class="form-horizontal">
                                                @csrf
                                            
                                                <div class="default-form-box mb-20">
                                                    <label>Category Name</label>
                                                    <input type="text" name="name" value="">
                                                </div>
                                                
                                                
                                                <div class="save_button mt-3">
                                                    <button class="btn"
                                                        type="submit">Save</button>
                                                </div>
                                    
                                            </form>
                                        </div>  
                                        <br>
                                    
                                    </div>
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
