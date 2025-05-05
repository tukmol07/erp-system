@extends('layouts.app')

@section('content')
<div class="container max-w-xl px-6 py-10 mx-auto mt-8 bg-white rounded shadow">

    <h1 class="mb-4 text-2xl font-bold text-gray-800">Edit Category</h1>

    @if ($errors->any())
        <div class="p-4 mb-4 text-red-700 bg-red-100 border border-red-300 rounded">
            <ul class="pl-5 list-disc">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('inventory.categories.update', $category->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="name" class="block mb-1 font-semibold text-gray-700">Category Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', $category->name) }}"
                   class="w-full px-4 py-2 border rounded shadow-sm focus:ring focus:ring-indigo-300" required>
        </div>

        <div class="flex mt-6 space-x-4">
            <a href="{{ route('inventory.categories.index') }}"
               class="px-3 py-1 text-white bg-gray-600 rounded-md hover:bg-red-700">
                Cancel
            </a>
            <button type="submit"
                    class="px-3 py-1 text-white bg-green-600 rounded hover:bg-green-700">
                💾 Update Category
            </button>
        </div>
    </form>

</div>
@endsection
