<x-layout>

<h2>Currently Available Employees</h2>
    <ul>
        @foreach ($employees as $employee)
            <li>
                <p>{{ $employee["name"] }}</p>
                <a href="/employees/{{  $employee["id"] }}">View Details</a>
            </li>
        @endforeach
    </ul>
</x-layout>
