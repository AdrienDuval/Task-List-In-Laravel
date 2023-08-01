@extends('Layouts.app')

@section('title', 'All Tasks')

@section('content')
    <nav class="mb-10">
        <a class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 transition-all duration-300 ease-in-out"
            href="{{ route('tasks.create') }}">Add Task</a>
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
