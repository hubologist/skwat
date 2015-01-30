@extends('layout.main')

@section('content')

<div class="panel panel-default">
    <div class="panel-body">
        <h2>{{$user->name}}</h2>
        <p>Last weighed: {{$user->weight}} {{$user->pref_units}}</p>
        <a href="{{URL::route('new-entry')}}" class="btn btn-danger">New entry</a>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-body">
        <h3>Personal Record: {{$best}} {{$user->pref_units}}!</h3>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-body">
        <h3>History</h3>
        <table class="table">
            <thead>
                <th class="col-md-4">
                    <p class="text-danger">Date</p>
                </th>
                <th class="col-md-4">
                    <p class="text-danger">Weight</p>
                </th>
                <th class="col-md-4">
                    <p class="text-danger">Sets x Reps</p>
                </th>
            </thead>
            <tbody>
                @foreach($workouts as $workout)
                @if ($workout->weight == $best)
                <tr class="text-success">
                    <td class="">
                        <p>{{date('jS', strtotime($workout->created_at))}} {{date('M', strtotime($workout->created_at))}}</p>
                    </td>
                    <td class="">
                        <p>{{$workout->weight}} {{$user->pref_units}}</p>
                    </td>
                    <td class="">
                        <p>{{$workout->sets}} x {{$workout->reps}}</p>
                    </td>
                </tr>
                @else
                <tr class="">
                    <td class="">
                        <p>{{date('jS', strtotime($workout->created_at))}} {{date('M', strtotime($workout->created_at))}}</p>
                    </td>
                    <td class="">
                        <p>{{$workout->weight}} {{$user->pref_units}}</p>
                    </td>
                    <td class="">
                        <p>{{$workout->sets}} x {{$workout->reps}}</p>
                    </td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop