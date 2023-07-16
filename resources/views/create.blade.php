@extends('Layouts.app')

@section('title', 'Add Task')

@section('content')
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title">
        </div>

        <div>
            <label for="description">description:</label>
            <textarea name="description" id="description" rows="5"> </textarea>
        </div>

        <div>
            <label for="long_description">long_description:</label>
            <textarea name="long_description" id="long_description" rows="10"> </textarea>
        </div>
        
        <button type="submit">Add Task</button>

    </form>

@endsection