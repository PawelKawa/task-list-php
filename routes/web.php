<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('tasks/', function () {
    return view('index', [ 
		'tasks' => \App\Models\Task::all()
    ]);
})->name('tasks.index');

Route::get('task/{id}', function ($id) {
	return view('show', [
		'task' => \App\Models\Task::findOrFail($id)
	]);
})->name('tasks.show');

Route::view('/tasks/create', 'create')->name('tasks.create');

Route::post('/tasks', function (Request $request) {
	// dd($request->all());
	$data = $request->validate([
		'title' => 'required|min:3|max:255',
		'description' => 'required|min:3',
		'long_description' => 'required'
	]);
	$task = new \App\Models\Task();
	$task->title = $data['title'];
	$task->description = $data['description'];
	$task->long_description = $data['long_description'];
	$task->save();
	return redirect()->route('tasks.show', ['id' => $task->id]);
})->name('tasks.store');
Route::fallback(function () {
    return 'We dont have that route';
});