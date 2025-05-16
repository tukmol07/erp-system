@extends('layouts.hr')

@section('content')

<style>
.submit-btn {
    margin-block-start: 2rem;
    padding: 0.75rem 1.5rem;
    background-color: #007BFF;
    color: #fff;
    font-weight: bold;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.submit-btn:hover {
    background-color: #0056b3;
}
</style>

<!-- Centering Wrapper -->
<div class="flex justify-center py-8">
    <div class="max-w-xl p-6 mx-auto rounded-lg shadow" style="background-color: rgba(75, 85, 99, 0.60);">

        <h2 class="mb-6 text-3xl font-semibold text-center text-white">Edit Employment Record</h2>

        <form action="{{ route('hr.hr.employment.update', $record->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2  ">
                <div>
                    <label class="block text-sm font-medium text-white">Employee Name</label>
                    <input type="text" name="employee_name" value="{{ old('employee_name', $record->employee_name) }}" class="w-full p-2 mt-1 border border-gray-300 rounded focus:ring focus:ring-blue-200" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-white">Employee Number</label>
                    <input type="text" name="employee_number" value="{{ old('employee_number', $record->employee_number) }}" class="w-full p-2 mt-1 border border-gray-300 rounded" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-white">Visa Number</label>
                    <input type="text" name="visa_number" value="{{ old('visa_number', $record->visa_number) }}" class="w-full p-2 mt-1 border border-gray-300 rounded" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-white">Category Resident</label>
                    <input type="text" name="category_resident" value="{{ old('category_resident', $record->category_resident) }}" class="w-full p-2 mt-1 border border-gray-300 rounded" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-white">Resident Number</label>
                    <input type="text" name="resident_number" value="{{ old('resident_number', $record->resident_number) }}" class="w-full p-2 mt-1 border border-gray-300 rounded" required>
                </div>


                <div>
                    <label class="block text-sm font-medium text-white">Nationality</label>
                    <input type="text" name="nationality" value="{{ old('nationality', $record->nationality) }}" class="w-full p-2 mt-1 border border-gray-300 rounded" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-white">Date Arrival</label>
                    <input type="date" name="date_arrival" value="{{ old('date_arrival', $record->date_arrival) }}" class="w-full p-2 mt-1 border border-gray-300 rounded" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-white">Date Hired</label>
                    <input type="date" name="date_hired" value="{{ old('date_hired', $record->date_hired) }}" class="w-full p-2 mt-1 border border-gray-300 rounded" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-white">Contract Expiration</label>
                    <input type="date" name="contract_expiry_date" value="{{ old('contract_expiry_date', $record->contract_expiry_date) }}" class="w-full p-2 mt-1 border border-gray-300 rounded" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-white">Kiwa Contract Number</label>
                    <input type="text" name="kiwa_contract_number" value="{{ old('kiwa_contract_number', $record->kiwa_contract_number) }}" class="w-full p-2 mt-1 border border-gray-300 rounded" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-white">Salary</label>
                    <input type="number" name="salary" value="{{ old('salary', $record->salary) }}" class="w-full p-2 mt-1 border border-gray-300 rounded" required>
                </div>

                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-white">Educational Background</label>
                    <textarea name="educational_background" rows="2" class="w-full p-2 mt-1 border border-gray-300 rounded">{{ old('educational_background', $record->educational_background) }}</textarea>
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

                <div>
                    <label class="block text-sm font-medium text-white">Ticket Provided</label>
                    <select name="ticket_provided" class="w-full p-2 mt-1 border border-gray-300 rounded" required>
                        <option value="1" {{ $record->ticket_provided ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ !$record->ticket_provided ? 'selected' : '' }}>No</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-white">Residence Renewal</label>
                    <select name="residence_renewal" class="w-full p-2 mt-1 border border-gray-300 rounded" required>
                        @foreach ([2, 4, 6, 8, 10] as $year)
                            <option value="{{ $year }}" {{ $record->residence_renewal == $year ? 'selected' : '' }}>{{ $year }} years</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="flex items-center justify-between mt-8 text-sm">
                <a href="{{ route('hr.hr.employment.index') }}" class="px-3 py-1 text-white bg-gray-600 rounded hover:bg-gray-700">Back to list</a>
                <button type="submit" class="px-3 py-1 text-white bg-indigo-600 rounded hover:bg-indigo-700">Update</button>
            </div>
        </form>
    </div>
</div>

@endsection
