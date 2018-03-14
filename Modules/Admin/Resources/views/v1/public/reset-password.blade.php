@extends('admin::v1.layout.main')
@section('title', 'Forgot Password')
@section('content')
<div class="card">
    <div class="card-body">
        <h3 class="text-center mt-0 m-b-15">
            <a href="{{ url('/admin') }}" class="logo logo-admin"><img src="{{ URL::asset('assets/images/logo.png') }}" height="24" alt="logo"></a>
        </h3>
        <div class="p-3">
            <form class="form-horizontal" action="" method="POST">
                {!! csrf_field() !!}
                <div class="form-group{{ $errors->has('email') ? ' parsley-error' : '' }}">
                    <div class="col-xs-12">
                        <input class="form-control" type="email" name="email" required="" placeholder="Email">
                        @if ($errors->has('email'))
                            <ul class="parsley-errors-list filled">
                                <li class="parsley-required">{{ $errors->first('email') }}</li>
                            </ul>
                        @endif
                    </div>
                </div>
                <div class="form-group row{{ $errors->has('password') ? ' parsley-error' : '' }}">
                    <div class="col-12">
                        <input class="form-control" id="password" type="password" name="password" required="" placeholder="Password">
                        @if ($errors->has('password'))
                            <ul class="parsley-errors-list filled">
                                <li class="parsley-required">{{ $errors->first('email') }}</li>
                            </ul>
                        @endif
                    </div>
                </div>
                <div class="form-group row{{ $errors->has('password_confirmation') ? ' parsley-error' : '' }}">
                    <div class="col-12">
                        <input class="form-control" data-parsley-equalto="#password" type="password" name="password_confirmation" required="" placeholder="Confirm Password">
                        @if ($errors->has('password_confirmation'))
                            <ul class="parsley-errors-list filled">
                                <li class="parsley-required">{{ $errors->first('email') }}</li>
                            </ul>
                        @endif
                    </div>
                </div>
                <div class="form-group text-center row m-t-20">
                    <div class="col-12">
                        <button class="btn btn-danger btn-block waves-effect waves-light" type="submit">Reset Password</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop