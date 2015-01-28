@extends('layout.main')

@section('content')
@if($errors->has('name') || $errors->has('email') || $errors->has('password'))
<div class="alert alert-danger">
    @if($errors->has('name'))
        <p>{{$errors->first('name')}}</p>
    @endif
    @if($errors->has('email'))
        <p>{{$errors->first('email')}}</p>
    @endif
    @if($errors->has('password'))
        <p>{{$errors->first('password')}}</p>
    @endif
</div>
@endif
<div class='panel'>
    <form action="{{URL::route('account-create-post')}}" class="form-signin" method="post" role="form">
        <h3 class="form-signin-heading">Create new account</h3>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <div class="field">
                        <label for="email">Display name (you can change it)</label>
                        <input type="text" name="name" id="name" class="form-control input-sm" placeholder="Your Name" value="{{(Input::old('name')?Input::old('name'):'')}}" required>
                    </div>
                    <div class="field">
                        <label for="email">Email address (used for login)</label>
                        <input type="text" name="email" id="email" class="form-control input-sm" placeholder="Email address" value="{{(Input::old('email')?Input::old('email'):'')}}" required>
                    </div>
                    <div class="field">
                        <label for="password">Password (at least 6 characters)</label>
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