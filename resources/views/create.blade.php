@extends('layouts.app')

@section('title', 'Add new task')

@section('styles')
<style>
	.error-message{
		color: red;
		font-size: 0.8rem;
	}
	</style>
@section('content')
	<form action="{{ route('tasks.store') }}" method="post">
		@csrf
		<div class="form-group">
			<label for="title">Title</label>
			<input type="text" name="title" id="title" value="{{old('title')}}" class="form-control">
			@error('title')
				<div class="error-message">{{ $message }}</div>
			@enderror
		</div>
		<div class="form-group">
			<label for="description">Description</label>
			<textarea name="description" id="description" value="{{old('description')}}" class="form-control"></textarea>
			@error('description')
				<div class="error-message">{{ $message }}</div>
			@enderror
		</div>
		<div class="form-group">
			<label for="long_description">Long description</label>
			<textarea name="long_description" id="long_description" value="{{old('long_description')}}" class="form-control"></textarea>
			@error('long_description')
				<div class="error-message">{{ $message }}</div>
			@enderror
		</div>
		<button type="submit">Add task</button>
	</form>
@endsection
