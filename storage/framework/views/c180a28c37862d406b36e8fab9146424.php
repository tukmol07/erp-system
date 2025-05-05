<?php $__env->startSection('content'); ?>
<div class="max-w-xl p-6 mx-auto mt-8 bg-white rounded shadow">
    <h2 class="mb-6 text-xl font-semibold text-gray-700">Edit User</h2>

    <?php if(session('success')): ?>
        <div class="p-2 mb-4 text-green-700 bg-green-100 border border-green-300 rounded">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('admin.update', $user->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Name</label>
            <input type="text" name="name" value="<?php echo e($user->name); ?>" class="w-full px-3 py-2 border rounded" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-semibold">Email</label>
            <input type="email" name="email" value="<?php echo e($user->email); ?>" class="w-full px-3 py-2 border rounded" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium text-gray-700">Role</label>
            <select name="role" class="w-full px-4 py-2 text-black border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                <option value="">-- Select Role --</option>
                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($role->name); ?>" <?php echo e($user->role_id == $role->id ? 'selected' : ''); ?>>
                        <?php echo e(ucfirst($role->name)); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>


        <div class="flex justify-end gap-3">
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="px-4 py-2 text-sm text-white bg-gray-600 rounded hover:bg-red-700">Cancel</a>
            <button type="submit" class="px-4 py-2 text-sm text-white bg-green-600 rounded hover:bg-green-700">Update</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Erp-system\erp-system\resources\views/admin/edit.blade.php ENDPATH**/ ?>