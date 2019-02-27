@extends('include.app')

@section('title','todo')

@section('body')
<div class="card" style="width: 18rem; margin: 25px;">
  <div class="card-body">
    <h3 class="card-title">This is home page</h3>
    	<a href="todo/create">Add New Todo</a>
    <h4>Show todo list</h4>
    	<table>
		@foreach($showTodo as $todoList)
		<tr>
			<td>{{$todoList->title}}</td>
		</tr>
		<tr>
			<td>{{$todoList->content}}</td>
		</tr> 
		@endforeach
	</table>
  </div>
</div>
@endsection


