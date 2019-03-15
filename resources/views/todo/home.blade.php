@extends('include.app')

@section('title','todo')

@section('body')
<div>
    <h3 class="card-title">This is home page</h3>
    	<a href="todo/create">Add New Todo</a>
</div>  
<div class="card" style="/*width: 18rem;*/ margin: 25px;">
  <div class="card-body">
    <h4>Show todo list</h4>
    	<table>
				@foreach($showTodo as $todoList)
					<tr>
						<td>{{$todoList->title}}</td> 
						<td><a href="{{ route('todo.show', $todoList->id)}}" class="btn btn-info">View Task</a></td>
						<td><a href="{{ route('todo.edit', $todoList->id)}}" class="btn btn-primary">Edit Task</a></td> 
						<td><a href="{{ route('todo.destroy', $todoList->id)}}" class="btn btn-danger">Delete</a></td>
						
					</tr>
					 
					
				@endforeach
			</table>
  </div>
</div>
@endsection


