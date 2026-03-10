<x-layout>
    <h2>{{ $employee->name }}</h2>

    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Skill level:</strong> {{ $employee->skill }}</p>
        <p><strong>About me:</strong></p>
        <p>{{ $employee->bio }}</p>
    </div>
</x-layout>
