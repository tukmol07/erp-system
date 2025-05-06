<?php $__env->startSection('content'); ?>
<div class="container p-6 mx-auto">

    <!-- Heading -->
    <!-- Heading -->
<div class="flex items-center justify-between mb-6">
    <h1 class="text-3xl font-bold text-gray-800">Inventory Dashboard</h1>

    <div class="flex space-x-4">
        <a href="<?php echo e(route('inventory.items.create')); ?>" class="px-2 py-1 text-white bg-indigo-600 rounded hover:bg-green-700">
            ➕ Add New Item
        </a>
        <a href="<?php echo e(route('inventory.categories.index')); ?>"
           class="px-2 py-1 text-white bg-indigo-600 rounded hover:bg-green-800">
            📂 View Categories
        </a>
        <a href="<?php echo e(route('inventory.suppliers.index')); ?>"
           class="px-2 py-1 text-white bg-indigo-600 rounded hover:bg-green-700">
            🧾 View Suppliers
        </a>
    </div>
</div>


    <!-- Search and Filter -->
    <form method="GET" action="<?php echo e(route('inventory.dashboard')); ?>" class="flex flex-wrap items-center mb-6 space-x-4 text-sm">
        <input type="text" name="search" placeholder="Item,Serial or SKU" value="<?php echo e(request('search')); ?>"
               class="px-3 py-1 border rounded shadow-sm">

        <select name="category" class="px-3 py-1 border rounded shadow-sm">
            <option value="">All Categories</option>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($category->id); ?>" <?php echo e(request('category') == $category->id ? 'selected' : ''); ?>>
                    <?php echo e($category->name); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>

        <select name="filter" class="px-3 py-1 border rounded shadow-sm">
            <option value="">All Items</option>
            <option value="low_stock" <?php echo e(request('filter') == 'low_stock' ? 'selected' : ''); ?>>Low Stock</option>
            <option value="out_of_stock" <?php echo e(request('filter') == 'out_of_stock' ? 'selected' : ''); ?>>Out of Stock</option>
        </select>

        <button type="submit" class="px-3 py-1 text-white bg-indigo-600 rounded hover:bg-green-700">
            🔍 Search
        </button>
    </form>

    <!-- Inventory Table -->
    <div class="overflow-x-auto bg-white rounded shadow">
        <table class="min-w-full text-sm text-left border divide-y divide-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-3">Serial Number</th>
                    <th class="p-3">Item Name</th>
                    <th class="p-3">SKU</th>
                    <th class="p-3">Description</th>
                    <th class="p-3">Category</th>
                    <th class="p-3">Stock Qty</th>
                    <th class="p-3">Min Stock</th>
                    <th class="p-3">Supplier</th>
                    <th class="p-3">Last Purchase</th>
                    <th class="p-3">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr <?php if($item->quantity <= $item->min_stock): ?> class="bg-red-50" <?php endif; ?>>
                    <td class="p-3"><?php echo e($item->serial_number); ?></td>
                    <td class="p-3 font-medium"><?php echo e($item->name); ?></td>
                    <td class="p-3 font-medium"><?php echo e($item->sku); ?></td>
                    <td class="p-3 font-medium"><?php echo e($item->description); ?></td>
                    <td class="p-3"><?php echo e($item->category->name ?? '-'); ?></td>
                    <td class="p-3"><?php echo e($item->quantity); ?></td>
                    <td class="p-3"><?php echo e($item->min_stock); ?></td>
                    <td class="p-3"><?php echo e($item->supplier->company_name ?? '-'); ?></td>
                    <td class="p-3"><?php echo e($item->last_purchase_date ? $item->last_purchase_date->format('Y-m-d') : '-'); ?></td>
                    <td class="flex p-3 space-x-2">
                        <a href="<?php echo e(route('inventory.items.edit', $item->id)); ?>" class="px-3 py-1 text-white bg-indigo-600 rounded hover:bg-green-700">Edit</a>
                        <form action="<?php echo e(route('inventory.items.destroy', $item->id)); ?>" method="POST" onsubmit="return confirm('Delete this item?')">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="px-2 py-1 text-white bg-gray-600 rounded hover:bg-red-700">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="8" class="p-4 text-center text-gray-500">No items found.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-4">
        <?php echo e($items->links()); ?>

    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Erp-system\erp-system\resources\views/inventory/dashboard.blade.php ENDPATH**/ ?>