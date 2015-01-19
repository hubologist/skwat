@extends('layout.main')

@section('content')
<div class='panel'>
    <form action="{{URL::route('account-create-post')}}" class="form-signin" method="post" role="form">
        <h3 class="form-signin-heading">Create new account</h3>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="user_name" class="sr-only">Name</label>
                    <input type="text" name="user_name" id="user_name" class="form-control input-sm" placeholder="Your Name" value="" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="user_email" class="sr-only">Email address</label>
                    <input type="email" name="user_email" id="user_email" class="form-control input-sm" placeholder="Email address" value="" required>

                    <label for="user_password" class="sr-only">Password</label>
                    <input type="password" name="user_password" id="user_password" class="form-control input-sm" placeholder="Password" required>
                </div>
            </div>
        </div>

        <input class="btn btn-lg btn-danger btn-block" type="submit" value="Create">
    </form>    
</div>

@stop