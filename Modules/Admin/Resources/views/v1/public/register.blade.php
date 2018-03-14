@extends('admin::v1.layout.main')
@section('title', 'Register')
@section('content')
<div class="card">
    <div class="card-body">
        <h3 class="text-center mt-0 m-b-15">
            <a href="{{ url('/admin') }}" class="logo logo-admin"><img src="{{ URL::asset('assets/images/logo.png') }}" height="24" alt="logo"></a>
        </h3>
        <div class="p-3">
            <form class="form-horizontal" action="">
                {!! csrf_field() !!}
                <div class="form-group row">
                    <div class="col-12">
                        <input class="form-control" type="email" required="" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <input class="form-control" type="text" required="" placeholder="Username">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <input class="form-control" type="password" required="" placeholder="Password">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label font-weight-normal" for="customCheck1">I accept <a href="#" class="text-muted">Terms and Conditions</a></label>
                        </div>
                    </div>
                </div>
                <div class="form-group text-center row m-t-20">
                    <div class="col-12">
                        <button class="btn btn-danger btn-block waves-effect waves-light" type="submit">Register</button>
                    </div>
                </div>
                <div class="form-group m-t-10 mb-0 row">
                    <div class="col-12 m-t-20 text-center">
                        <a href="{{ url('admin/login') }}" class="text-muted">Already have account?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop