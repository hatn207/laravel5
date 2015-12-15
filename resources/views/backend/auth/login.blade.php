@extends('backend::layouts.auth')
@section('title')
    Sign In
@endsection
@section('content')
<form class="form-signin" id="process_login" method="POST" action="{{ route('backend.process_login') }}">
    {!! csrf_field() !!}
    <div class="form-signin-heading text-center">
        <h1 class="sign-title">Sign In</h1>
        <img src="{{ asset('assets/backend/images/login-logo.png') }}" alt=""/>
    </div>
    <div class="login-wrap">
        <input type="text" name="user_name" @if($errors->has('user_name')) autofocus="" @endif value="{{ old('user_name') }}" class="form-control" placeholder="User name">
        <input type="password" autocomplete="off" name="password" @if($errors->has('password')) autofocus="" @endif class="form-control" placeholder="Password">
        @foreach($errors->all() as $message)
            <label class="error">{!! $message !!}</label>
        @endforeach
        <button class="btn btn-lg btn-login btn-block" type="submit">
            <i class="fa fa-check"></i>
        </button>

        <div class="registration">
            Not a member yet?
            <a class="" href="{{ route('user.create') }}">
                Signup
            </a>
        </div>
        <label class="checkbox">
            <input type="checkbox" name="remember" value="remember-me"> Remember me
            <span class="pull-right">
                <a data-toggle="modal" href="#myModal"> Forgot Password?</a>

            </span>
        </label>

    </div>

    <!-- Modal -->
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Forgot Password ?</h4>
                </div>
                <div class="modal-body">
                    <p>Enter your e-mail address below to reset your password.</p>
                    <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                    <button class="btn btn-primary" type="button">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->

</form>
@endsection