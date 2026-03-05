<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Network | Home</title>
</head>
<body>
    <h2>Currently Available Employees</h2>



    <ul>
        @foreach ($employees as $employee)
            <li>
                <p>{{ $employee["name"] }}</p>
                <a href="/employees/{{  $employee["id"] }}">View Details</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
