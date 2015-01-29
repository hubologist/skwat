@extends('layout.main')

@section('content')
<div class="jumbotron" id="bimbotron">
    <h1>Skwat</h1>
    <h3>The free web app that makes it dead simple to track your lifts.</h3>
    <p>Please <a href="{{URL::route('account-login')}}">login</a> or create a <a href="{{URL::route('account-create')}}">new account</a> to get started.</p>
    <a href="{{URL::route('account-create')}}" class="btn btn-danger">Create new account</a>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-body">
                Create an account in seconds.
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-body">
                Add a new entry.
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-body">
                Easy to visualize information.
            </div>
        </div>
    </div>
</div>
@stop