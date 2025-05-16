@extends('layouts.inventory')

@section('content')
<div class="max-w-xl p-6 mx-auto max-y-5xl rounded-lg shadow">
    <form action="{{ route('inventory.categories.store') }}" method="POST" class="max-w-5xl p-6 mx-auto max-y-5xl rounded-lg shadow" style="background-color: rgba(75, 85, 99, 0.60);">
        @csrf

        <div class="flex items-center mb-4 space-x-2 text-xl font-bold text-white">
            <span class="text-2xl text-purple-600">➕</span>
            <h2>Add Category</h2>
        </div>

        <div class="mb-6">
            <input
                type="text"
                name="name"
                placeholder="Enter category name"
                class="w-full px-4 py-2 text-gray-800 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                required
            />
        </div>

        <div class="flex space-x-4">
            <button
                type="submit"
                class="px-3 py-1 text-white bg-gray-600 rounded-md hover:bg-gray-700"
            >
                Save
            </button>

        </div>
    </form>
</div>
@endsection
