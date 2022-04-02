@extends ('layouts.master')
@section('title', '| dashboard')
@section('content')
    
    <!-- breadcrumb-area end -->

    <!-- account area start -->
    <div class="account-dashboard pt-100px pb-100px">
        <div class="container">
            <div class="row">
                @include('partials.tailor_dashboard')
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
                        <!-- dashboard  -->
                        {{-- error and success messages --}}
                        @include('partials.messaging')
                        <div class="tab-pane fade show active" id="dashboard">
                            <h4>Add Cloth</h4>
                            <div class="login">
                                <div class="login_form_container">
                                    <div class="account_login_form">
                                        <div class="row">
                                            <div class="col-6"> 
                                            <form method="POST" action="{{ route('designer.cloth.add') }}" enctype="multipart/form-data" class="form-horizontal">
                                                    @csrf
                                                
                                                    <div class="default-form-box mb-20">
                                                        <label>Name</label>
                                                        <input type="text" name="name" value="{{ old('name') }}" required>
                                                    </div>
                                                    
                                                     <div class="default-form-box mb-20">
                                                        <label>Category</label>
                                                        <select id = "type" class="form-control" name="category" required>
                                                            @foreach($categories as $category)
                                                            <option value="" disabled selected hidden>Please select</option>
                                                            <option value ="{{ $category->name}}">{{ $category->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                     

                                                    <div class="default-form-box mb-20">
                                                        <label>Details</label>
                                                        <input type="text" name="details" value="{{ old('details') }}" required>
                                                    </div>

                                                    <input type="hidden" name="tailor_id" value="{{ Auth::user()->id }}">

                                                    
                                                    <div class="save_button mt-3">
                                                        <button class="btn"
                                                            type="submit">Save</button>
                                                    </div>
                                                </div>

                                                <div class="col-6">
                                                    <div class="default-form-box mb-20">
                                                        <label>Picture</label>
                                                        <input type="file" name="image" required>
                                                    </div>
                                                    <div class="default-form-box mb-20">
                                                        <label>Price</label>
                                                        <input type="number" name="price" value="{{ old('price') }}" required>
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
@endsection