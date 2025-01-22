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
  @include('component.form', ['task' => $task])
@endsection
