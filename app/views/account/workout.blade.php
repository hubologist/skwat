@extends('layout.main')

@section('content')
@if($errors->has('sets') || $errors->has('reps') || $errors->has('weight'))
<div class="alert alert-danger">
    @if($errors->has('sets'))
    <p>{{$errors->first('sets')}}</p>
    @endif
    @if($errors->has('reps'))
    <p>{{$errors->first('reps')}}</p>
    @endif
    @if($errors->has('weight'))
    <p>{{$errors->first('weight')}}</p>
    @endif
</div>
@endif
<div class='panel'>
    <form action="{{URL::route('account-workout-post')}}" class="form-signin" method="post" role="form">
        <h3 class="form-signin-heading">New Workout</h3>
        <div class="row">
            <div class="col-md-6">
                <p class="text-center">Sets</p>
                <div class="input-group">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" data-type="minus" data-field="sets">
                            <span class="glyphicon glyphicon-minus"></span>
                        </button>
                    </span>
                    <input type="text" name="sets" class="form-control input-number square" value="12" min="1" max="99">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="sets">
                            <span class="glyphicon glyphicon-plus"></span>
                        </button>
                    </span>
                </div>
            </div>
            <div class="col-md-6">
                <p class="text-center">Reps</p>
                <div class="input-group">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number"  data-type="minus" data-field="reps">
                            <span class="glyphicon glyphicon-minus"></span>
                        </button>
                    </span>
                    <input type="text" name="reps" class="form-control input-number square" value="12" min="1" max="99">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="reps">
                            <span class="glyphicon glyphicon-plus"></span>
                        </button>
                    </span>
                </div>                
            </div>
            <div class="col-md-12">
                <p>Weight used (don't forget the bar)</p>
                <div class="input-group">
                    <input type="text" name="weight" class="form-control input-sm square" placeholder="Total weight" aria-describedby="weight_label">
                    <span class="input-group-addon square" id="weight_label">
                        @if($user->pref_units == 0)
                            kg
                        @else
                            lbs
                        @endif
                    </span>
                </div>
            </div>
        </div>
        <input class="btn btn-lg btn-danger btn-block" type="submit" value="Insert">
        {{Form::token()}}
    </form>    
</div>
@stop