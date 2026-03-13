<x-layout>
    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        <h2>Create a New Employee</h2>

        <!-- employee Name -->
        <label for="name">Employee Name:</label>
        <input
            type="text"
            id="name"
            name="name"
            value="{{ old('name') }}"
            required
        >

        <!-- employee Strength -->
        <label for="skill">Employee Skill (0-100):</label>
        <input
            type="number"
            id="skill"
            name="skill"
            value="{{ old('skill') }}"
            required
        >

        <!-- employee Bio -->
        <label for="bio">Biography:</label>
        <textarea
            rows="5"
            id="bio"
            name="bio"
            required
        >{{ old('bio') }}</textarea>

        <!-- select a branch -->
        <label for="branch_id">Branch:</label>
        <select id="branch_id" name="branch_id" required>
            <option value="" disabled selected>Select a branch</option>
            @foreach($branches as $branch)
                <option value="{{ $branch->id }}" {{ $branch->id == old('branch_id') ? 'selected' : '' }}>
                    {{ $branch->name }}
                </option>
            @endforeach

        </select>

        <button type="submit" class="btn mt-4">Create Employee</button>

        <!-- validation errors -->
        @if ($errors->any())
            <ul class="px-4 py-4 bg-red-100">
                @foreach ($errors->all() as $error)
                    <li class="my-2 text-red-500">{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </form>
</x-layout>
