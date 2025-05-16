@extends('layouts.hr')

@section('content')

<div class="max-w-5xl p-6 mx-auto rounded-lg shadow" style="background-color: rgba(75, 85, 99, 0.60);">
    <h2 class="mb-6 text-2xl font-bold text-white">Add Employment Record</h2>

    <form action="{{ route('hr.employment.store') }}" method="POST">
        @csrf

        <div class="grid grid-cols-1 gap-6 text-sm md:grid-cols-2">
            <div class="flex flex-col">
                <label class="mb-1 font-semibold text-white">Employee Name</label>
                <input type="text" name="employee_name" required class="px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-500">
            </div>

            <div class="flex flex-col">
                <label class="mb-1 font-semibold text-white">Employee Number</label>
                <input type="text" name="employee_number" required class="px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-500">
            </div>

            <div class="flex flex-col">
                <label class="mb-1 font-semibold text-white">Visa Number</label>
                <input type="text" name="visa_number" required class="px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-500">
            </div>

            <div class="flex flex-col">
                <label class="mb-1 font-semibold text-white">Category Resident</label>
                <input type="text" name="category_resident" required class="px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-500">
            </div>

            <div class="flex flex-col">
                <label class="mb-1 font-semibold text-white">Resident Number</label>
                <input type="text" name="resident_number" required class="px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-500">
            </div>


            <div class="flex flex-col">
                <label class="mb-1 font-semibold text-white">Nationality</label>
                <input type="text" name="nationality" required class="px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-500">
            </div>

            <div class="flex flex-col">
                <label class="mb-1 font-semibold text-white">Date Arrival</label>
                <input type="date" name="date_arrival" required class="px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-500">
            </div>

            <div class="flex flex-col">
                <label class="mb-1 font-semibold text-white">Date Hired</label>
                <input type="date" name="date_hired" required class="px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-500">
            </div>

            <div class="flex flex-col">
                <label class="mb-1 font-semibold text-white">Contract Expiry Date</label>
                <input type="date" name="contract_expiry_date" required class="px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-500">
            </div>

            <div class="flex flex-col">
                <label class="mb-1 font-semibold text-white">Kiwa Contract Number</label>
                <input type="text" name="kiwa_contract_number" required class="px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-500">
            </div>

            <div class="flex flex-col">
                <label class="mb-1 font-semibold text-white">Salary</label>
                <input type="number" name="salary" required class="px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-500">
            </div>

            <div class="flex flex-col">
                <label class="mb-1 font-semibold text-white">Educational Background</label>
                <textarea name="educational_background" class="px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-500 resize-y min-h-[80px]"></textarea>
            </div>

            <div class="flex flex-col">
                <label class="mb-1 font-semibold text-white">Skills</label>
                <select name="skills" required class="px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-500">
                    <option value="">Select a skill</option>
                    <option value="Professional">Professional</option>
                    <option value="High Skilled">High Skilled</option>
                    <option value="Skilled">Skilled</option>
                    <option value="Labors">Labors</option>
                    <option value="Others">Others</option>
                </select>
            </div>


            <div class="flex flex-col">
                <label class="mb-1 font-semibold text-white">Ticket Provided</label>
                <select name="ticket_provided" required class="px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-500">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="flex flex-col">
                <label class="mb-1 font-semibold text-white">Renewal of Residence</label>
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
            <button type="submit" class="px-3 py-1 font-bold text-white transition duration-200 bg-gray-600 rounded-md hover:bg-gray-700">
                Save Record
            </button>

        </div>
    </form>
</div>

@endsection
