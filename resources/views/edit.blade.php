@extends('layouts.app')
@section('title')
    My Todo App
@endsection
@section('content')

<div class="card text-center mt-5">
        <div class="card-header">
            <b>TODO EDIT</b>
        </div>
        <div class="card-body">
        <form action="/update/{{$todos->id}}" method="post" class=" p-4">
        @csrf
        <div class="form-group m-3">
            <label for="name">Todo Title</label>
            <input type="text" class="form-control" value="{{$todos->name}}" name="name">
        </div>
        <div class="form-group m-3">
            <label for="description">Todo Description</label>
            <textarea class="form-control" name="description" rows="3"> {{$todos->description}} </textarea>
        </div>
        <div class="form-group m-3">
            <input type="submit" class="btn btn-primary float-end" value="Submit">
        </div>
    </form>

        </div>
</div>
    @endsection
