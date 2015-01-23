@extends('layout.main')

@section('content')
<div class='panel'>
    <form action="{{URL::route('account-settings')}}" class="form-signin" method="post" role="form">
        <h3 class="form-signin-heading">Account settings</h3>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <p>Change display name</p>
                <div class="form-group">
                    <div class="field">
                        <input type="text" name="name" id="name" class="square form-control input-sm" placeholder="{{Auth::user()->name}}" value="{{(Input::old('name')?Input::old('name'):'')}}" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <p>Unit preference</p>
                <div class="form-group">
                    <div class="input-group">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <label for="kg" class="">kg</label>
                                <input type="radio" name="kg" id="kg" class="square form-control input-sm">
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <label for="lbs" class="">pounds</label>
                                <input type="radio" name="lbs" id="lbs" class="square form-control input-sm">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input class="btn btn-lg btn-danger btn-block" type="submit" value="Create">
        {{Form::token()}}
    </form>    
</div>
@stop