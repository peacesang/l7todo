@extends('layout')

@section('content')


<div class="row">
        <div class="col-md-12">
                        
                <form action="/create/todo" method="post">
                        <input name= "todo" type="text" class="form-control input-lg" placeholder="create new todo">
                        @csrf
                </form>
                
        </div>

 
    @foreach($todos as $todo)


        {{ $todo->todo }} <a href="/todo/delete/{{$todo->id}}" class="btn btn-danger">X</a>
        <a href="/todo/update/{{$todo->id}}" class="btn btn-info">update</a>
        @if(!$todo->completed)
        <a href="/todos/completed/{{$todo->id}}" class="btn btn-info">task completed</a>
        @else
                <span class="text-success">completed</span>
        @endif


   <hr>
   <br>
   

    @endforeach

@endsection