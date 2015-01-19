@extends('layout.main')

@section('content')
<div class="jumbotron" id="bimbotron">
    <h1>Skwat</h1>
    <h3>The free web app that makes it dead simple to measure your progress in the gym.</h3>
    <p>Please login or create a new account to get started.</p>
    <a href="{{ URL::route('account-create') }}" class="btn btn-danger">Create new account</a>
</div>
<div class="row">
    <div class="col-sm-4">
        <div class="panel panel-default">
            <div class="panel-body">
                Create an account in seconds.
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="panel panel-default">
            <div class="panel-body">
                Add a new entry.
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="panel panel-default">
            <div class="panel-body">
                Easy to visualize information.
            </div>
        </div>
    </div>
</div>
@stop