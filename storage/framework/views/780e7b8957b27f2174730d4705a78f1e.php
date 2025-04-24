

<?php $__env->startSection('content'); ?>
<div class="container max-w-3xl p-6 mx-auto bg-white rounded shadow">
    <div class="flex items-center justify-between mb-4">
        <h2 class="text-2xl font-bold">HR Notifications</h2>
        <a href="<?php echo e(route('hr.dashboard')); ?>"
        class="px-4 py-2 text-black transition bg-blue-600 rounded hover:bg-blue-700">
            ← Back to Dashboard
        </a>

    </div>


    <?php $__empty_1 = true; $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="flex items-center justify-between p-4 mb-2 bg-yellow-100 border-l-4 border-yellow-500 rounded">
            <span><?php echo e($notification->data['message']); ?></span>
            <form action="<?php echo e(route('hr.hr.notifications.read', $notification->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <button style="background-color: #16a34a; color: white; padding: 0.25rem 0.75rem;" class="text-sm rounded hover:bg-green-700">
                    Mark as Read
                </button>
                            </form>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p class="text-gray-600">You have no unread notifications.</p>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Erp-system\erp-system\resources\views/hr/notifications/index.blade.php ENDPATH**/ ?>