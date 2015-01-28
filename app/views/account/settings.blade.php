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
                <strong>Update weight ({{$user->pref_units}})</strong>
                <div class="input-group">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" data-type="minus" data-field="weight">
                            <span class="glyphicon glyphicon-minus"></span>
                        </button>
                    </span>
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="weight">
                            <span class="glyphicon glyphicon-plus"></span>
                        </button>
                    </span>
                    <input type="text" name="weight" class="form-control input-number square" value="{{$user->weight}}" min="1" max="999">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <strong>Displayed lifts</strong>
                <div class="form-wall">
                    <div class="checbox">
                        <label>
                            @if($user->track_bp == 1)
                            <input type="checkbox" name="track_bp" value="1" checked> Bench Press
                            @else
                            <input type="checkbox" name="track_bp" value="1" > Bench Press                              
                            @endif
                        </label>
                    </div>
                    <div class="checbox">
                        <label>
                            @if($user->track_dl == 1)
                            <input type="checkbox" name="track_dl" value="1" checked> Deadlift
                            @else
                            <input type="checkbox" name="track_dl" value="1" > Deadlift                              
                            @endif
                        </label>
                    </div>
                    <div class="checbox">
                        <label>
                            @if($user->track_op == 1)
                            <input type="checkbox" name="track_op" value="1" checked> Overhead Press
                            @else
                            <input type="checkbox" name="track_op" value="1" > Overhead Press                              
                            @endif
                        </label>
                    </div>
                    <div class="checbox">
                        <label>
                            @if($user->track_pu == 1)
                            <input type="checkbox" name="track_pu" value="1" checked> Pull Up
                            @else
                            <input type="checkbox" name="track_pu" value="1" > Pull Up                              
                            @endif
                        </label>
                    </div>
                    <div class="checbox">
                        <label>
                            @if($user->track_sq == 1)
                            <input type="checkbox" name="track_sq" value="1" checked> Squat
                            @else
                            <input type="checkbox" name="track_sq" value="1" > Squat                              
                            @endif
                        </label>
                    </div>
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
                                @if($user->pref_units == "kg")
                                <input type="radio" name="pref_units" value="kg" checked>Kilograms
                                @else
                                <input type="radio" name="pref_units" value="kg" >Kilograms                              
                                @endif                               
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="radio">
                            <label>
                                @if($user->pref_units == "lbs")
                                <input type="radio" name="pref_units" value="lbs" checked>Pounds
                                @else
                                <input type="radio" name="pref_units" value="lbs" >Pounds                              
                                @endif
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input class="btn btn-lg btn-danger btn-block" type="submit" value="Update">
        <p class="text-center"><a class="text-center" href="{{URL::route('account-change-password')}}">Change password</a></p>
        {{Form::token()}}
    </form>    
</div>
@stop