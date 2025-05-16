@extends('layouts.inventory')

@section('content')


<div class="max-w-5xl p-6 mx-auto rounded-lg shadow" style="background-color: rgba(75, 85, 99, 0.60);">
    <div class="container p-6 mx-auto text-sm">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-3xl font-bold text-white">Suppliers</h1>
            <a href="{{ route('inventory.suppliers.create') }}" class="inline-block px-3 py-1 text-white bg-gray-600 rounded hover:bg-gray-700">
                ➕ Add Supplier
            </a>
        </div>
    </div>
        <table class="min-w-full text-sm text-left border divide-y divide-gray-200">
            <thead class="bg-gray-200">
                <tr>
                    <th class="p-3">#</th>
                    <th class="p-3">Company Name</th>
                    <th class="p-3">Address</th>
                    <th class="p-3">Email</th>
                    <th class="p-3">Contact Person</th>
                    <th class="p-3">Contact Number</th>
                    <th class="p-3">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray- bg-white">
                @forelse($suppliers as $supplier)
                    <tr>
                        <td class="p-3">{{ $supplier->id }}</td>
                        <td class="p-3 font-medium">{{ $supplier->company_name }}</td>
                        <td class="p-3 font-medium">{{ $supplier->address }}</td>
                        <td class="p-3 font-medium">{{ $supplier->email }}</td>
                        <td class="p-3">{{ $supplier->contact_person }}</td>
                        <td class="p-3">{{ $supplier->contact_number }}</td>
                        <td class="flex p-3 space-x-2">
                            <a href="{{ route('inventory.suppliers.edit', $supplier->id) }}"
                               class="px-2 py-1 text-white bg-gray-600 rounded hover:bg-gray-700">Edit</a>
                            <form action="{{ route('inventory.suppliers.destroy', $supplier->id) }}" method="POST" onsubmit="return confirm('Delete this supplier?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="inline-block px-2 py-1 text-white bg-red-600 rounded hover:bg-red-700">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="5" class="inline-block p-4 text-center text-gray-500 ">No suppliers found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
