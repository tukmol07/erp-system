<div class="space-y-2">
    <div>
        <label>Serial Number:</label>
        <input type="text" name="serial_number" value="{{ old('serial_number', $item->serial_number ?? '') }}" class="w-full px-3 py-2 border rounded">
    </div>

    <div>
        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name', $item->name ?? '') }}" class="w-full px-3 py-2 border rounded">
    </div>

    <div>
        <label>Description:</label>
        <textarea name="description" class="w-full px-3 py-2 border rounded">{{ old('description', $item->description ?? '') }}</textarea>
    </div>

    <div>
        <label>Category:</label>
        <select name="category_id" class="w-full px-3 py-2 border rounded">
            <option value="">-- None --</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id', $item->category_id ?? '') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div>
        <label>Supplier:</label>
        <select name="supplier_id" class="w-full px-3 py-2 border rounded">
            <option value="">-- None --</option>
            @foreach($suppliers as $supplier)
                <option value="{{ $supplier->id }}" {{ old('supplier_id', $item->supplier_id ?? '') == $supplier->id ? 'selected' : '' }}>
                    {{ $supplier->company_name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="grid grid-cols-2 gap-4">
        <div>
            <label>Quantity:</label>
            <input type="number" name="quantity" value="{{ old('quantity', $item->quantity ?? 0) }}" class="w-full px-3 py-2 border rounded">
        </div>

        <div>
            <label>Minimum Stock:</label>
            <input type="number" name="min_stock" value="{{ old('min_stock', $item->min_stock ?? 0) }}" class="w-full px-3 py-2 border rounded">
        </div>
    </div>

    <div>
        <label>Last Purchase Date:</label>
        <input type="date" name="last_purchase_date" value="{{ old('last_purchase_date', isset($item->last_purchase_date) ? $item->last_purchase_date->format('Y-m-d') : '') }}" class="w-full px-3 py-2 border rounded">
    </div>
</div>
