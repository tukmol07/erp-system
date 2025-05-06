@extends('layouts.app')

@section('content')
<div class="container p-6 mx-auto">
    <h1 class="mb-4 text-xl font-bold">Edit Item</h1>

    <form action="{{ route('inventory.items.update', $item->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        @include('inventory.partials.form')

        <div class="flex mt-6 space-x-4">
            <a href="{{ route('inventory.items.index') }}"
               class="px-3 py-1 text-white bg-gray-600 rounded-md hover:bg-red-700">
                Cancel
            </a>
            <button type="submit"
                    class="px-3 py-1 text-white bg-indigo-600 rounded hover:bg-green-700">
                💾 Update Item
            </button>
        </div>
    </form>
</div>
@endsection
