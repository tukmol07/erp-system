<?php $__env->startSection('content'); ?>
<div class="min-h-screen p-6 bg-center bg-no-repeat bg-cover" style="background-image: url('<?php echo e(asset('images/background.jpg')); ?>');">
    <div class="flex flex-row gap-6"> <!-- Always row layout -->

        <!-- Sidebar -->
        <aside class="w-64 p-4 m-0 bg-white rounded-lg h-screen-full opacity-40" >
            <nav class="flex flex-col space-y-4">
                <a href="<?php echo e(route('hr.employment.create')); ?>"
                   class="flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded hover:bg-indigo-700">
                    ➕ Input Employment Record
                </a>
                <a href="<?php echo e(route('hr.employment.index')); ?>"
                   class="flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded hover:bg-indigo-700">
                    📄 View Employment Records
                </a>
                <a href="<?php echo e(route('hr.payroll.index')); ?>"
                   class="flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded hover:bg-indigo-700">
                    💰 Payroll System
                </a>
            </nav>
        </aside>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Erp-system\erp-system\resources\views/hr/dashboard.blade.php ENDPATH**/ ?>