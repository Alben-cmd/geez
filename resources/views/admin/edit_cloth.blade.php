@extends ('layouts.master')
@section('title', '| clothes')
@section('content')
    
    <!-- breadcrumb-area end -->

    <!-- account area start -->
    <div class="account-dashboard pt-100px pb-100px">
        <div class="container">
            <div class="row">
                @include('partials.admin_dashboard')
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
                        <!-- dashboard  -->
                        {{-- error and success messages --}}
                        @include('partials.messaging')
                        <div class="tab-pane fade show active" id="dashboard">
                            <h4>Edit Cloth </h4>
                            <div class="login">
                                <div class="login_form_container">
                                    <div class="account_login_form">
                                        <div class="row">
                                            <div class="col-6"> 
                                            
                                                <form method="POST" action="{{ route('admin.cloth.update', ['id' => $cloth->id]) }} " enctype="multipart/form-data" class="form-horizontal">

                                                    @csrf
                                                    
                                                    <div class="default-form-box mb-20">
                                                        <label>Name</label>
                                                        <input type="text" name="name" value="{{$cloth->name}}">
                                                    </div>
                                                    
                                                     <div class="default-form-box mb-20">
                                                        <label>Category</label>
                                                        <select id = "type" class="form-control" name="category" value="{{ $cloth->category }}">
                                                            
                                                            <option value = "Mens Tops">Mens Tops</option>
                                                            <option value = "Men Bottoms">Men Bottoms</option>
                                                            <option value = "Women">Women</option>
                                                            <option value = "Children">Children</option>
                                                            <option value = "Party">Party</option>
                                                            <option value = "Ashebi">Ashebi</option>
                                                            <option value = "Ankara">Ankara</option>
                                                            <option value = "Accessories">Accessories</option>
                                                            <option value = "Others">Others</option>
                                                        </select>
                                                    </div>
                                                     

                                                    <div class="default-form-box mb-20">
                                                        <label>Details</label>
                                                        <input type="text" name="details" value="{{ $cloth->details }} ">
                                                    </div>

                                                    <input type="hidden" name="brand_name" value="{{$cloth->brand_name}}">

                                                    
                                                    <div class="save_button mt-3">
                                                        <button class="btn"
                                                            type="submit">Save</button>
                                                    </div>
                                                    <br>
                                                </div>

                                                <div class="col-6">
                                                    <div class="default-form-box mb-20">
                                                        <label>Picture</label>
                                                        <input type="file" name="image">
                                                        <span style="color: green;"> Optional</span>
                                                    </div>

                                                    <div class="default-form-box mb-20">
                                                        <label>Slug</label>
                                                        <input type="text" name="slug" value="{{$cloth->slug}}">
                                                    </div>
                                                    <div class="default-form-box mb-20">
                                                        <label>Price</label>
                                                        <input type="text" name="price" value="{{$cloth->price}}">
                                                    </div>

                                                </div>
                                                </div>
                                                </form>
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
    </div>

    @endsection


