@extends('layout.main')

@section('content')

<div class="panel panel-default">
    <div class="panel-body">
        <h2>{{$user->name}}</h2>
        <p>Member since: {{$user->created_at}}</p>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-body">
        <h3>Workouts created</h3>
        @foreach($workouts as $workout)
        <h4><a href="{{URL::route('workout', $workout->name)}}">{{$workout->name}}</a></h4>
        @endforeach
    </div>
</div>
@stop