@extends('layout.main')

@section('content')
@if($errors->has('name'))
<div class="alert alert-danger">
    @if($errors->has('name'))
    <p>{{$errors->first('name')}}</p>
    @endif
</div>
@endif
<div class='panel'>
    <form action="{{URL::route('create-workout-post')}}" class="form-signin" method="post" role="form">
        <h3 class="form-signin-heading">Create New Workout</h3>
        <div class="row">
            <div class="col-md-12">
                <strong>Choose a name for your new workout plan</strong>
                <label for="name" class="sr-only">Workout Name</label>
                <input type="text" name="name" id="name" class="form-control input-sm square" placeholder="Workout Name" value="{{(Input::old('name')?Input::old('name'):'')}}" required>
            </div>
        </div>
        <input class="btn btn-lg btn-danger btn-block" type="submit" value="Create">
        {{Form::token()}}  
    </form>    
</div>
@stop