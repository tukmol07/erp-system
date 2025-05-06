<form method="GET" action="{{ route('inventory.items.index') }}" class="flex flex-wrap gap-4 mb-4">
    <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by name" class="p-2 border rounded">

    <select name="category" class="p-2 border rounded">
        <option value="">All Categories</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>

    <select name="filter" class="p-2 border rounded">
        <option value="">All Stock</option>
        <option value="low_stock" {{ request('filter') == 'low_stock' ? 'selected' : '' }}>Low Stock</option>
        <option value="out_of_stock" {{ request('filter') == 'out_of_stock' ? 'selected' : '' }}>Out of Stock</option>
    </select>

    <button type="submit" class="p-2 text-white bg-indigo-600 rounded hover:bg-green-700">Filter</button>
</form>
