
<div class="tab-pane fade" id="add_category">
    <h3>Add Category</h3>
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