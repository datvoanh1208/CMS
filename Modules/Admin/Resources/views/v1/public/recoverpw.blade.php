@extends('admin::v1.layout.main')
@section('title', 'Forgot Password')
@section('content')
<div class="card">
    <div class="card-body">
        <h3 class="text-center mt-0 m-b-15">
            <a href="{{ url('/admin') }}" class="logo logo-admin"><img src="{{ URL::asset('assets/images/logo.png') }}" height="24" alt="logo"></a>
        </h3>
        <div class="p-3">
            <form class="form-horizontal" action="">
                {!! csrf_field() !!}
                <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    Enter your <b>Email</b> and instructions will be sent to you!
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="email" required="" placeholder="Email">
                    </div>
                </div>
                <div class="form-group text-center row m-t-20">
                    <div class="col-12">
                        <button class="btn btn-danger btn-block waves-effect waves-light" type="submit">Send Email</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop