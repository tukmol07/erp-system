<?php $__env->startSection('content'); ?>
<div class="container max-w-xl px-6 py-10 mx-auto mt-8 bg-white rounded shadow">

    <h1 class="mb-4 text-2xl font-bold text-gray-800">Edit Category</h1>

    <?php if($errors->any()): ?>
        <div class="p-4 mb-4 text-red-700 bg-red-100 border border-red-300 rounded">
            <ul class="pl-5 list-disc">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('inventory.categories.update', $category->id)); ?>" method="POST" class="space-y-4">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div>
            <label for="name" class="block mb-1 font-semibold text-gray-700">Category Name</label>
            <input type="text" id="name" name="name" value="<?php echo e(old('name', $category->name)); ?>"
                   class="w-full px-4 py-2 border rounded shadow-sm focus:ring focus:ring-indigo-300" required>
        </div>

        <div class="flex mt-6 space-x-4">
            <a href="<?php echo e(route('inventory.categories.index')); ?>"
               class="px-3 py-1 text-white bg-gray-600 rounded-md hover:bg-gray-700">
                Cancel
            </a>
            <button type="submit"
                    class="px-3 py-1 text-white bg-indigo-600 rounded hover:bg-indigo-700">
                💾 Update Category
            </button>
        </div>
    </form>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Erp-system\erp-system\resources\views/inventory/categories/edit.blade.php ENDPATH**/ ?>