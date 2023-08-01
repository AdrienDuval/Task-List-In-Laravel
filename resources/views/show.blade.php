@extends('Layouts.app')

@section('title', $task->title)

@section('content')
    <a class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm mb-4 capitalize inline-flex px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900 transition-all duration-300 ease-in-out mt-4"
        href="{{ route('tasks.index') }}">Back to all tasks</a>
    <p class="mb-4 text-slate-700">{{ $task->description }}</p>
    @if ($task->long_description)
        <p class="mb-4 text-slate-700">{{ $task->long_description }} </p>
    @else
        <p class="mb-4 text-slate-700">No long_description </p>
    @endif

    @if ($task->completed)
        <p class="text-green-600 font-medium capitalize">
            completed</p>
    @else
        <span class="text-red-600 font-medium capitalize">not
            completed</span>
    @endif

    <p class="mb-4 text-sm text-slate-500">Created {{ $task->created_at->diffForHumans() }} <span class="text-4xl">.</span>
        Updated {{ $task->updated_at->diffForHumans() }}
    </p>
    <div>
        <a class="btn text-yellow-500" href="{{ route('tasks.edit', ['task' => $task]) }}">edit</a>
    </div>
    <div>
        <form action="{{ route('tasks.toggle-complete', ['task' => $task]) }}" method="POST">
            @csrf
            @method('PUT')
            <button class="btn text-purple-500" type="submit">Mark as
                {{ $task->completed ? 'Incompleted' : 'Completed' }}</button>
        </form>
    </div>

    <div>
        <form action="{{ route('tasks.destroy', ['task' => $task]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn text-red-500" type="submit">Delete</button>
        </form>
    </div>
@endsection
