@extends('layouts.app')

@section('content')

<div class="max-w-5xl p-6 mx-auto mt-8 bg-white shadow-lg rounded-x">
    <h2 class="mb-6 text-2xl font-bold text-gray-800">Add Employment Record</h2>

    <form action="{{ route('hr.employment.store') }}" method="POST">
        @csrf

        <div class="grid grid-cols-1 gap-6 text-sm md:grid-cols-2">
            <div class="flex flex-col">
                <label class="mb-1 font-semibold text-gray-700">Employee Name</label>
                <input type="text" name="employee_name" required class="px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-500">
            </div>

            <div class="flex flex-col">
                <label class="mb-1 font-semibold text-gray-700">Employee Number</label>
                <input type="text" name="employee_number" required class="px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-500">
            </div>

            <div class="flex flex-col">
                <label class="mb-1 font-semibold text-gray-700">Visa Number</label>
                <input type="text" name="visa_number" required class="px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-500">
            </div>

            <div class="flex flex-col">
                <label class="mb-1 font-semibold text-gray-700">Category Resident</label>
                <input type="text" name="category_resident" required class="px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-500">
            </div>

            <div class="flex flex-col">
                <label class="mb-1 font-semibold text-gray-700">Nationality</label>
                <input type="text" name="nationality" required class="px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-500">
            </div>

            <div class="flex flex-col">
                <label class="mb-1 font-semibold text-gray-700">Date Arrival</label>
                <input type="date" name="date_arrival" required class="px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-500">
            </div>

            <div class="flex flex-col">
                <label class="mb-1 font-semibold text-gray-700">Date Hired</label>
                <input type="date" name="date_hired" required class="px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-500">
            </div>

            <div class="flex flex-col">
                <label class="mb-1 font-semibold text-gray-700">Contract Expiry Date</label>
                <input type="date" name="contract_expiry_date" required class="px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-500">
            </div>

            <div class="flex flex-col">
                <label class="mb-1 font-semibold text-gray-700">Kiwa Contract Number</label>
                <input type="text" name="kiwa_contract_number" required class="px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-500">
            </div>

            <div class="flex flex-col">
                <label class="mb-1 font-semibold text-gray-700">Salary</label>
                <input type="number" name="salary" required class="px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-500">
            </div>

            <div class="flex flex-col">
                <label class="mb-1 font-semibold text-gray-700">Educational Background</label>
                <textarea name="educational_background" class="px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-500 resize-y min-h-[80px]"></textarea>
            </div>

            <div class="flex flex-col">
                <label class="mb-1 font-semibold text-gray-700">Skills</label>
                <textarea name="skills" class="px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-500 resize-y min-h-[80px]"></textarea>
            </div>

            <div class="flex flex-col">
                <label class="mb-1 font-semibold text-gray-700">Ticket Provided</label>
                <select name="ticket_provided" required class="px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-500">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="flex flex-col">
                <label class="mb-1 font-semibold text-gray-700">Renewal of Residence</label>
                <select name="residence_renewal" required class="px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-500">
                    <option value="2">2 Years</option>
                    <option value="4">4 Years</option>
                    <option value="6">6 Years</option>
                    <option value="8">8 Years</option>
                    <option value="10">10 Years</option>
                </select>
            </div>
        </div>

        <div class="flex flex-wrap items-center gap-4 mt-8 text-sm">
            <button type="submit" class="px-3 py-1 font-bold text-white transition duration-200 bg-indigo-600 rounded-md hover:bg-indigo-700">
                Save Record
            </button>
            <a href="{{ route('hr.dashboard') }}" class="px-3 py-1 font-semibold text-white transition duration-200 bg-gray-600 rounded-md hover:bg-gray-700">
                Cancel
            </a>
        </div>
    </form>
</div>

@endsection
