@extends('layouts.app')

@section('content')
<div class="p-4 mx-auto bg-white rounded shadow">
    <h2 class="mb-6 text-2xl font-bold">Employment Records</h2>

    <!-- Search and Back Button Row -->
<div class="flex items-center justify-between mb-4 text-sm">
    <!-- Search Form -->
    <form method="GET" action="{{ route('hr.hr.employment.index') }}" class="flex items-center space-x-4">
        <label for="search" class="text-gray-700">Search by Name:</label>
        <input type="text" name="search" id="search" value="{{ request('search') }}"
               placeholder="Enter employee name"
               class="px-3 py-1 border rounded shadow-sm focus:outline-none focus:ring focus:border-blue-300">

        <button type="submit" class="px-3 py-1 text-white bg-green-600 rounded hover:bg-green-700">
            Search
        </button>
    </form>

    <!-- Back Button -->
    <a href="{{ route('hr.dashboard') }}"
       class="px-3 py-1 text-sm font-semibold text-white bg-gray-600 rounded-md hover:bg-gray-700">
        Back
    </a>
</div>


    <!-- Records Table -->
    <table class="min-w-full text-sm table-auto">
        <thead>
            <tr class="text-left bg-gray-100">
                <th class="px-3 py-1">Employee Name</th>
                <th class="px-3 py-1">Employee Number</th>
                <th class="px-3 py-1">Nationality</th>
                <th class="px-3 py-1">Visa Number</th>
                <th class="px-3 py-1">Residence Category</th>
                <th class="px-3 py-1">Kiwa Number</th>
                <th class="px-3 py-1">Date Arrival</th>
                <th class="px-3 py-1">Educational Background</th>
                <th class="px-3 py-1">Skills</th>
                <th class="px-3 py-1">Ticket Provide</th>
                <th class="px-3 py-1">Date Hired</th>
                <th class="px-3 py-1">Salary</th>
                <th class="px-3 py-1">Residence Renewal</th>
                <th class="px-3 py-1">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($records as $record)
            <tr class="border-t">
                <td class="px-3 py-1">{{ $record->employee_name }}</td>
                <td class="px-3 py-1">{{ $record->employee_number }}</td>
                <td class="px-3 py-1">{{ $record->nationality }}</td>
                <td class="px-3 py-1">{{ $record->visa_number }}</td>
                <td class="px-3 py-1">{{ $record->category_resident }}</td>
                <td class="px-3 py-1">{{ $record->kiwa_contract_number }}</td>
                <td class="px-3 py-1">{{ $record->date_arrival }}</td>
                <td class="px-3 py-1">{{ $record->educational_background }}</td>
                <td class="px-3 py-1">{{ $record->skills }}</td>
                <td class="px-3 py-1">{{ $record->ticket_provided ? 'Yes' : 'No' }}</td>
                <td class="px-3 py-1">{{ $record->date_hired }}</td>
                <td class="px-3 py-1">${{ $record->salary }}</td>
                <td class="px-3 py-1">{{ $record->residence_renewal }} years</td>
                <td class="w-48 px-3 py-1">
                    <a href="{{ route('hr.hr.employment.edit', $record->id) }}"
                       class="inline-block px-3 py-1 text-sm font-semibold text-white bg-green-600 rounded-md hover:bg-green-700">Edit</a>

                    <form action="{{ route('hr.hr.employment.destroy', $record->id) }}" method="POST"
                          class="inline-block" onsubmit="return confirm('Are you sure you want to delete this record?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="px-3 py-1 text-sm font-semibold text-white bg-gray-600 rounded-md hover:bg-red-700">Delete</button>
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
