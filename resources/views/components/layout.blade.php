<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Network</title>

    @vite('resources/css/app.css');
</head>
<body>
    <header>
        <nav>
            <h1>Employee Network</h1>
            <a href="/employees">All Employees</a>
            <a href="/employees/create">Create New Employee</a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>
