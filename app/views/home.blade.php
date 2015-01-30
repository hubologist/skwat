@extends('layout.main')

@section('content')
<div class="jumbotron" id="bimbotron">
    <h1>Skwat</h1>
    <h3>The free web app that makes it dead simple to track your squats.</h3>
    <p>Please <a href="{{URL::route('account-login')}}">login</a> or create a <a href="{{URL::route('account-create')}}">new account</a> to get started.</p>
    <a href="{{URL::route('account-create')}}" class="btn btn-danger">Create new account</a>
</div>
@stop