<h1>Blade template</h1>

{{-- @isset($task)
    @foreach ($task as $tasks)
    {{ print_r($task) }}
    @endforeach
@endisset --}}

<div class="container">

    @forelse ($task as $tasks)
        <div>
            <a href="{{ route('tasks.show', ['id' => $tasks->id]) }}"> {{ $tasks->title }} {{ $tasks->description }}</a>
        </div>
    @empty
        <div>
            <h4>the list is empty</h4>
        </div>
    @endforelse

    {{-- @if (count($task))
        @foreach ($task as $tasks)
           <div> {{ $tasks->id }} </div>
        @endforeach
    @else
        <div>there are no tasks!</div>
    @endif --}}
</div>
