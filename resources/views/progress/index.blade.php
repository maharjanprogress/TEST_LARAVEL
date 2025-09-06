<x-layout>
    <h1>Progress Page</h1>
    <p>{{$greetings}}</p>
    <ul>
        {{-- looping through tasks array --}}
        <p>Loop used</p>
        @foreach ($tasks as $task) 
            <li><a href="/progress/{{ $task['id'] }}" class="btn btn-primary">{{ $task['task'] }}</a></li>
            
        @endforeach


        {{-- this is just example if not used in loop --}}
        <p>Without Loop</p>
        <li><a href="/progress/{{ $tasks[0]["id"] }}" class="btn btn-primary">{{ $tasks[0]["task"] }}</a></li>
        <li><a href="/progress/{{ $tasks[1]["id"] }}" class="btn btn-primary"> {{ $tasks[1]["task"] }}</a></li>
        <li><a href="/progress/{{ $tasks[2]["id"] }}" class="btn btn-primary">{{ $tasks[2]["task"] }}</a></li>


        {{-- loop with a card component --}}
        <p>Loop with a card component</p>
        @foreach ($tasks as $task) 
            <x-card href="/progress/{{ $task['id'] }}" :highlight="$task['id'] == 1">
                <h3>{{ $task['task'] }}</h3>
            </x-card>
        @endforeach
    </ul>
</x-layout>