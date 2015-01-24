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
                        <input type="text" name="name" id="name" class="square form-control input-sm" placeholder="{{Auth::user()->name}}" value="{{(Input::old('name')?Input::old('name'):'')}}">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <p>Unit preference</p>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="radio">
                            <label>
                                @if($user->pref_units == 0)
                                <input type="radio" name="optradio" checked>Kilograms
                                @else
                                <input type="radio" name="optradio">Kilograms                              
                                @endif                               
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="radio">
                            <label>
                                @if($user->pref_units == 1)
                                <input type="radio" name="optradio" checked>Pounds
                                @else
                                <input type="radio" name="optradio">Pounds                              
                                @endif
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input class="btn btn-lg btn-danger btn-block" type="submit" value="Update">
        {{Form::token()}}
    </form>    
</div>
@stop