<?php $__env->startSection('content'); ?>
<div class="container p-6 mx-auto">
    <div class="p-4 bg-white rounded shadow-md">
        <h1 class="mb-4 text-2xl font-bold"><?php echo e($title ?? 'Department Dashboard'); ?></h1>
        <p class="text-gray-700">Welcome to the <?php echo e($department ?? 'Department'); ?> Dashboard.</p>


<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Erp-system\erp-system\resources\views/production/dashboard.blade.php ENDPATH**/ ?>