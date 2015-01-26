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
        <h3 class="form-signin-heading">Create New Workout</h3>
        <div class="form-group">
            Name this workout:
            <label for="name" class="sr-only">Workout Name</label>
            <input type="text" name="name" id="name" class="form-control input-sm square" placeholder="Workout Name" value="{{(Input::old('email')?Input::old('email'):'')}}" required>
            First exercise:
            <label for="exercise1" class="sr-only">Workout Name</label>
            <input type="text" name="exercise1" id="exercise1" class="form-control input-sm square" placeholder="Workout Name" value="{{(Input::old('email')?Input::old('email'):'')}}" required>
            Second exercise:
            <label for="exercise2" class="sr-only">Workout Name</label>
            <input type="text" name="exercise2" id="exercise2" class="form-control input-sm square" placeholder="Workout Name" value="{{(Input::old('email')?Input::old('email'):'')}}" required>
            Thrid exercise:
            <label for="exercise3" class="sr-only">Workout Name</label>
            <input type="text" name="exercise3" id="exercise3" class="form-control input-sm square" placeholder="Workout Name" value="{{(Input::old('email')?Input::old('email'):'')}}" required>
        
        </div>
        <div class="btn btn-danger">Add exercise</div>
        <div class="form-group">
            <input class="btn btn-lg btn-danger btn-block" type="submit" value="Insert">
            {{Form::token()}}
        </div>
    </form>    
</div>
@stop