@extends ('layouts.master')
@section('title', '| Home')
@section('content')

    @foreach($clothes as $cloth)
    <h5>{{ $cloth->name}} </h5>
        @foreach($cloth->id as $val)
            <h4>{{ $val->name }}</h4>
        @endforeach
        
    @endforeach

@endsection