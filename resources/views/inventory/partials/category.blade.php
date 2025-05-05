
<form action="{{ route('categories.store') }}" method="POST" class="p-4 mb-4 bg-white rounded shadow">
    @csrf
    <h2 class="mb-2 text-lg font-semibold">Add Category</h2>
    <div class="flex items-center space-x-4">
        <input type="text" name="name" placeholder="Category name"
               class="w-full px-4 py-2 border rounded" required>
        <button type="submit"
                class="px-4 py-2 text-white bg-indigo-600 rounded hover:bg-indigo-700">
            Add
        </button>
    </div>
</form>
