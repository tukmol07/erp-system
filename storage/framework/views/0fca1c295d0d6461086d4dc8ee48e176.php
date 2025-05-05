<?php $__env->startSection('content'); ?>

    
    <?php if(session('success')): ?>
        <div class="p-3 mb-4 text-green-800 bg-green-100 border border-green-300 rounded">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    
    <div class="mt-4 mb-6">
        <a
            href="<?php echo e(route('admin.register')); ?>"
            class="px-3 py-1 text-white bg-green-600 rounded-md hover:bg-green-700">
            ➕ Add User
        </a>
    </div>

    
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-700 bg-white border border-gray-200 rounded-lg shadow">
            <thead class="text-xs text-black uppercase bg-gray-300">
                <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Role</th>
                    <th class="px-4 py-2">Created At</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="border-t hover:bg-green-50">
                        <td class="px-4 py-2"><?php echo e($index + 1); ?></td>
                        <td class="px-4 py-2"><?php echo e($user->name); ?></td>
                        <td class="px-4 py-2"><?php echo e($user->email); ?></td>
                        <td class="px-4 py-2 capitalize"><?php echo e($user->role); ?></td>
                        <td class="px-4 py-2"><?php echo e($user->created_at->format('Y-m-d')); ?></td>
                        <td class="px-4 py-2 space-x-2">
                            <a href="<?php echo e(route('admin.edit', $user->id)); ?>"
                                class="inline-block px-3 py-1 text-sm font-semibold text-white bg-green-600 rounded-md hover:bg-green-700">Edit</a>

                             <form action="<?php echo e(route('admin.destroy', $user->id)); ?>" method="POST"
                                   class="inline-block" onsubmit="return confirm('Are you sure you want to delete this record?');">
                                 <?php echo csrf_field(); ?>
                                 <?php echo method_field('DELETE'); ?>
                                 <button type="submit"
                                         class="px-3 py-1 text-sm font-semibold text-white bg-gray-600 rounded-md hover:bg-red-700">Delete</button>
                             </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Erp-system\erp-system\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>