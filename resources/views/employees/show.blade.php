<x-layout>
    <h2>{{ $employee->name }}</h2>

    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Skill level:</strong> {{ $employee->skill }}</p>
        <p><strong>About me:</strong></p>
        <p>{{ $employee->bio }}</p>
    </div>

    {{-- branch info --}}
    <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
        <h3>Branch Information</h3>
        <p><strong>Branch name:</strong> {{ $employee->branch->name }}</p>
        <p><strong>Location:</strong> {{ $employee->branch->location }}</p>
        <p><strong>About the Branch:</strong></p>
        <p>{{ $employee->branch->description }}</p>
    </div>
</x-layout>
