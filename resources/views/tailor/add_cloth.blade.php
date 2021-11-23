<div class="tab-pane fade" id="add_cloth">
<h3>Add Cloth</h3>
<hr>
{{-- error and success messages --}}
@include('partials.messaging')
<div class="login">
    <div class="login_form_container">
        <div class="account_login_form">
            <div class="row">
                <div class="col-6"> 
                <form method="POST" action="{{ route('tailor.cloth.add') }}" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                    
                        <div class="default-form-box mb-20">
                            <label>Name</label>
                            <input type="text" name="name" value="">
                        </div>
                        
                         <div class="default-form-box mb-20">
                            <label>Category</label>
                            <select id = "type" class="form-control" name="category">
                                <option value="" disabled selected hidden>Please select</option>
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
                            <input type="text" name="details">
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
                            <input type="file" name="image">
                        </div>
                        <div class="default-form-box mb-20">
                            <label>Price</label>
                            <input type="text" name="price" value="{{ old('price') }}">
                        </div>

                    </div>
                    </div>
                </form>
                    
            
            
        </div>
    </div>
</div>
</div>