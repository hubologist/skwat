@extends('layout.main')

@section('content')

<div class="panel panel-default">
    <div class="panel-body">
        <h1>{{$user->name}}</h1>
        <p>Member since: {{$user->created_at}}</p>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-body">
        <h2>Workout history</h2>
        <p>{{$user->created_at}}</p>
    </div>
</div>
@stop