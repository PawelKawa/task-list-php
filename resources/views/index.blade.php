@extends('layouts.app')
	@section('title', 'Task list')
	@section('content')
	<div >
		@forelse ($tasks as $task)
		<div>
			<a href="{{route('tasks.show', ['task' => $task->id])}}" >{{ $task->title}}</a>
		</div>
		@empty
		<div>No tasks</div>
		@endforelse
	</div>
	@endsection