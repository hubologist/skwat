@extends('layout.main')

@section('content')
<div class='panel'>
    <form action="{{URL::route('new-entry')}}" class="form-signin" method="post" role="form">
        <h3 class="form-signin-heading">New entry</h3>
        <div class="row">
            <div class="col-md-12">
                <strong>Select your lift</strong>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="radio">
                            <label>
                                <input type="radio" name="pref_units" value="kg">Deadlift                              
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="pref_units" value="lbs">Press                              
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="pref_units" value="lbs">Squat                              
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <strong>Reps</strong>
                <div class="input-group">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" data-type="minus" data-field="reps">
                            <span class="glyphicon glyphicon-minus"></span>
                        </button>
                    </span>
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="reps">
                            <span class="glyphicon glyphicon-plus"></span>
                        </button>
                    </span>
                    <input type="text" name="reps" class="form-control input-number square" value="5" min="1" max="999">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <strong>Weight</strong>
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
                    <input type="text" name="weight" class="form-control input-number square" value="20" min="1" max="999">
                </div>
            </div>
        </div>
        <input class="btn btn-lg btn-danger btn-block" type="submit" value="Submit">
        {{Form::token()}}
    </form>    
</div>
@stop