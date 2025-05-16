@extends('layouts.app')

@section('content')
<div class="container px-0 py-2 mx-0">
    <div class="flex flex-row gap-6"> <!-- Always row layout -->

        <!-- Sidebar -->
        <aside class="w-64 p-4 bg-white rounded-lg shadow-md">
            <nav class="flex flex-col space-y-4">
                <a href="{{ route('hr.employment.create') }}"
                   class="flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded hover:bg-indigo-700">
                    ➕ Input Employment Record
                </a>
                <a href="{{ route('hr.employment.index') }}"
                   class="flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded hover:bg-indigo-700">
                    📄 View Employment Records
                </a>
                <a href="{{ route('hr.payroll.index') }}"
                   class="flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded hover:bg-indigo-700">
                    💰 Payroll System
                </a>
            </nav>
        </aside>
    </div>
</div>
@endsection
