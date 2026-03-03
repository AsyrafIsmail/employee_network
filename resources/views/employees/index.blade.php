<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Network | Home</title>
</head>
<body>
    <h2>Currently Available Employees</h2>
    <p>{{ $greeting }}</p>
    <ul>
        <li>
            <a href="/employees/{{ $employees[0]["id"] }}">
                {{ $employees[0]["name"] }}
            </a>
        </li>
        <li>
            <a href="/employees/{{ $employees[1]["id"] }}">
                {{ $employees[1]["name"] }}
            </a>
        </li>
    </ul>
</body>
</html>
