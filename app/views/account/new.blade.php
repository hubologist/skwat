@extends('layout.main')

@section('content')
<div class='panel'>
    <form action="{{URL::route('account-settings')}}" class="form-signin" method="post" role="form">
        <h3 class="form-signin-heading">New Workout</h3>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <p>Workout name</p>
                <div class="form-group">
                    <input type="text" name="name" id="name" class="square form-control input-sm" placeholder="{{$user->name}}" value="{{$user->name}}">
                </div>
            </div>
            <div class="col-md-6">
                <p>Reps</p>
                <div class="input-group">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                            <span class="glyphicon glyphicon-minus"></span>
                        </button>
                    </span>
                    <input type="text" name="quant[1]" class="form-control input-number square" value="12" min="1" max="99">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                            <span class="glyphicon glyphicon-plus"></span>
                        </button>
                    </span>
                </div>
            </div>
            <div class="col-md-6">
                <p>Sets</p>
                <div class="input-group">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number"  data-type="minus" data-field="quant[2]">
                            <span class="glyphicon glyphicon-minus"></span>
                        </button>
                    </span>
                    <input type="text" name="quant[2]" class="form-control input-number square" value="12" min="1" max="99">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[2]">
                            <span class="glyphicon glyphicon-plus"></span>
                        </button>
                    </span>
                </div>                
            </div>
        </div>
        <input class="btn btn-lg btn-danger btn-block" type="submit" value="Create">
        {{Form::token()}}
    </form>    
</div>
@stop