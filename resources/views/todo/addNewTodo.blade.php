@extends('include.app')

@section('title','Add todo')


@section('body')
	<form action="{{route('todo.store')}}" method="POST">
		@csrf
		<div style="margin: 10px; width: 25%;">
			<h2>Add a New Task</h2>
			<label class="" for="todo_title">Title:</label>
			<input type="text" class="form-control" name="title" id="todo_title">
	
		<div>
			<label for="todo_textarea">Description:</label>
			<textarea name="content" class="form-control" id="" cols="30" rows="10"></textarea>
		</div>
			</div>
		<div class="col-sm-offset-2 col-sm-10">
		<button type="submit" name="submit">Create New Task</button>
		</div>
	</form>

@endsection 
     


