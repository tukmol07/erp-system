<?php $__env->startSection('content'); ?>
<div class="container p-6 mx-auto">
    <div class="p-6 mb-6 bg-white rounded shadow-md">
        <h1 class="mb-2 text-3xl font-bold text-gray-800">HR Dashboard</h1>
        <p class="text-gray-600">Welcome to the Human Resources Management Panel.</p>
    </div>


    <!-- Action Buttons -->
    <div class="flex flex-wrap gap-4">
        <a href="<?php echo e(route('hr.employment.create')); ?>"
           class="inline-block px-6 py-3 font-semibold text-white transition duration-200 bg-indigo-600 rounded-lg shadow hover:bg-indigo-700">
            ➕ Input Employment Record
        </a>
        <a href="<?php echo e(route('hr.employment.index')); ?>"
           class="inline-block px-6 py-3 font-semibold text-white transition duration-200 bg-indigo-600 rounded-lg shadow hover:bg-indigo-700">
            📄 View Employment Records
        </a>
        <a href="<?php echo e(route('hr.payroll.index')); ?>"
            class="inline-block px-6 py-3 font-semibold text-white transition duration-200 bg-indigo-600 rounded-lg shadow hover:bg-indigo-700">
            💰 Payroll System
        </a>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Erp-system\erp-system\resources\views/hr/dashboard.blade.php ENDPATH**/ ?>