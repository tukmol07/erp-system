<?php $__env->startSection('content'); ?>
<div class="container max-w-3xl min-h-screen px-6 mx-auto mt-8">
    <form action="<?php echo e(route('inventory.categories.store')); ?>" method="POST" class="p-6 bg-white border rounded-lg shadow-md">
        <?php echo csrf_field(); ?>

        <div class="flex items-center mb-4 space-x-2 text-xl font-bold text-gray-800">
            <span class="text-2xl text-purple-600">➕</span>
            <h2>Add Category</h2>
        </div>

        <div class="mb-6">
            <input
                type="text"
                name="name"
                placeholder="Enter category name"
                class="w-full px-4 py-2 text-gray-800 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                required
            />
        </div>

        <div class="flex space-x-4">
            <button
                type="submit"
                class="px-3 py-1 text-white bg-indigo-600 rounded-md hover:bg-indigo-700"
            >
                Save
            </button>
            <a
                href="<?php echo e(route('inventory.categories.index')); ?>"
                class="px-3 py-1 text-white bg-gray-600 rounded-md hover:bg-gray-700"
            >
                Cancel
            </a>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Erp-system\erp-system\resources\views/inventory/categories/create.blade.php ENDPATH**/ ?>