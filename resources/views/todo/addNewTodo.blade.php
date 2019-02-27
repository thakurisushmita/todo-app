@extends('include.app')

@section('title','Add todo')


@section('body')
	<form action="{{route('todo.store')}}" method="POST">
		@csrf
		<div style="margin: 2px;">
			<label class="" for="todo_title">Title</label>
			<input type="text" name="title" id="todo_title">
		</div>
		<div>
			<label for="todo_textarea">Content</label>
			<textarea name="content" id="" cols="30" rows="10"></textarea>
		</div>
		<div class="col-sm-offset-2 col-sm-10">
		<button type="submit" name="submit">Add</button>
		</div>
	</form>

@endsection


