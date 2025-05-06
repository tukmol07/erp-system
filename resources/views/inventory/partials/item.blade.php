<!-- resources/views/inventory/partials/create-item.blade.php -->

<form action="{{ route('inventory.items.store') }}" method="POST" class="p-4 bg-white rounded shadow">
    @csrf
    <h2 class="mb-2 text-lg font-semibold">Add New Item</h2>
    <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
        <input type="text" name="name" placeholder="Item Name" class="px-4 py-2 border rounded" required>

        <input type="text" name="sku" placeholder="SKU" class="px-4 py-2 border rounded" required>

        <select name="category_id" class="px-4 py-2 border rounded" required>
            <option value="">Select Category</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        <select name="supplier_id" class="px-4 py-2 border rounded">
            <option value="">Select Supplier</option>
            @foreach($suppliers as $supplier)
                <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
            @endforeach
        </select>

        <input type="number" name="quantity" placeholder="Quantity" class="px-4 py-2 border rounded" min="0" required>

        <input type="number" name="min_stock" placeholder="Min Stock" class="px-4 py-2 border rounded" min="0" required>

        <textarea name="description" placeholder="Description" class="col-span-1 px-4 py-2 border rounded md:col-span-3"></textarea>

        <div class="md:col-span-3">
            <button type="submit"
                    class="px-4 py-2 text-white bg-indigo-600 rounded hover:bg-green-700">
                Save Item
            </button>
        </div>
    </div>
</form>
