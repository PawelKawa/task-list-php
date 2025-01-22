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
  @include('component.form')
@endsection
