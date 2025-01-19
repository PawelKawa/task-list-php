@extends('layouts.app')

@section('title', 'Add new task')

@section('content')
{{$errors}}
	<form action="{{ route('tasks.store') }}" method="post">
		@csrf
		<div class="form-group">
			<label for="title">Title</label>
			<input type="text" name="title" id="title" class="form-control">
		</div>
		<div class="form-group">
			<label for="description">Description</label>
			<textarea name="description" id="description" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label for="long_description">Long description</label>
			<textarea name="long_description" id="long_description" class="form-control"></textarea>
		</div>
		<button type="submit">Add task</button>
	</form>
@endsection
