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
@foreach($workouts as $workout)
<div class="panel panel-danger">
    <div class="panel-heading">
        <div class="panel-title">
            <h4>{{date("d-M", strtotime($workout->date))}}</h4>    
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-8">
                <strong>
                    {{$workout->weight}}
                    @if($user->pref_units == 0)
                    kg
                    @else
                    lbs
                    @endif
                    {{$workout->sets}}x{{$workout->reps}}
                </strong> 
            </div>
            <div class="col-md-2">
                <strong>
                    {{$workout->weight}}
                    @if($user->pref_units == 0)
                    kg
                    @else
                    lbs
                    @endif
                    {{$workout->sets}}x{{$workout->reps}}
                </strong> 
            </div>
            <div class="col-md-2">
                <strong>
                    {{$workout->weight}}
                    @if($user->pref_units == 0)
                    kg
                    @else
                    lbs
                    @endif
                    {{$workout->sets}}x{{$workout->reps}}
                </strong> 
            </div>
        </div>
    </div>


</div>
@endforeach
@stop