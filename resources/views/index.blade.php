<div>hello from blade template</div>
@isset($name)
    <div>hello {{$name}} from blade template</div>

@endisset

<div>
    @forelse ($tasks as $task)
    <div>
        <a href="{{route('tasks.show', ['id' => $task->id])}}">{{ $task->title}}</a>
    </div>
    @empty
        <div>No tasks</div>
    @endforelse
</div>
