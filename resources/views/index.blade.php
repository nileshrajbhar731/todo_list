@extends('layouts.app')
@section('title')
    My Todo App
@endsection
@section('content')

    <div class="row mt-3">
        <div class="col-12 align-self-center">
            <ul class="list-group">
                @foreach($todos as $todo )
                    <li class="list-group-item">
                        <div class="row">
                            
                            <div class="col-md-4">
                              <label for="">Title</label>  
                            <p><a href="details/{{$todo->id}}" style="color: cornflowerblue">{{$todo->name}}</a></p>
                            <label for="">Description</label>  
                            <p><a href="details/{{$todo->id}}" style="color: cornflowerblue">{{$todo->description}}</a></p>
                        
                            </div>
                            <div class="col-md-6">
                            <label for="">Created</label>  
                            <p>{{$todo->created_at}}</p>
                            <a href="/edit/{{$todo->id}}"><span class="btn btn-primary">Edit</span></a>
           
                        <!-- id, created_at, updated_at, name, description -->
                            </div>
                            <div class="col-md-2">
                            <label for="">Updated</label>  
                            <p>{{$todo->updated_at}}</p>
                            <a href="/delete/{{$todo->id}}"><span class="btn btn-danger">Delete</span></a>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <!-- <div class="row">
        
    </div>
<div class="card">
    <div class="card-header">
        Header
    </div>
    <div class="card-body">
        <h5 class="card-title">Title</h5>
        <p class="card-text">Content</p>
    </div>
    <div class="card-footer">
        Footer
    </div>
</div> -->
@endsection