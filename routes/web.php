<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Requests\TaskRequest;


Route::get('tasks/', function () {
	return view('index', [ 
		'tasks' => \App\Models\Task::all()
    ]);
})->name('tasks.index');

Route::view('/tasks/create', 'create')->name('tasks.create');
Route::post('/tasks', function (TaskRequest $request) {
	$task = Task::create($request->validated());
	return redirect()->route('tasks.show', ['task' => $task->id])
	->with('msg', 'Task created!');
})->name('tasks.store');

Route::get('tasks/{task}', function (Task $task) {
	return view('show', [
		'task' => $task
	]);
})->name('tasks.show');

Route::get('tasks/{task}/edit', function (Task $task) {
	return view('edit', [
		'task' => $task
	]);
})->name('tasks.edit');

Route::put('/task/{task}', function (Task $task, TaskRequest $request) {
    $task->update($request->validated());
    return redirect()->route('tasks.show', ['task' => $task->id])
        ->with('msg', 'Task Updated!');
})->name('tasks.update');



Route::fallback(function () {
    return 'We dont have that route';
});