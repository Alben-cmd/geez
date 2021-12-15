<div class="tab-pane fade" id="add_cloth">
<h3>Add Cloth</h3>
<hr>
{{-- error and success messages --}}
{{-- @include('partials.messaging') --}}
<div class="login">
    <div class="login_form_container">
        <div class="account_login_form">
            <div class="row">
                <div class="col-6"> 
                <form method="POST" action="{{ route('tailor.cloth.add') }}" enctype="multipart/form-data" class="form-horizontal">
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

                        <input type="hidden" name="brand_name" value="{{ Auth::user()->brand_name }}">

                        
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
                            <input type="text" name="price" value="{{ old('price') }}" required>
                        </div>

                    </div>
                    </div>
                </form>
                    
            
            
        </div>
    </div>
</div>
</div>