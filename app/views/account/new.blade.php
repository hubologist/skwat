@extends('layout.main')

@section('content')
<div class='panel'>
    <form action="{{URL::route('account-settings')}}" class="form-signin" method="post" role="form">
        <h3 class="form-signin-heading">New Workout</h3>
        <div class="row">
            <div class="input-group">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                        <span class="glyphicon glyphicon-minus"></span>
                    </button>
                </span>
                <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                        <span class="glyphicon glyphicon-plus"></span>
                    </button>
                </span>
            </div>
            <div class="input-group">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-danger btn-number"  data-type="minus" data-field="quant[2]">
                        <span class="glyphicon glyphicon-minus"></span>
                    </button>
                </span>
                <input type="text" name="quant[2]" class="form-control input-number" value="10" min="1" max="100">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[2]">
                        <span class="glyphicon glyphicon-plus"></span>
                    </button>
                </span>
            </div>
        </div>
        <input class="btn btn-lg btn-danger btn-block" type="submit" value="Create">
        {{Form::token()}}
    </form>    
</div>
@stop