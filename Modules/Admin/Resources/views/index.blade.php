@extends('admin::v1/master')
@section('title')
    cms demo
@endsection
@section('content')



    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('admin.name') !!}
    </p>
@stop
