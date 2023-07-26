@extends('Layouts.app')

@section('title', ' Blade template')

@section('content')
    <div class="container">

        @forelse ($tasks as $task)
            <div style="margin-bottom:30px;">
                <a href="{{ route('tasks.show', ['task' => $task->id]) }}"> {{ $task->title }}, <b>ID:
                        {{ $task->id }}</b></a>
            </div>
        @empty
            <div>
                <h4>the list is empty</h4>
            </div>
        @endforelse

        @if ($tasks->count())
            <nav>{{ $tasks->links() }}</nav>
        @endif

    </div>
@endsection
