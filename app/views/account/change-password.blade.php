@extends('layout.main')

@section('content')
<div class='panel'>
    <form action="{{URL::route('account-login-post')}}" class="form-signin" method="post" role="form">
        <h3 class="form-signin-heading">Change Password</h3>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <div class="field">
                        <label for="oldpassword" class="sr-only">Old Password</label>
                        <input type="password" name="oldpassword" id="oldpassword" class="form-control input-sm" placeholder="Old Password" value="{{(Input::old('email')?Input::old('email'):'')}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="field">
                        <label for="newpassword" class="sr-only">New Password</label>
                        <input type="password" name="newpassword" id="newpassword" class="form-control input-sm" placeholder="New Password" required>
                    </div>
                    <div class="field">
                        <label for="confirmpassword" class="sr-only">Confirm Password</label>
                        <input type="password" name="confirmpassword" id="confirmpassword" class="form-control input-sm" placeholder="Confirm Password" required>
                    </div>
                </div>
            </div>
        </div>
        <input class="btn btn-lg btn-danger btn-block" type="submit" value="Submit">
        {{Form::token()}}
    </form>    
</div>
@stop