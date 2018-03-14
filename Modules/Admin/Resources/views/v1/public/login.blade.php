@extends('admin::v1.layout.main')
@section('title', 'Login')
@section('content')
<div class="card">
    <div class="card-body">
        <h3 class="text-center mt-0 m-b-15">
            <a href="{{ url('/admin') }}" class="logo logo-admin"><img src="{{ URL::asset('assets/images/logo.png') }}" height="24" alt="logo"></a>
        </h3>
        <div class="p-3">
            <form class="form-horizontal m-t-20" action="" method="POST">
                {!! csrf_field() !!}
                <div class="form-group row{{ $errors->has('username') ? ' parsley-error' : '' }}">
                    <div class="col-12">
                        <input class="form-control" type="text" name="username" required="" placeholder="Username">
                        @if ($errors->has('username'))
                            <ul class="parsley-errors-list filled">
                                <li class="parsley-required">{{ $errors->first('username') }}</li>
                            </ul>
                        @endif
                    </div>
                </div>
                <div class="form-group row{{ $errors->has('password') ? ' parsley-error' : '' }}">
                    <div class="col-12">
                        <input class="form-control" type="password" name="password" required="" placeholder="Password">
                        @if ($errors->has('password'))
                            <ul class="parsley-errors-list filled">
                                <li class="parsley-required">{{ $errors->first('password') }}</li>
                            </ul>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" name="remember">
                            <label class="custom-control-label" for="customCheck1">Remember me</label>
                        </div>
                    </div>
                </div>
                <div class="form-group text-center row m-t-20">
                    <div class="col-12">
                        <button class="btn btn-danger btn-block waves-effect waves-light" type="submit">Log In</button>
                    </div>
                </div>
                <div class="form-group m-t-10 mb-0 row">
                    <div class="col-sm-7 m-t-20">
                        <a href="{{ url('admin/forgot-password') }}" class="text-muted"><i class="mdi mdi-lock"></i> <small>Forgot your password ?</small></a>
                    </div>
                    <div class="col-sm-5 m-t-20">
                        <a href="{{ url('admin/register') }}" class="text-muted"><i class="mdi mdi-account-circle"></i> <small>Create an account ?</small></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop