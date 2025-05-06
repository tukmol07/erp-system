<?php $__env->startSection('content'); ?>
<div class="container p-6 mx-auto text-sm">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Suppliers</h1>
        <a href="<?php echo e(route('inventory.suppliers.create')); ?>" class="px-3 py-1 text-white bg-indigo-600 rounded hover:bg-indigo-700">
            ➕ Add Supplier
        </a>
        <a href="<?php echo e(route('inventory.dashboard')); ?>" class="inline-block px-3 py-1 text-sm text-white bg-gray-600 rounded hover:bg-gray-700">
            Back to Inventory
        </a>
    </div>

    <div class="overflow-x-auto bg-white rounded shadow">
        <table class="min-w-full text-sm text-left border divide-y divide-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-3">#</th>
                    <th class="p-3">Company Name</th>
                    <th class="p-3">Address</th>
                    <th class="p-3">Email</th>
                    <th class="p-3">Contact Person</th>
                    <th class="p-3">Contact Number</th>
                    <th class="p-3">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                <?php $__empty_1 = true; $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td class="p-3"><?php echo e($supplier->id); ?></td>
                        <td class="p-3 font-medium"><?php echo e($supplier->company_name); ?></td>
                        <td class="p-3 font-medium"><?php echo e($supplier->address); ?></td>
                        <td class="p-3 font-medium"><?php echo e($supplier->email); ?></td>
                        <td class="p-3"><?php echo e($supplier->contact_person); ?></td>
                        <td class="p-3"><?php echo e($supplier->contact_number); ?></td>
                        <td class="flex p-3 space-x-2">
                            <a href="<?php echo e(route('inventory.suppliers.edit', $supplier->id)); ?>"
                               class="px-2 py-1 text-white bg-indigo-600 rounded hover:bg-indigo-700">Edit</a>
                            <form action="<?php echo e(route('inventory.suppliers.destroy', $supplier->id)); ?>" method="POST" onsubmit="return confirm('Delete this supplier?')">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="px-2 py-1 text-white bg-gray-600 rounded hover:bg-gray-700">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr><td colspan="5" class="p-4 text-center text-gray-500">No suppliers found.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Erp-system\erp-system\resources\views/inventory/suppliers/index.blade.php ENDPATH**/ ?>