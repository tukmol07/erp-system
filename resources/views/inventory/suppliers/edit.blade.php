@extends('layouts.inventory')

@section('content')
<div class="max-w-2xl p-6 mx-auto rounded-lg shadow" style="background-color: rgba(75, 85, 99, 0.60);">

    <h1 class="mb-4 text-2xl font-bold text-white">Edit Supplier</h1>

    @if ($errors->any())
        <div class="p-4 mb-4 text-red-700 bg-red-100 border border-red-300 rounded">
            <ul class="pl-5 list-disc">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('inventory.suppliers.update', $supplier->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="company_name" class="block mb-1 font-semibold text-white">Company Name</label>
            <input type="text" id="company_name" name="company_name" value="{{ old('company_name', $supplier->company_name) }}"
                   class="w-full px-4 py-2 border rounded shadow-sm focus:ring focus:ring-indigo-300" required>
        </div>

        <div>
            <label for="address" class="block mb-1 font-semibold text-white">Address</label>
            <input type="text" id="address" name="address" value="{{ old('name', $supplier->address) }}"
                   class="w-full px-4 py-2 border rounded shadow-sm focus:ring focus:ring-indigo-300" required>
        </div>

        <div>
            <label for="email" class="block mb-1 font-semibold text-white">Email</label>
            <input type="text" id="email" name="email" value="{{ old('name', $supplier->email) }}"
                   class="w-full px-4 py-2 border rounded shadow-sm focus:ring focus:ring-indigo-300" required>
        </div>

        <div>
            <label for="contact_person" class="block mb-1 font-semibold text-white">Contact Person</label>
            <input type="text" id="contact_person" name="contact_person" value="{{ old('name', $supplier->contact_person) }}"
                   class="w-full px-4 py-2 border rounded shadow-sm focus:ring focus:ring-indigo-300" required>
        </div>

        <div>
            <label for="contact_number" class="block mb-1 font-semibold text-white">Contact Number</label>
            <input type="text" id="contact_number" name="contact_number" value="{{ old('name', $supplier->contact_number) }}"
                   class="w-full px-4 py-2 border rounded shadow-sm focus:ring focus:ring-indigo-300" required>
        </div>

        <div class="flex mt-6 space-x-4 text-sm">

            <button type="submit"
                    class="inline-block px-3 py-1 text-white bg-gray-600 rounded hover:gray-indigo-700">
                💾 Update Supplier
            </button>
        </div>
    </form>

</div>
@endsection
