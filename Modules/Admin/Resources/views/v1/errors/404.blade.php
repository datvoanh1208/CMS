@extends('admin::v1.layout.main')
@section('title', 'Page Not Found')
@section('content')
<div class="card">
    <div class="card-block">

        <div class="ex-page-content text-center">
            <h1 class="">404!</h1>
            <h3 class="">Sorry, page not found</h3><br>
            <a class="btn btn-danger mb-5 waves-effect waves-light" href="{{ url('/admin') }}">Back to Dashboard</a>
        </div>

    </div>
</div>
@stop