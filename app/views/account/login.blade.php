@extends('layout.main')

@section('content')
@if($errors->has('email') || $errors->has('password'))
<div class="alert alert-danger">
    @if($errors->has('email'))
    <p>{{$errors->first('email')}}</p>
    @endif
    @if($errors->has('password'))
    <p>{{$errors->first('password')}}</p>
    @endif
</div>
@endif
<div class='panel'>
    <form action="{{URL::route('account-login-post')}}" class="form-signin" method="post" role="form">
        <h3 class="form-signin-heading">Login</h3>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="email" class="sr-only">Email address</label>
                    <input type="email" name="email" id="email" class="form-control input-sm square" placeholder="Email address" value="{{(Input::old('email')?Input::old('email'):'')}}" required>
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control input-sm square" placeholder="Password" required>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="remember"> Remember me
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <input class="btn btn-lg btn-danger btn-block" type="submit" value="Login">
        <p class="text-center"><a class="text-center" href="{{URL::route('account-recovery')}}">Forgot password</a></p>
        {{Form::token()}}
    </form>    
</div>
@stop