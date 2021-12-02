<div class="card-body">
    <div class="row">
        <div class="col-md-4">
            @if(Session::has('info'))
            <div class="alert alert-warning">
            {{ Session::get('info') }}
            </div>
            @endif
        </div>
        <div class="col-md-4">
            @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
            @endif
            <ul>
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    <li>{{ $error }}</li>
                </div>
                
                @endforeach
            </ul>
        </div>
        <div class="col-md-4">
    
        </div>
    </div>
</div>