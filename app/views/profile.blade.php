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
        <h3>Workout history</h3>
    </div>
</div>
@foreach ($workouts as $workout)
<div class="panel panel-default">
    <div class="panel-body">
        <h4>{{date("d-M", strtotime($workout->date))}}</h4>
        <strong>{{$workout->weight}}{{$user->pref_units}}</strong>
    </div>
</div>
@endforeach
@stop