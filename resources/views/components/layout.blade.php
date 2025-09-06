<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base Layout</title>
</head>
<body>
    <header>
        <h1>Laravel Progress</h1>
        <nav>
            <a href="/">Home</a> |
            <a href="/progress">Progress</a> |
            <a href="/progress/create">Create Progress</a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>