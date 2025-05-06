@extends('layouts.app')

@section('content')
<div class="container max-w-xl px-6 py-10 mx-auto mt-8 bg-white rounded shadow">

    <h1 class="mb-4 text-2xl font-bold text-gray-800">Edit Supplier</h1>

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
            <label for="company_name" class="block mb-1 font-semibold text-gray-700">Company Name</label>
            <input type="text" id="company_name" name="company_name" value="{{ old('company_name', $supplier->company_name) }}"
                   class="w-full px-4 py-2 border rounded shadow-sm focus:ring focus:ring-indigo-300" required>
        </div>

        <div>
            <label for="address" class="block mb-1 font-semibold text-gray-700">Address</label>
            <input type="text" id="address" name="address" value="{{ old('name', $supplier->address) }}"
                   class="w-full px-4 py-2 border rounded shadow-sm focus:ring focus:ring-indigo-300" required>
        </div>

        <div>
            <label for="email" class="block mb-1 font-semibold text-gray-700">Email</label>
            <input type="text" id="email" name="email" value="{{ old('name', $supplier->email) }}"
                   class="w-full px-4 py-2 border rounded shadow-sm focus:ring focus:ring-indigo-300" required>
        </div>

        <div>
            <label for="contact_person" class="block mb-1 font-semibold text-gray-700">Contact Person</label>
            <input type="text" id="contact_person" name="contact_person" value="{{ old('name', $supplier->contact_person) }}"
                   class="w-full px-4 py-2 border rounded shadow-sm focus:ring focus:ring-indigo-300" required>
        </div>

        <div>
            <label for="contact_number" class="block mb-1 font-semibold text-gray-700">Contact Number</label>
            <input type="text" id="contact_number" name="contact_number" value="{{ old('name', $supplier->contact_number) }}"
                   class="w-full px-4 py-2 border rounded shadow-sm focus:ring focus:ring-indigo-300" required>
        </div>

        <div class="flex mt-6 space-x-4 text-sm">
            <a href="{{ route('inventory.suppliers.index') }}"
               class="px-3 py-1 text-white bg-gray-600 rounded-md hover:bg-red-700">
                Cancel
            </a>
            <button type="submit"
                    class="px-3 py-1 text-white bg-indigo-600 rounded hover:bg-green-700">
                💾 Update Supplier
            </button>
        </div>
    </form>

</div>
@endsection
