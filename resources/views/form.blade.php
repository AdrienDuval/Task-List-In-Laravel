@extends('Layouts.app')

@section('title', isset($task) ? 'Edit Task' : 'Add Task')

@section('content')
    {{-- {{ $errors }} --}}
    <form method="POST" action="{{ isset($task) ? route('tasks.update', ['task' => $task->id]) : route('tasks.store') }}">
        @csrf
        @isset($task)
            @method('PUT')
        @endisset
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" @class(['border-red-500' => $errors->has('title')])
                value="{{ $task->title ?? old('title') }}">
            @error('title')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="description">description:</label>
            <textarea name="description" id="description" rows="5">{{ $task->description ?? old('description') }} </textarea>
            @error('description')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="long_description">long_description:</label>
            <textarea name="long_description" id="long_description" rows="8" class="mb-4">{{ $task->long_description ?? old('long_description') }} </textarea>
            @error('long_description')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit mt-3">
            @isset($task)
                <span class="btn">Update Task</span>
            @else
                <span class="btn">Add Task</span>
            @endisset
        </button>

        <a class="btn" href="{{ route('tasks.index') }}">cancel</a>

    </form>

@endsection
