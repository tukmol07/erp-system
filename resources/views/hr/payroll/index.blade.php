@extends('layouts.hr')

@section('content')
<div class="container p-4 mx-auto text-sm">
<div class=" p-6 mx-auto rounded-lg shadow" style="background-color: rgba(75, 85, 99, 0.60);">
        <div class="flex items-center justify-between mb-2">
            <div>
                <h1 class="mb-1 text-3xl font-bold text-white">Payroll Records</h1>
            </div>

            <div class="flex mb-4 space-x-4">
                <a href="{{ route('hr.payroll.create') }}"
                   class="inline-block px-3 py-1 text-white bg-gray-600 rounded hover:bg-gray-700">
                    ➕ Create Payroll
                </a>

            </div>
        </div>

        <form action="{{ route('hr.payroll.index') }}" method="GET" class="flex items-center space-x-4 text-sm">
            <label for="month" class="text-white">Month:</label>
            <select name="month" id="month" class="px-2 py-1 border rounded">
                <option value="">Month</option>
                @foreach(['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'] as $month)
                    <option value="{{ $month }}" {{ request('month') == $month ? 'selected' : '' }}>
                        {{ $month }}
                    </option>
                @endforeach
            </select>

            <label for="search" class="text-white">Employee Name:</label>
            <input type="text" name="search" id="search" value="{{ request('search') }}" class="px-2 py-1 border rounded" placeholder="Search by name">

            <button type="submit" class="px-2 py-1 text-white bg-white rounded hover:bg-gray-700">Search</button>
        </form>
        @if(session('success'))
            <div class="p-4 mb-4 text-green-800 bg-green-100 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="mt-4 verflow-x-auto" >
            <table class="min-w-full text-sm bg-white border border-gray-200 divide-y divide-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-3 py-1 text-left">No.</th>
                        <th class="px-3 py-1 text-left">Employee</th>
                        <th class="px-3 py-1 text-left">Month</th>
                        <th class="px-3 py-1 text-left">Basic Salary</th>
                        <th class="px-3 py-1 text-left">Allowances</th>
                        <th class="px-3 py-1 text-left">Deductions</th>
                        <th class="px-3 py-1 text-left">Overtime Hours</th>
                        <th class="px-3 py-1 text-left">Overtime Rate</th>
                        <th class="px-3 py-1 text-left">Overtime Pay</th>
                        <th class="px-3 py-1 text-left">Bonus</th>
                        <th class="px-3 py-1 text-left">Net Salary</th>
                        <th class="px-3 py-1 text-left">Remarks</th>
                        <th class="px-3 py-1 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($payrolls as $payroll)
                        <tr class="border-t hover:bg-gray-100">
                            <td class="px-3 py-1">{{ $payroll->id }}</td>
                            <td class="px-3 py-1">{{ optional($payroll->employee)->employee_name ?? 'N/A' }}</td>
                            <td class="px-3 py-1">{{ $payroll->month }}</td>
                            <td class="px-3 py-1">{{ number_format($payroll->basic_salary, 2) }}</td>
                            <td class="px-3 py-1">{{ number_format($payroll->allowances, 2) }}</td>
                            <td class="px-3 py-1">{{ number_format($payroll->deductions, 2) }}</td>
                            <td class="px-3 py-1">{{ $payroll->overtime_hours }}</td>
                            <td class="px-3 py-1">{{ number_format($payroll->overtime_rate, 2) }}</td>
                            <td class="px-3 py-1">{{ number_format($payroll->overtime_pay, 2) }}</td>
                            <td class="px-3 py-1">{{ number_format($payroll->bonus, 2) }}</td>
                            <td class="px-3 py-1">{{ number_format($payroll->net_salary, 2) }}</td>
                            <td class="px-3 py-1">{{ $payroll->remarks }}</td>
                            <td class="flex px-3 py-1 space-x-2">
                                <a href="{{ route('hr.payroll.edit', $payroll->id) }}"
                                    class="inline-block px-3 py-1 text-sm font-semibold text-white bg-gray-600 rounded-md hover:bg-gray-700">Edit</a>

                                <form action="{{ route('hr.payroll.destroy', $payroll->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-3 py-1 text-white bg-red-600 rounded hover:bg-red-700">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="13" class="px-4 py-4 text-center text-gray-500">No payroll records found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination Links -->
        <div class="mt-4">
            {{ $payrolls->links() }}
        </div>
    </div>
</div>
@endsection
