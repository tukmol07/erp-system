

<?php $__env->startSection('content'); ?>
<div class="container p-6 mx-auto">
    <h1 class="mb-4 text-xl font-bold">Edit Item</h1>

    <form action="<?php echo e(route('inventory.items.update', $item->id)); ?>" method="POST" class="space-y-4">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <?php echo $__env->make('inventory.partials.form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <div class="flex mt-6 space-x-4">
            <a href="<?php echo e(route('inventory.items.index')); ?>"
               class="px-3 py-1 text-white bg-gray-600 rounded-md hover:bg-red-700">
                Cancel
            </a>
            <button type="submit"
                    class="px-3 py-1 text-white bg-green-600 rounded hover:bg-green-700">
                💾 Update Item
            </button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Erp-system\erp-system\resources\views/inventory/items/edit.blade.php ENDPATH**/ ?>