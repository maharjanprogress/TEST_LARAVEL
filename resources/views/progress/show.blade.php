<x-layout>
    <h1>
        Showing {{$id}}...
    </h1>
    @if ($id == 1)
        <h2>This is your first task</h2>
        @php
            $task = "Very much Complete";
        @endphp
        
    @endif

    <h2>
        This is Status of the task: {{$task}}.
    </h2>

    <form action="{{ route('progress.destroy', $id) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>


    <a href="/progress" class="btn btn-primary">Go Back</a>
</x-layout>