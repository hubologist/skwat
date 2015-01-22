@extends('layout.main')

@section('content')
<div class='panel'>
    <form action="{{URL::route('account-settings')}}" class="form-signin" method="post" role="form">
        <h3 class="form-signin-heading">New Entry</h3>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <div class="field">
                        <input type="text" name="name" id="name" class="form-control input-sm" placeholder="Your Name" value="{{(Input::old('name')?Input::old('name'):'')}}" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <div class="field">
                        <label for="email" class="sr-only">Email address</label>
                        <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email address" value="{{(Input::old('email')?Input::old('email'):'')}}" required>
                    </div>
                    <div class="field">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password" required>
                    </div>
                </div>
            </div>
        </div>
        <input class="btn btn-lg btn-danger btn-block" type="submit" value="Create">
        {{Form::token()}}
    </form>    
</div>
@stop