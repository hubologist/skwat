@extends('layout.main')

@section('content')
@if($errors->has('oldpassword') || $errors->has('password') || $errors->has('confirmpassword'))
<div class="alert alert-danger">
    @if($errors->has('oldpassword'))
    <p>Your current password is incorrect.</p>
    @endif
    @if($errors->has('password'))
    <p>{{$errors->first('password')}}</p>
    @endif
    @if($errors->has('confirmpassword'))
    <p>Your passwords must match.</p>
    @endif
</div>
@endif
<div class='panel'>
    <form action="{{URL::route('account-change-password-post')}}" class="form-signin" method="post" role="form">
        <h3 class="form-signin-heading">Change Password</h3>
        <div class="row">
            <div class="col-md-12">
                <label for="oldpassword">Insert your current password</label>
                <input type="password" name="oldpassword" id="oldpassword" class="form-control input-sm square" placeholder="Old Password" value="{{(Input::old('email')?Input::old('email'):'')}}" required>
                <label for="password">Choose a new password</label>
                <input type="password" name="password" id="password" class="form-control input-sm square" placeholder="New Password" required>
                <label for="confirmpassword">Repeat your new password</label>
                <input type="password" name="confirmpassword" id="confirmpassword" class="form-control input-sm square" placeholder="Confirm Password" required>
            </div>
        </div>
        <input class="btn btn-lg btn-danger btn-block" type="submit" value="Submit">
        {{Form::token()}}
    </form>    
</div>
@stop