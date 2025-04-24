@extends('layouts.app')

@section('content')
<div class="container p-6 mx-auto">
    <div class="p-6 mb-6 bg-white rounded shadow-md">
        <div class="flex items-center justify-between mb-4">
            <div>
                <h1 class="mb-1 text-3xl font-bold text-gray-800">Payroll Records</h1>
                <p class="text-gray-600">List of employee payrolls will appear here.</p>
            </div>

            <div class="mb-4">
                <a href="{{ route('hr.dashboard') }}" class="inline-block px-4 py-2 text-black bg-gray-600 rounded hover:bg-gray-700">
                    ← Back to HR Dashboard
                </a>
            </div>

            <a href="{{ route('hr.payroll.create') }}"
               class="inline-block px-4 py-2 text-black bg-indigo-600 rounded hover:bg-indigo-700">
                ➕ Create Payroll
            </a>
        </div>

        @if(session('success'))
            <div class="p-4 mb-4 text-green-800 bg-green-100 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 divide-y divide-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left">No.</th>
                        <th class="px-4 py-2 text-left">Employee</th>
                        <th class="px-4 py-2 text-left">Month</th>
                        <th class="px-4 py-2 text-left">Basic Salary</th>
                        <th class="px-4 py-2 text-left">Allowances</th>
                        <th class="px-4 py-2 text-left">Deductions</th>
                        <th class="px-4 py-2 text-left">Overtime Hours</th>
                        <th class="px-4 py-2 text-left">Overtime Rate</th>
                        <th class="px-4 py-2 text-left">Overtime Pay</th>
                        <th class="px-4 py-2 text-left">Bonus</th>
                        <th class="px-4 py-2 text-left">Net Salary</th>
                        <th class="px-4 py-2 text-left">Remarks</th>
                        <th class="px-4 py-2 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($payrolls as $payroll)
                        <tr>
                            <td class="px-4 py-2">{{ $payroll->id }}</td>
                            <td class="px-4 py-2">{{ $payroll->employee->employee_name }}</td>
                            <td class="px-4 py-2">{{ $payroll->month }}</td>
                            <td class="px-4 py-2">{{ $payroll->basic_salary }}</td>
                            <td class="px-4 py-2">{{ $payroll->allowances }}</td>
                            <td class="px-4 py-2">{{ $payroll->deductions }}</td>
                            <td class="px-4 py-2">{{ $payroll->overtime_hours }}</td>
                            <td class="px-4 py-2">{{ $payroll->overtime_rate }}</td>
                            <td class="px-4 py-2">{{ $payroll->overtime_pay }}</td>
                            <td class="px-4 py-2">{{ $payroll->bonus }}</td>
                            <td class="px-4 py-2">{{ $payroll->net_salary }}</td>
                            <td class="px-4 py-2">{{ $payroll->remarks }}</td>
                            <td class="px-4 py-2">
                                <a href="{{ route('hr.payroll.edit', $payroll->id) }}"
                                   class="text-indigo-600 hover:underline">Edit</a>
                                <form action="{{ route('hr.payroll.destroy', $payroll->id) }}" method="POST" class="inline-block ml-2" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-4 py-4 text-center text-gray-500">No payroll records found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $payrolls->links() }}
        </div>
    </div>
</div>
@endsection
