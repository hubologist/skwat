@extends('layout.main')

@section('content')
@if($errors->has('name'))
<div class="alert alert-danger">
    @if($errors->has('name'))
    <p>{{$errors->first('name')}}</p>
    @endif
</div>
@endif
<div class="panel panel-default">
    <div class="panel-body">
        <h2>{{$workout->name}}</h2>
        <div class="table-responsive">          
            <table class="table">
                <thead>
                    <tr>
                        <th>Exercise</th>
                        @for ($i = 1; $i <= 5; $i++)
                        <th class="text-center">Set {{$i}}</th>
                        @endfor
                    </tr>
                </thead>
                <tbody>
                    @foreach($exercises as $exercise)
                    <tr>
                        <td>{{$exercise->name}}</td>
                        @for ($i = 0; $i < $exercise->sets; $i++)
                        <td class="text-center">{{$exercise->reps}}</td>
                        @endfor
                    </tr>
                    @endforeach   
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class='panel'>
    <form action="{{URL::route('workout-edit-post')}}" class="form-signin" method="post" role="form">
        <h3 class="form-signin-heading">Add exercise</h3>
        <div class="form-group">
            Which exercise
            <label for="name" class="sr-only">Exercise Name</label>
            <input type="text" name="name" id="name" class="form-control input-sm square" placeholder="Exercise Name" value="{{(Input::old('email')?Input::old('email'):'')}}" required>
        </div>
        <div class="form-group">
            How many sets (you will add the reps later)
            <div class="input-group">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-default btn-number"  data-type="minus" data-field="sets">
                        <span class="glyphicon glyphicon-minus"></span>
                    </button>
                </span>
                <span class="input-group-btn">
                    <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="sets">
                        <span class="glyphicon glyphicon-plus"></span>
                    </button>
                </span>
                <input type="text" name="sets" class="form-control input-number square" value="4" min="1" max="99">
            </div>
        </div>
        <div class="form-group">
            <input class="btn btn-lg btn-danger btn-block" type="submit" value="Add">
            {{Form::token()}}
        </div>
    </form>    
</div>
@stop