<form method="GET" action="<?php echo e(route('inventory.items.index')); ?>" class="flex flex-wrap gap-4 mb-4">
    <input type="text" name="search" value="<?php echo e(request('search')); ?>" placeholder="Search by name" class="p-2 border rounded">

    <select name="category" class="p-2 border rounded">
        <option value="">All Categories</option>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($category->id); ?>" <?php echo e(request('category') == $category->id ? 'selected' : ''); ?>>
                <?php echo e($category->name); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>

    <select name="filter" class="p-2 border rounded">
        <option value="">All Stock</option>
        <option value="low_stock" <?php echo e(request('filter') == 'low_stock' ? 'selected' : ''); ?>>Low Stock</option>
        <option value="out_of_stock" <?php echo e(request('filter') == 'out_of_stock' ? 'selected' : ''); ?>>Out of Stock</option>
    </select>

    <button type="submit" class="p-2 text-white bg-blue-600 rounded hover:bg-blue-700">Filter</button>
</form>
<?php /**PATH C:\Erp-system\erp-system\resources\views/inventory/items/index.blade.php ENDPATH**/ ?>