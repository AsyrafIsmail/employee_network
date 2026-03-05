<x-layout>

<h2>Currently Available Employees</h2>
    <ul>
        @foreach ($employees as $employee)
            <li>
                <x-card href="/employees/{{ $employee['id'] }}" :highlight="$employee['skill'] > 70">
                    <h3>{{ $employee['name'] }}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>
</x-layout>
