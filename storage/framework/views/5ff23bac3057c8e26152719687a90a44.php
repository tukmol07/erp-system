<?php $__env->startSection('content'); ?>
<div class="max-w-3xl p-6 mx-auto text-sm bg-white rounded shadow-md">
    <h1 class="mb-6 text-2xl font-bold text-gray-800">➕ Add New Item</h1>

    <form method="POST" action="<?php echo e(route('inventory.item.store')); ?>">
        <?php echo csrf_field(); ?>

        <!-- Serial Number -->
        <div class="mb-4">
            <label class="block mb-1 font-medium text-gray-700">Serial Number</label>
            <input type="text" name="serial_number" required
                   class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500" />
        </div>

        <!-- Item Name -->
        <div class="mb-4">
            <label class="block mb-1 font-medium text-gray-700">Item Name</label>
            <input type="text" name="name" required
                   class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500" />
        </div>

        <!-- SKU -->
        <div class="mb-4">
            <label class="block mb-1 font-medium text-gray-700">SKU</label>
            <input type="text" name="sku" required
                   class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500" />
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium text-gray-700">Description</label>
            <input type="text" name="description" required
                   class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500" />
        </div>

        <!-- Category -->
        <div class="mb-4">
            <label class="block mb-1 font-medium text-gray-700">Category</label>
            <select name="category_id" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
                <option value="">-- Select Category --</option>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <!-- Supplier -->
        <div class="mb-4">
            <label class="block mb-1 font-medium text-gray-700">Supplier</label>
            <select name="supplier_id" class="w-full px-4 py-2 text-black border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
                <option value="">-- Select Supplier --</option>
                <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($supplier->id); ?>"><?php echo e($supplier->company_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <!-- Quantity -->
        <div class="mb-4">
            <label class="block mb-1 font-medium text-gray-700">Stock Quantity</label>
            <input type="number" name="quantity" required min="0"
                   class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500" />
        </div>

        <!-- Min Stock -->
        <div class="mb-4">
            <label class="block mb-1 font-medium text-gray-700">Minimum Stock</label>
            <input type="number" name="min_stock" required min="0"
                   class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500" />
        </div>

        <!-- Last Purchase Date -->
        <div class="mb-6">
            <label class="block mb-1 font-medium text-gray-700">Last Purchase Date</label>
            <input type="date" name="last_purchase_date"
                   class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500" />
        </div>

        <!-- Buttons -->
        <div class="flex justify-end space-x-2">
            <a href="<?php echo e(route('inventory.dashboard')); ?>"
               class="px-4 py-2 text-white bg-gray-600 rounded-md hover:bg-red-700">Cancel</a>
            <button type="submit"
             class="px-4 py-2 text-white bg-green-600 rounded-md hover:bg-green-700">Save</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Erp-system\erp-system\resources\views/inventory/items/create.blade.php ENDPATH**/ ?>