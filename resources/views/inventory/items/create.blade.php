@extends('layouts.app')

@section('content')
<div class="max-w-3xl p-6 mx-auto text-sm bg-white rounded shadow-md">
    <h1 class="mb-6 text-2xl font-bold text-gray-800">➕ Add New Item</h1>

    <form method="POST" action="{{ route('inventory.item.store') }}">
        @csrf

        <!-- Serial Number -->
        <div class="mb-4">
            <label class="block mb-1 font-medium text-gray-700">Serial Number</label>
            <input type="text" name="serial_number" required
                   class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500" />
        </div>

        <!-- Item Name -->
        <div class="mb-4">
            <label class="block mb-1 font-medium text-gray-700">Item Name</label>
            <input type="text" name="name" required
                   class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500" />
        </div>

        <!-- SKU -->
        <div class="mb-4">
            <label class="block mb-1 font-medium text-gray-700">SKU</label>
            <input type="text" name="sku" required
                   class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500" />
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium text-gray-700">Description</label>
            <input type="text" name="description" required
                   class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500" />
        </div>

        <!-- Category -->
        <div class="mb-4">
            <label class="block mb-1 font-medium text-gray-700">Category</label>
            <select name="category_id" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
                <option value="">-- Select Category --</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Supplier -->
        <div class="mb-4">
            <label class="block mb-1 font-medium text-gray-700">Supplier</label>
            <select name="supplier_id" class="w-full px-4 py-2 text-black border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
                <option value="">-- Select Supplier --</option>
                @foreach($suppliers as $supplier)
                    <option value="{{ $supplier->id }}">{{ $supplier->company_name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Quantity -->
        <div class="mb-4">
            <label class="block mb-1 font-medium text-gray-700">Stock Quantity</label>
            <input type="number" name="quantity" required min="0"
                   class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500" />
        </div>

        <!-- Min Stock -->
        <div class="mb-4">
            <label class="block mb-1 font-medium text-gray-700">Minimum Stock</label>
            <input type="number" name="min_stock" required min="0"
                   class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500" />
        </div>

        <!-- Last Purchase Date -->
        <div class="mb-6">
            <label class="block mb-1 font-medium text-gray-700">Last Purchase Date</label>
            <input type="date" name="last_purchase_date"
                   class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500" />
        </div>

        <!-- Buttons -->
        <div class="flex justify-end space-x-2">
            <a href="{{ route('inventory.dashboard') }}"
               class="px-4 py-2 text-white bg-gray-600 rounded-md hover:bg-gray-700">Cancel</a>
            <button type="submit"
             class="px-4 py-2 text-white bg-indigo-600 rounded-md hover:bg-indigo-700">Save</button>
        </div>
    </form>
</div>
@endsection
