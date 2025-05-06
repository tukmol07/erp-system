<?php $__env->startSection('content'); ?>
<div class="flex items-center justify-between mt-4 mb-6 text-sm">
    <h1 class="text-3xl font-bold text-gray-800">Categories</h1>
    <div class="flex ml-auto space-x-2">
        <a href="<?php echo e(route('inventory.categories.create')); ?>" class="px-3 py-1 text-white bg-indigo-600 rounded hover:bg-indigo-700">
            ➕ Add Category
        </a>
        <a href="<?php echo e(route('inventory.dashboard')); ?>" class="px-3 py-1 text-white bg-gray-600 rounded hover:bg-gray-700">
            Back to Inventory
        </a>
    </div>
</div>




    <div class="w-full max-w-xl p-2 mx-auto overflow-x-auto bg-white rounded shadow">
        <table class="min-w-full text-sm text-left border divide-y divide-gray-200 table-auto">

            <thead class="bg-gray-100">
                <tr>
                    <th class="p-3">#</th>
                    <th class="p-3">Category</th>
                    <th class="p-3">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td class="p-3"><?php echo e($category->id); ?></td>
                        <td class="p-3 font-medium"><?php echo e($category->name); ?></td>
                        <td class="flex p-3 space-x-2">
                            <a href="<?php echo e(route('inventory.categories.edit', $category->id)); ?>"
                               class="px-2 py-1 text-white bg-indigo-600 rounded hover:bg-indigo-700">Edit</a>
                            <form action="<?php echo e(route('inventory.categories.destroy', $category->id)); ?>" method="POST" onsubmit="return confirm('Delete this category?')">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="px-2 py-1 text-white bg-gray-600 rounded hover:bg-gray-700">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr><td colspan="4" class="p-4 text-center text-gray-500">No categories found.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Erp-system\erp-system\resources\views/inventory/categories/index.blade.php ENDPATH**/ ?>