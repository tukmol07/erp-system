<?php $__env->startSection('content'); ?>
<div class="max-w-3xl p-6 mx-auto rounded-lg shadow" style="background-color: rgba(75, 85, 99, 0.60);">
    <h1 class="inline-block mb-6 text-2xl font-bold text-white">➕ Add New Item</h1>

    <form method="POST" action="<?php echo e(route('inventory.item.store')); ?>">
        <?php echo csrf_field(); ?>

        <!-- Serial Number -->
        <div class="mb-4">
            <label class="block mb-1 font-medium text-white">Serial Number</label>
            <input type="text" name="serial_number" required
                   class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500" />
        </div>

        <!-- Item Name -->
        <div class="mb-4">
            <label class="block mb-1 font-medium text-white">Item Name</label>
            <input type="text" name="name" required
                   class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500" />
        </div>

        <!-- SKU -->
        <div class="mb-4">
            <label class="block mb-1 font-medium text-white">SKU</label>
            <input type="text" name="sku" required
                   class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500" />
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium text-white">Description</label>
            <input type="text" name="description" required
                   class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500" />
        </div>

        <!-- Category -->
        <div class="mb-4">
            <label class="block mb-1 font-medium text-white">Category</label>
            <select name="category_id" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
                <option value="">-- Select Category --</option>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <!-- Supplier -->
        <div class="mb-4">
            <label class="block mb-1 font-medium text-white">Supplier</label>
            <select name="supplier_id" class="w-full px-4 py-2 text-black border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
                <option value="">-- Select Supplier --</option>
                <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($supplier->id); ?>"><?php echo e($supplier->company_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <!-- Quantity -->
        <div class="mb-4">
            <label class="block mb-1 font-medium text-white">Stock Quantity</label>
            <input type="number" name="quantity" required min="0"
                   class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500" />
        </div>

        <!-- Min Stock -->
        <div class="mb-4">
            <label class="block mb-1 font-medium text-white">Minimum Stock</label>
            <input type="number" name="min_stock" required min="0"
                   class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500" />
        </div>

        <!-- Last Purchase Date -->
        <div class="mb-6">
            <label class="block mb-1 font-medium text-white">Last Purchase Date</label>
            <input type="date" name="last_purchase_date"
                   class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500" />
        </div>

        <!-- Buttons -->
        <div class="flex justify-end space-x-2">
                <button type="submit"
             class="inline-block px-3 py-1 text-white bg-gray-600 rounded-md hover:bg-gray-700">Save</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.inventory', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Erp-system\erp-system\resources\views/inventory/items/create.blade.php ENDPATH**/ ?>