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
    <form action="{{URL::route('new-entry-post')}}" class="form-signin" method="post" role="form">
        <h3 class="form-signin-heading">New entry</h3>
        <div class="row">
            <div class="col-md-12">
                <strong>Number of Sets</strong>
                <div class="input-group">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" data-type="minus" data-field="sets">
                            <span class="glyphicon glyphicon-minus"></span>
                        </button>
                    </span>
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="sets">
                            <span class="glyphicon glyphicon-plus"></span>
                        </button>
                    </span>
                    <input type="text" name="sets" class="form-control input-number square" value="5" min="1" max="999">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <strong>Number of Reps</strong>
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
                <strong>Weight (with bar)</strong>
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