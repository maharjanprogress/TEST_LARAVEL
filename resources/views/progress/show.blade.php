<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showing {{$id}}</title>
</head>
<body>
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

    <a href="/progress" class="btn btn-primary">Go Back</a>
</body>
</html>