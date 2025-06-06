@extends('layouts.inventory')

@section('content')

<div class="max-w-5xl p-8 mx-auto rounded-lg shadow" style="background-color: rgba(75, 85, 99, 0.60);">
    <div class="flex items-center justify-between mt-4 mb-6 text-sm">
            <h1 class="text-3xl font-bold text-white">Categories</h1>
            <div class="flex ml-auto space-x-2">
                <a href="{{ route('inventory.categories.create') }}" class="px-3 py-1 text-white bg-gray-600 rounded hover:bg-gray-700">
                    ➕ Add Category
                </a>

            </div>
        </div>
        <table class="min-w-full text-sm text-left border divide-y divide-gray-200 table-auto">

            <thead class="bg-gray-100">
                <tr>
                    <th class="p-3">#</th>
                    <th class="p-3">Category</th>
                    <th class="p-3">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 bg-white">
                @forelse($categories as $category)
                    <tr>
                        <td class="p-3">{{ $category->id }}</td>
                        <td class="p-3 font-medium">{{ $category->name }}</td>
                        <td class="flex p-3 space-x-2">
                            <a href="{{ route('inventory.categories.edit', $category->id) }}"
                               class="px-2 py-1 text-white bg-gray-600 rounded hover:bg-gray-700">Edit</a>
                            <form action="{{ route('inventory.categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Delete this category?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-2 py-1 text-white bg-red-600 rounded hover:bg-red-700">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="4" class="p-4 text-center text-gray-500">No categories found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
