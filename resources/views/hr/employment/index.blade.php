@extends('layouts.hr')

@section('content')
<div class="max-w-6xl p-6 mx-auto rounded-lg shadow" style="background-color: rgba(75, 85, 99, 0.60);">
    <h2 class="mb-6 text-2xl font-semibold text-white">Employment Records</h2>

    <!-- Search and Back Button Row -->
    <div class="flex flex-col mb-4 space-y-4 md:flex-row md:items-center md:justify-between md:space-y-0">
        <!-- Search Form -->
        <form method="GET" action="{{ route('hr.hr.employment.index') }}" class="flex flex-wrap items-center space-x-2">
            <label for="search" class="text-sm text-white">Search by Name:</label>
            <input type="text" name="search" id="search" value="{{ request('search') }}"
                   placeholder="Enter employee name"
                   class="px-3 py-1 text-sm border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
            <button type="submit"
                    class="px-3 py-1 text-sm text-white bg-gray-600 rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500">
                Search
            </button>
        </form>


    </div>

    <!-- Records Table -->
    <div class="overflow-x-auto ">
        <table class="min-w-full divide-x divide-red-600 table-auto">
            <thead class="sticky top-0 z-10 bg-gray-500 ">
                <tr class="text-xs font-medium tracking-wider text-left text-white uppercase whitespace-normal ">
                    <th scope="col" class="px-4 py-2">Employee Number</th>
                    <th scope="col" class="px-4 py-2">Employee Name</th>
                    <th scope="col" class="px-4 py-2">Nationality</th>
                    <th scope="col" class="px-4 py-2">Visa Number</th>
                    <th scope="col" class="px-4 py-2">Residence Category</th>
                    <th scope="col" class="px-4 py-2">Resident No.</th>
                    <th scope="col" class="px-4 py-2">Kiwa Number</th>
                    <th scope="col" class="px-4 py-2">Date Arrival</th>
                    <th scope="col" class="px-4 py-2">Educational Background</th>
                    <th scope="col" class="px-4 py-2">Skills</th>
                    <th scope="col" class="px-4 py-2">Ticket Provided</th>
                    <th scope="col" class="px-4 py-2">Date Hired</th>
                    <th scope="col" class="px-4 py-2">Contract Expiration</th>
                    <th scope="col"class="px-4 py-2">Salary</th>
                    <th scope="col"class="px-4 py-2">Residence Renewal</th>
                    <th scope="col"class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($records as $record)
                    @php
                        $contractDate = \Carbon\Carbon::parse($record->contract_expiry_date);
                        $isExpiringSoon = $contractDate->isFuture() && now()->diffInDays($contractDate) <= 30;
                    @endphp
                    <tr class="{{ $isExpiringSoon ? 'bg-red-50' : 'hover:bg-gray-50' }}">
                        <td class="px-4 py-0 text-sm text-gray-900 whitespace-nowrap">{{ $record->employee_number }}</td>
                        <td class="px-4 py-0 text-sm text-gray-900 whitespace-nowrap">{{ $record->employee_name }}</td>
                        <td class="px-4 py-0 text-sm text-gray-900 whitespace-nowrap">{{ $record->nationality }}</td>
                        <td class="px-4 py-0 text-sm text-gray-900 whitespace-nowrap">{{ $record->visa_number }}</td>
                        <td class="px-4 py-0 text-sm text-gray-900 whitespace-nowrap">{{ $record->category_resident }}</td>
                        <td class="px-4 py-0 text-sm text-gray-900 whitespace-nowrap">{{ $record->resident_number }}</td>
                        <td class="px-4 py-0 text-sm text-gray-900 whitespace-nowrap">{{ $record->kiwa_contract_number }}</td>
                        <td class="px-4 py-0 text-sm text-gray-900 whitespace-nowrap">{{ $record->date_arrival }}</td>
                        <td class="px-4 py-0 text-sm text-gray-900 whitespace-nowrap">{{ $record->educational_background }}</td>
                        <td class="px-4 py-0 text-sm text-gray-900 whitespace-nowrap">{{ $record->skills }}</td>
                        <td class="px-4 py-0 text-sm text-gray-900 whitespace-nowrap">{{ $record->ticket_provided ? 'Yes' : 'No' }}</td>
                        <td class="px-4 py-0 text-sm text-gray-900 whitespace-nowrap">{{ $record->date_hired }}</td>
                        <td class="px-4 py-0 text-sm text-gray-900 whitespace-normal">
                            {{ $record->contract_expiry_date }}
                            @if ($isExpiringSoon)
                                <span class="block mt-1 text-xs font-semibold text-red-600">⚠ Contract expires soon</span>
                            @endif
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-900 whitespace-nowrap">${{ number_format($record->salary, 2) }}</td>
                        <td class="px-4 py-2 text-sm text-gray-900 whitespace-nowrap">{{ $record->residence_renewal }} yrs</td>
                        <td class="px-4 py-2 text-sm text-gray-900 whitespace-nowrap">
                            <div class="flex space-x-2">
                                <a href="{{ route('hr.hr.employment.edit', $record->id) }}"
                                   class="inline-flex items-center px-3 py-1 text-sm font-medium text-white bg-gray-600 rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                    Edit
                                </a>
                                <form action="{{ route('hr.hr.employment.destroy', $record->id) }}" method="POST"
                                      onsubmit="return confirm('Are you sure you want to delete this record?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="inline-flex items-center px-3 py-1 text-sm font-medium text-white bg-red-600 rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $records->links() }}
    </div>
</div>
@endsection
