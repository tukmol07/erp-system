<?php $__env->startSection('content'); ?>
<div class="max-w-2xl p-6 mx-auto rounded-lg shadow" style="background-color: rgba(75, 85, 99, 0.60);">

    <h1 class="mb-4 text-2xl font-bold text-white">Edit Supplier</h1>

    <?php if($errors->any()): ?>
        <div class="p-4 mb-4 text-red-700 bg-red-100 border border-red-300 rounded">
            <ul class="pl-5 list-disc">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('inventory.suppliers.update', $supplier->id)); ?>" method="POST" class="space-y-4">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div>
            <label for="company_name" class="block mb-1 font-semibold text-white">Company Name</label>
            <input type="text" id="company_name" name="company_name" value="<?php echo e(old('company_name', $supplier->company_name)); ?>"
                   class="w-full px-4 py-2 border rounded shadow-sm focus:ring focus:ring-indigo-300" required>
        </div>

        <div>
            <label for="address" class="block mb-1 font-semibold text-white">Address</label>
            <input type="text" id="address" name="address" value="<?php echo e(old('name', $supplier->address)); ?>"
                   class="w-full px-4 py-2 border rounded shadow-sm focus:ring focus:ring-indigo-300" required>
        </div>

        <div>
            <label for="email" class="block mb-1 font-semibold text-white">Email</label>
            <input type="text" id="email" name="email" value="<?php echo e(old('name', $supplier->email)); ?>"
                   class="w-full px-4 py-2 border rounded shadow-sm focus:ring focus:ring-indigo-300" required>
        </div>

        <div>
            <label for="contact_person" class="block mb-1 font-semibold text-white">Contact Person</label>
            <input type="text" id="contact_person" name="contact_person" value="<?php echo e(old('name', $supplier->contact_person)); ?>"
                   class="w-full px-4 py-2 border rounded shadow-sm focus:ring focus:ring-indigo-300" required>
        </div>

        <div>
            <label for="contact_number" class="block mb-1 font-semibold text-white">Contact Number</label>
            <input type="text" id="contact_number" name="contact_number" value="<?php echo e(old('name', $supplier->contact_number)); ?>"
                   class="w-full px-4 py-2 border rounded shadow-sm focus:ring focus:ring-indigo-300" required>
        </div>

        <div class="flex mt-6 space-x-4 text-sm">

            <button type="submit"
                    class="inline-block px-3 py-1 text-white bg-gray-600 rounded hover:gray-indigo-700">
                💾 Update Supplier
            </button>
        </div>
    </form>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.inventory', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Erp-system\erp-system\resources\views/inventory/suppliers/edit.blade.php ENDPATH**/ ?>