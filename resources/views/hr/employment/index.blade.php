@extends('layouts.app')

@section('content')
<div class="p-4 mx-auto bg-white rounded shadow">
    <h2 class="mb-6 text-2xl font-bold">Employment Records</h2>

    <!-- Search and Back Button Row -->
<div class="flex items-center justify-between mb-4">
    <!-- Search Form -->
    <form method="GET" action="{{ route('hr.hr.employment.index') }}" class="flex items-center space-x-4">
        <label for="search" class="text-gray-700">Search by Name:</label>
        <input type="text" name="search" id="search" value="{{ request('search') }}"
               placeholder="Enter employee name"
               class="px-3 py-1 border rounded shadow-sm focus:outline-none focus:ring focus:border-blue-300">

        <button type="submit" class="px-4 py-1 text-white bg-blue-600 rounded hover:bg-blue-700">
            Search
        </button>
    </form>

    <!-- Back Button -->
    <a href="{{ route('hr.dashboard') }}"
       class="px-4 py-2 text-sm font-semibold text-white bg-gray-600 rounded-md hover:bg-gray-700">
        ← Back
    </a>
</div>


    <!-- Records Table -->
    <table class="min-w-full text-sm table-auto">
        <thead>
            <tr class="text-left bg-gray-100">
                <th class="px-4 py-2">Employee Name</th>
                <th class="px-4 py-2">Employee Number</th>
                <th class="px-4 py-2">Nationality</th>
                <th class="px-4 py-2">Visa Number</th>
                <th class="px-4 py-2">Residence Category</th>
                <th class="px-4 py-2">Kiwa Number</th>
                <th class="px-4 py-2">Date Arrival</th>
                <th class="px-4 py-2">Educational Background</th>
                <th class="px-4 py-2">Skills</th>
                <th class="px-4 py-2">Ticket Provide</th>
                <th class="px-4 py-2">Date Hired</th>
                <th class="px-4 py-2">Salary</th>
                <th class="px-4 py-2">Residence Renewal</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($records as $record)
            <tr class="border-t">
                <td class="px-4 py-2">{{ $record->employee_name }}</td>
                <td class="px-4 py-2">{{ $record->employee_number }}</td>
                <td class="px-4 py-2">{{ $record->nationality }}</td>
                <td class="px-4 py-2">{{ $record->visa_number }}</td>
                <td class="px-4 py-2">{{ $record->category_resident }}</td>
                <td class="px-4 py-2">{{ $record->kiwa_contract_number }}</td>
                <td class="px-4 py-2">{{ $record->date_arrival }}</td>
                <td class="px-4 py-2">{{ $record->educational_background }}</td>
                <td class="px-4 py-2">{{ $record->skills }}</td>
                <td class="px-4 py-2">{{ $record->ticket_provided ? 'Yes' : 'No' }}</td>
                <td class="px-4 py-2">{{ $record->date_hired }}</td>
                <td class="px-4 py-2">${{ $record->salary }}</td>
                <td class="px-4 py-2">{{ $record->residence_renewal }} years</td>
                <td class="w-48 px-4 py-2">
                    <a href="{{ route('hr.hr.employment.edit', $record->id) }}"
                       class="inline-block px-5 py-2 text-sm font-semibold text-white bg-blue-600 rounded-md hover:bg-blue-700">Edit</a>

                    <form action="{{ route('hr.hr.employment.destroy', $record->id) }}" method="POST"
                          class="inline-block" onsubmit="return confirm('Are you sure you want to delete this record?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="px-5 py-2 text-sm font-semibold text-white bg-red-600 rounded-md hover:bg-red-700">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="mt-4">
        {{ $records->links() }}
    </div>
</div>
@endsection
