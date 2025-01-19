@extends('layouts.app')

@section('title', 'Edit task')

@section('styles')
<style>
	.error-message{
		color: red;
		font-size: 0.8rem;
	}
	</style>
@section('content')
	<form action="{{ route('tasks.update', ['id' => $task->id]) }}" method="post">
		@csrf
		@method('put')
		<div class="form-group">
			<label for="title">Title</label>
			<input type="text" name="title" value="{{$task->title}}" id="title" class="form-control">
			@error('title')
				<div class="error-message">{{ $message }}</div>
			@enderror
		</div>
		<div class="form-group">
			<label for="description">Description</label>
			<textarea name="description" rows="4" id="description"  class="form-control">{{$task->description}}</textarea>
			@error('description')
				<div class="error-message">{{ $message }}</div>
			@enderror
		</div>
		<div class="form-group">
			<label for="long_description">Long description</label>
			<textarea name="long_description" rows="7" id="long_description" class="form-control">{{$task->long_description}}</textarea>
			@error('long_description')
				<div class="error-message">{{ $message }}</div>
			@enderror
		</div>
		<button type="submit">Edit task</button>
	</form>
@endsection
