@extends('layout.main')

@section('content')
@if($errors->has('name'))
<div class="alert alert-danger">
    @if($errors->has('name'))
    <p>{{$errors->first('name')}}</p>
    @endif
</div>
@endif
<div class="panel panel-default">
    <div class="panel-body">
        <h3>{{$workout->name}}</h3>
        <p>{{$workout->description}}</p>
    </div>
</div>
<div class='panel'>
    <form action="" class="form-signin" method="post" role="form">
        <h3 class="form-signin-heading">Add exercise</h3>
        <div class="form-group">
            Which exercise:
            <label for="name" class="sr-only">Exercise Name</label>
            <input type="text" name="name" id="name" class="form-control input-sm square" placeholder="Exercise Name" value="{{(Input::old('email')?Input::old('email'):'')}}" required>
        </div>
        <div class="form-group">
            How many sets?
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
        <div class="form-group">
            <input class="btn btn-lg btn-danger btn-block" type="submit" value="Add">
            {{Form::token()}}
        </div>
    </form>    
</div>
@stop