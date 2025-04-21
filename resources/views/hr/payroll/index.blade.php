@extends('layouts.app')

@section('content')
<div class="container p-6 mx-auto">
    <div class="p-6 mb-6 bg-white rounded shadow-md">
        <div class="flex items-center justify-between mb-4">
            <div>
                <h1 class="mb-1 text-3xl font-bold text-gray-800">Payroll Records</h1>
                <p class="text-gray-600">List of employee payrolls will appear here.</p>
            </div>
            <a href="{{ route('hr.payroll.create') }}"
               class="inline-block px-4 py-2 text-black bg-indigo-600 rounded hover:bg-indigo-700">
                ➕ Create Payroll
            </a>
        </div>
    </div>
</div>
@endsection
