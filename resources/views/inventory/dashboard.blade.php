@extends('layouts.app')

@section('content')
<div class="container p-6 mx-auto">

    <!-- Heading -->
    <!-- Heading -->
<div class="flex items-center justify-between mb-6">
    <h1 class="text-3xl font-bold text-gray-800">Inventory Dashboard</h1>

    <div class="flex space-x-4">
        <a href="{{ route('inventory.items.create') }}" class="inline-block px-2 py-1 text-white bg-indigo-600 rounded hover:bg-indigo-700">
            ➕ Add New Item
        </a>
        <a href="{{ route('inventory.categories.index') }}"
           class="inline-block px-2 py-1 text-white bg-indigo-600 rounded hover:bg-indigo-700">
            📂 View Categories
        </a>
        <a href="{{ route('inventory.suppliers.index') }}"
           class="inline-block px-2 py-1 text-white bg-indigo-600 rounded hover:bg-indigo-700">
            🧾 View Suppliers
        </a>
    </div>
</div>


    <!-- Search and Filter -->
    <form method="GET" action="{{ route('inventory.dashboard') }}" class="flex flex-wrap items-center mb-6 space-x-4 text-sm">
        <input type="text" name="search" placeholder="Item,Serial or SKU" value="{{ request('search') }}"
               class="inline-block px-3 py-1 border rounded shadow-sm">

        <select name="category" class="inline-block px-3 py-1 border rounded shadow-sm">
            <option value="">All Categories</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        <select name="filter" class="inline-block px-3 py-1 border rounded shadow-sm">
            <option value="">All Items</option>
            <option value="low_stock" {{ request('filter') == 'low_stock' ? 'selected' : '' }}>Low Stock</option>
            <option value="out_of_stock" {{ request('filter') == 'out_of_stock' ? 'selected' : '' }}>Out of Stock</option>
        </select>

        <button type="submit" class="inline-block px-3 py-1 text-white bg-indigo-600 rounded hover:bg-indigo-700">
            🔍 Search
        </button>
    </form>

    <!-- Inventory Table -->
    <div class="overflow-x-auto bg-white rounded shadow">
        <table class="min-w-full text-sm text-left border divide-y divide-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-3">Serial Number</th>
                    <th class="p-3">Item Name</th>
                    <th class="p-3">SKU</th>
                    <th class="p-3">Description</th>
                    <th class="p-3">Category</th>
                    <th class="p-3">Stock Qty</th>
                    <th class="p-3">Min Stock</th>
                    <th class="p-3">Supplier</th>
                    <th class="p-3">Last Purchase</th>
                    <th class="p-3">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($items as $item)
                <tr @if($item->quantity <= $item->min_stock) class="border-t hover:bg-gray-50" @endif>
                    <td class="p-3">{{ $item->serial_number }}</td>
                    <td class="p-3 font-medium">{{ $item->name }}</td>
                    <td class="p-3 font-medium">{{ $item->sku }}</td>
                    <td class="p-3 font-medium">{{ $item->description }}</td>
                    <td class="p-3">{{ $item->category->name ?? '-' }}</td>
                    <td class="p-3">{{ $item->quantity }}</td>
                    <td class="p-3">{{ $item->min_stock }}</td>
                    <td class="p-3">{{ $item->supplier->company_name ?? '-' }}</td>
                    <td class="p-3">{{ $item->last_purchase_date ? $item->last_purchase_date->format('Y-m-d') : '-' }}</td>
                    <td class="flex p-3 space-x-2">
                        <a href="{{ route('inventory.items.edit', $item->id) }}" class="inline-block px-3 py-1 text-white bg-indigo-600 rounded hover:bg-indigo-700">Edit</a>
                        <form action="{{ route('inventory.items.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Delete this item?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-block px-2 py-1 text-white bg-gray-600 rounded hover:bg-gray-700">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="p-4 text-center text-gray-500">No items found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-4">
        {{ $items->links() }}
    </div>

</div>
@endsection
