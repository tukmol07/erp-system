<?php $__env->startSection('content'); ?>
<div class="container max-w-2xl p-6 mx-auto mt-6 text-sm bg-white rounded-lg shadow">
    <h1 class="mb-6 text-2xl font-bold text-gray-800">➕ Add Supplier</h1>

    <?php if(session('success')): ?>
        <div class="p-4 mb-4 text-green-700 bg-green-100 border border-green-300 rounded">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('inventory.suppliers.store')); ?>" method="POST" class="space-y-4">
        <?php echo csrf_field(); ?>

        <div>
            <label for="company_name" class="block mb-1 font-medium text-gray-700">Company Name</label>
            <input type="text" name="company_name" id="company_name"
                   class="w-full px-4 py-2 border border-gray-300 rounded focus:ring focus:ring-indigo-200"
                   required>
        </div>

        <div>
            <label for="address" class="block mb-1 font-medium text-gray-700">Address</label>
            <input type="text" name="address" id="address"
                   class="w-full px-4 py-2 border border-gray-300 rounded focus:ring focus:ring-indigo-200"
                   required>
        </div>

        <div>
            <label for="email" class="block mb-1 font-medium text-gray-700">Email</label>
            <input type="text" name="email" id="email"
                   class="w-full px-4 py-2 border border-gray-300 rounded focus:ring focus:ring-indigo-200"
                   required>
        </div>

        <div>
            <label for="contact_person" class="block mb-1 font-medium text-gray-700">Contact Person</label>
            <input type="text" name="contact_person" id="contact_person"
                   class="w-full px-4 py-2 border border-gray-300 rounded focus:ring focus:ring-indigo-200"
                   required>
        </div>

        <div>
            <label for="contact_number" class="block mb-1 font-medium text-gray-700">Contact Number</label>
            <input type="text" name="contact_number" id="contact_number"
                   class="w-full px-4 py-2 border border-gray-300 rounded focus:ring focus:ring-indigo-200"
                   required>
        </div>

        <div class="flex justify-end mt-6 space-x-4">
            <a href="<?php echo e(route('inventory.suppliers.index')); ?>"
               class="px-3 py-1 text-sm text-white bg-gray-600 rounded hover:bg-red-700">Cancel</a>
            <button type="submit"
                    class="px-3 py-1 text-sm text-white bg-green-600 rounded hover:bg-green-700">Save</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Erp-system\erp-system\resources\views/inventory/suppliers/create.blade.php ENDPATH**/ ?>