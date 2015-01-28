@extends('layout.main')

@section('content')
<div class='panel'>
    <form action="{{URL::route('account-settings-post')}}" class="form-signin" method="post" role="form">
        <h3 class="form-signin-heading">Account settings</h3>
        <div class="row">
            <div class="col-md-12">
                <strong>Change display name</strong>
                <div class="form-group">
                    <input type="text" name="name" id="name" class="square form-control input-sm" placeholder="{{$user->name}}" value="{{$user->name}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <strong>Update weight</strong>
                <div class="input-group">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default" data-type="plus" data-field="reps">
                            <span class="glyphicon glyphicon-plus"></span>
                        </button>
                    </span>
                    <input type="text" name="weight" class="form-control input-number square" value="{{$user->weight}}" aria-describedby="basic-addon2">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default" data-type="minus" data-field="reps">
                            <span class="glyphicon glyphicon-minus"></span>
                        </button>
                    </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <strong>Unit preference</strong>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="radio">
                            <label>
                                @if($user->pref_units == 0)
                                <input type="radio" name="pref_units" value="0" checked>Kilograms
                                @else
                                <input type="radio" name="pref_units" value="0" >Kilograms                              
                                @endif                               
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="radio">
                            <label>
                                @if($user->pref_units == 1)
                                <input type="radio" name="pref_units" value="1" checked>Pounds
                                @else
                                <input type="radio" name="pref_units" value="1" >Pounds                              
                                @endif
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3 class="form-signin-heading">Change Password</h3>
                <strong>Insert your current password</strong>
                <label for="oldpassword" class="sr-only">Old Password</label>
                <input type="password" name="oldpassword" id="oldpassword" class="form-control input-sm square" placeholder="Old Password" value="{{(Input::old('email')?Input::old('email'):'')}}" required>
                <strong>Choose a new password</strong>
                <label for="password" class="sr-only">New Password</label>
                <input type="password" name="password" id="password" class="form-control input-sm square" placeholder="New Password" required>
                <label for="confirmpassword" class="sr-only">Confirm Password</label>
                <input type="password" name="confirmpassword" id="confirmpassword" class="form-control input-sm square" placeholder="Confirm Password" required>
            </div>
        </div>
        <input class="btn btn-lg btn-danger btn-block" type="submit" value="Update">
        {{Form::token()}}
    </form>    
</div>
@stop