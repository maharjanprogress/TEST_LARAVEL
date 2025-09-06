<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progress | Home</title>
</head>
<body>
    <h1>Progress Page</h1>
    <p>{{$greetings}}</p>
    <ul>
        <li><a href="/progress/{{ $tasks[0]["id"] }}" class="btn btn-primary">{{ $tasks[0]["task"] }}</a></li>
        <li><a href="/progress/{{ $tasks[1]["id"] }}" class="btn btn-primary"> {{ $tasks[1]["task"] }}</a></li>
        <li><a href="/progress/{{ $tasks[2]["id"] }}" class="btn btn-primary">{{ $tasks[2]["task"] }}</a></li>
    </ul>
</body>
</html>