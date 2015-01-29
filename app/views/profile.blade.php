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
        <h3>My lifts</h3>
        <div class="table-responsive">          
            <table class="table">
                <thead>
                    <tr>
                        <th>Exercise</th>
                        <th class="text-center">Max weight</th>
                        <th class="text-center">Repetitions</th>
                        <th class="text-center">Last trained</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lifts as $lift)
                    @if($user->$lift == 1)
                    <tr>
                        <td>{{$lift}}</td>
                        <td class="text-center">500kg</td>
                    </tr>
                    @endif
                    @endforeach   
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop