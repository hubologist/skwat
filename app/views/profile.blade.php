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
                        <th>Exercise</th>
                        <th class="text-center">Weight</th>
                        <th class="text-center">Reps</th>
                        <th class="text-center">Last trained</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Bench Press</td>
                        <td class="text-center">500kg</td>
                        <td class="text-center">12</td>
                        <td class="text-center">Yesterday</td>
                    </tr> 
                    <tr>
                        <td>Deadlift</td>
                        <td class="text-center">500kg</td>
                        <td class="text-center">12</td>
                        <td class="text-center">Yesterday</td>
                    </tr> 
                    <tr>
                        <td>Squat</td>
                        <td class="text-center">500kg</td>
                        <td class="text-center">12</td>
                        <td class="text-center">Yesterday</td>
                    </tr> 
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop