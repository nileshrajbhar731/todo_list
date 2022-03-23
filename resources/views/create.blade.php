@extends('layouts.app')

@section('title')
    Create Todo
@endsection

@section('content')

<div class="card text-center mt-5">
        <div class="card-header">
            <b>TODO CREATE</b>
        </div>
        <div class="card-body">
        <form action="store" method="post" class=" p-4">
    @csrf
        <div class="form-group m-3">
            <label for="name">Todo Title</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group m-3">
            <label for="description">Todo Description</label>
            <textarea class="form-control" name="description" rows="3"></textarea>
        </div>
        <div class="form-group m-3">
            <input type="submit" class="btn btn-primary float-end" value="Submit">
        </div>
    </form>

        </div>
</div>
    
@endsection