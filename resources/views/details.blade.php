@extends('layouts.app')
@section('title')
    My Todo App
@endsection
@section('content')

<div class="card text-center mt-5">
        <div class="card-header">
            <b>TODO DETAILS</b>
        </div>
        <div class="card-body">
            <h5 class="card-title"><h1>Title:</h1>{{$todos->name}}</h5>
            <p class="card-text"><h1>Description:</h1>{{$todos->description}}.</p>
            <a href="/edit/{{$todos->id}}"><span class="btn btn-primary">Edit</span></a>
            <a href="/delete/{{$todos->id}}"><span class="btn btn-danger">Delete</span></a>
        </div>
</div>
@endsection