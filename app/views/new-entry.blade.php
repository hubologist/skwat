@extends('layout.main')

@section('content')
<div class='panel'>
    <form action="{{URL::route('new-entry')}}" class="form-signin" method="post" role="form">
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
        <div class="row">
            <div class="col-md-12">
                <strong>Lift</strong>
                <div class="row">
                    @foreach($exercises as $exercise)
                    <div class="col-sm-6">
                        <div class="radio">
                            <label>
                                <input type="radio" name="exercise" value="{{$exercise->name}}">{{$exercise->name}}                              
                            </label>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <input class="btn btn-lg btn-danger btn-block" type="submit" value="Submit">
        {{Form::token()}}
    </form>    
</div>
@stop