@extends('Layouts.app')

@section('title', 'All Tasks')

@section('content')
    <nav class="mb-10">
        <a class="font-medium text-gray-700 underline decoration-pink-500" href="{{ route('tasks.create') }}">Add Task</a>
    </nav>

    <div class="container-element">

        @forelse ($tasks as $task)
            <div>
                <a href="{{ route('tasks.show', ['task' => $task->id]) }}"
                    @class(['text-lg capitalize', 'line-through' => $task->completed])>{{ $task->title }}</a>
            </div>
        @empty
            <div>
                <h4>the list is empty</h4>
            </div>
        @endforelse

        @if ($tasks->count())
            <nav class="mb-4">{{ $tasks->links() }}</nav>
        @endif

    </div>
@endsection
