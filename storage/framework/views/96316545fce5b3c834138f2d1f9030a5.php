<?php $__env->startSection('content'); ?>
<div class="container p-4 mx-auto text-sm">
    <div class="p-6 mb-6 bg-white rounded shadow-md">
        <div class="flex items-center justify-between mb-2">
            <div>
                <h1 class="mb-1 text-3xl font-bold text-gray-800">Payroll Records</h1>
            </div>

            <div class="flex mb-4 space-x-4">
                <a href="<?php echo e(route('hr.dashboard')); ?>" class="inline-block px-3 py-1 text-white bg-gray-600 rounded hover:bg-gray-700">
                    Back to HR Dashboard
                </a>

                <a href="<?php echo e(route('hr.payroll.create')); ?>"
                   class="inline-block px-3 py-1 text-white bg-green-600 rounded hover:bg-green-700">
                    ➕ Create Payroll
                </a>
            </div>
        </div>

        <form action="<?php echo e(route('hr.payroll.index')); ?>" method="GET" class="flex items-center space-x-4 text-sm">
            <label for="month" class="text-gray-700">Month:</label>
            <select name="month" id="month" class="px-2 py-1 border rounded">
                <option value="">Month</option>
                <?php $__currentLoopData = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $month): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($month); ?>" <?php echo e(request('month') == $month ? 'selected' : ''); ?>>
                        <?php echo e($month); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

            <label for="search" class="text-gray-700">Employee Name:</label>
            <input type="text" name="search" id="search" value="<?php echo e(request('search')); ?>" class="px-2 py-1 border rounded" placeholder="Search by name">

            <button type="submit" class="px-2 py-1 text-white bg-green-600 rounded hover:bg-green-700">Search</button>
        </form>
        <?php if(session('success')): ?>
            <div class="p-4 mb-4 text-green-800 bg-green-100 rounded">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <div class="mt-4 verflow-x-auto" >
            <table class="min-w-full text-sm bg-white border border-gray-200 divide-y divide-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-3 py-1 text-left">No.</th>
                        <th class="px-3 py-1 text-left">Employee</th>
                        <th class="px-3 py-1 text-left">Month</th>
                        <th class="px-3 py-1 text-left">Basic Salary</th>
                        <th class="px-3 py-1 text-left">Allowances</th>
                        <th class="px-3 py-1 text-left">Deductions</th>
                        <th class="px-3 py-1 text-left">Overtime Hours</th>
                        <th class="px-3 py-1 text-left">Overtime Rate</th>
                        <th class="px-3 py-1 text-left">Overtime Pay</th>
                        <th class="px-3 py-1 text-left">Bonus</th>
                        <th class="px-3 py-1 text-left">Net Salary</th>
                        <th class="px-3 py-1 text-left">Remarks</th>
                        <th class="px-3 py-1 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <?php $__empty_1 = true; $__currentLoopData = $payrolls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payroll): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td class="px-3 py-1"><?php echo e($payroll->id); ?></td>
                            <td class="px-3 py-1"><?php echo e($payroll->employee->employee_name); ?></td>
                            <td class="px-3 py-1"><?php echo e($payroll->month); ?></td>
                            <td class="px-3 py-1"><?php echo e(number_format($payroll->basic_salary, 2)); ?></td>
                            <td class="px-3 py-1"><?php echo e(number_format($payroll->allowances, 2)); ?></td>
                            <td class="px-3 py-1"><?php echo e(number_format($payroll->deductions, 2)); ?></td>
                            <td class="px-3 py-1"><?php echo e($payroll->overtime_hours); ?></td>
                            <td class="px-3 py-1"><?php echo e(number_format($payroll->overtime_rate, 2)); ?></td>
                            <td class="px-3 py-1"><?php echo e(number_format($payroll->overtime_pay, 2)); ?></td>
                            <td class="px-3 py-1"><?php echo e(number_format($payroll->bonus, 2)); ?></td>
                            <td class="px-3 py-1"><?php echo e(number_format($payroll->net_salary, 2)); ?></td>
                            <td class="px-3 py-1"><?php echo e($payroll->remarks); ?></td>
                            <td class="flex px-3 py-1 space-x-2">
                                <a href="<?php echo e(route('hr.payroll.edit', $payroll->id)); ?>"
                                    class="inline-block px-3 py-1 text-sm font-semibold text-white bg-green-600 rounded-md hover:bg-green-700">Edit</a>

                                <form action="<?php echo e(route('hr.payroll.destroy', $payroll->id)); ?>" method="POST" class="inline-block" onsubmit="return confirm('Are you sure?');">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="px-3 py-1 text-white bg-gray-600 rounded hover:bg-red-700">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="13" class="px-4 py-4 text-center text-gray-500">No payroll records found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <!-- Pagination Links -->
        <div class="mt-4">
            <?php echo e($payrolls->links()); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Erp-system\erp-system\resources\views/hr/payroll/index.blade.php ENDPATH**/ ?>