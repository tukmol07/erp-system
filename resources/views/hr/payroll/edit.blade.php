@extends('layouts.app')

@section('content')

<style>
    .btn-custom {
        padding: 0.75rem 1.5rem;
        border-radius: 0.375rem;
        background-color: #4c51bf;
        color: white;
        font-weight: 600;
        transition: background-color 0.2s ease, transform 0.2s ease;
    }

    .btn-custom:hover {
        background-color: #434190;
        transform: translateY(-2px);
    }

    .btn-custom:focus {
        outline: none;
        box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.5); /* Focus ring */
    }

    .btn-custom:active {
        background-color: #333366;
        transform: translateY(1px);
    }

    .btn-back {
        padding: 0.75rem 1.5rem;
        border-radius: 0.375rem;
        background-color: #e53e3e; /* Red color */
        color: white;
        font-weight: 600;
        transition: background-color 0.2s ease, transform 0.2s ease;
    }

    .btn-back:hover {
        background-color: #c53030; /* Darker red for hover effect */
        transform: translateY(-2px);
    }

    .btn-back:focus {
        outline: none;
        box-shadow: 0 0 0 2px rgba(239, 68, 68, 0.5); /* Focus ring */
    }

    .btn-back:active {
        background-color: #9b2c2c; /* Darker red for active state */
        transform: translateY(1px);
    }
</style>

<div class="container max-w-4xl p-6 mx-auto mt-6 bg-white rounded shadow">
    <h2 class="mb-4 text-2xl font-bold">Edit Payroll Record</h2>

    <form action="{{ route('hr.payroll.update', $payroll->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <!-- Employee Dropdown -->
            <div>
                <label for="employee_id" class="block text-sm font-medium">Employee</label>
                <select name="employee_id" id="employee_id" class="w-full p-2 text-black border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <option value="" disabled>Select Employee</option>
                    @foreach($employees as $employee)
                        <option value="{{ $employee->id }}" {{ $payroll->employee_id == $employee->id ? 'selected' : '' }}>{{ $employee->employee_name }}</option>
                    @endforeach
                </select>
            </div>


            <div>
                <label for="month" class="block text-sm font-medium">Month</label>
                <input type="text" name="month" value="{{ old('month', $payroll->month) }}" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label for="basic_salary" class="block text-sm font-medium">Basic Salary</label>
                <input type="number" name="basic_salary" value="{{ old('basic_salary', $payroll->basic_salary) }}" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label for="allowances" class="block text-sm font-medium">Allowances</label>
                <input type="number" name="allowances" value="{{ old('allowances', $payroll->allowances) }}" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label for="deductions" class="block text-sm font-medium">Deductions</label>
                <input type="number" name="deductions" value="{{ old('deductions', $payroll->deductions) }}" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label for="overtime_hours" class="block text-sm font-medium">Overtime Hours</label>
                <input type="number" name="overtime_hours" value="{{ old('overtime_hours', $payroll->overtime_hours) }}" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label for="bonus" class="block text-sm font-medium">Bonus</label>
                <input type="number" step="0.01" name="bonus" value="{{ old('bonus', $payroll->bonus) }}" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
        </div>

        <div class="mt-4">
            <label for="remarks" class="block text-sm font-medium">Remarks</label>
            <textarea name="remarks" rows="3" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">{{ old('remarks', $payroll->remarks) }}</textarea>
        </div>

        <div class="flex justify-between gap-4 mt-6 text-sm">
            <a href="{{ route('hr.payroll.index') }}" class="px-3 py-1 text-white bg-gray-600 rounded hover:bg-gray-700">Back</a>
            <button type="submit" class="px-3 py-1 text-white bg-indigo-600 rounded hover:bg-indigo-700">Update</button>
        </div>
    </div>
</form>
    </form>
</div>
@endsection
