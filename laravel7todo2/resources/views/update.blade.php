@extends('layout')

@section('content')
<div class="row">
        <div class="col-lg-6 col-lg-offset-3">
                <form action="/todo/save/{{$todo->id}}" method="post">
                <input name= "todo" type="text" value="{{$todo->todo}}" class="form-control input-lg" placeholder="create new todo">
                        @csrf
                </form>
                
            </div>
</div>
    

@endsection