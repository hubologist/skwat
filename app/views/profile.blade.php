@extends('layout.main')

@section('content')

<div class="panel panel-default">
    <div class="panel-body">
        <h2>Welcome, {{$user->name}}!</h2>
        <p>This is your profile page, form here you can track your lift history and log new entries.</p>
        <a href="{{URL::route('new-entry')}}" class="btn btn-danger">New entry</a>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-body">
        <h3>My lifts</h3>
        <div class="table-responsive">          
            <table class="table">
                <thead>
                    <tr>
                        <th>Weight</th>
                        <th>Sets x Reps</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($workouts as $workout)
                    <tr>
                        <td>{{$workout->weight}} {{$user->pref_units}}</td>
                        <td>{{$workout->sets}} x {{$workout->reps}}</td>
                        <td>{{date('jS M', strtotime($workout->created_at))}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop