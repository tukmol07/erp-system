<?php $__env->startSection('content'); ?>

<style>
    .btn-custom {
        padding: 0.75rem 1.5rem;
        border-radius: 0.375rem;
        background-color: #4c51bf;
        color: white;
        font-weight: 600;
        transition: background-color 0.2s ease, transform 0.2s ease;
    }

    .btn-custom:hover {
        background-color: #434190;
        transform: translateY(-2px);
    }

    .btn-custom:focus {
        outline: none;
        box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.5); /* Focus ring */
    }

    .btn-custom:active {
        background-color: #333366;
        transform: translateY(1px);
    }

    .btn-back {
        padding: 0.75rem 1.5rem;
        border-radius: 0.375rem;
        background-color: #e53e3e; /* Red color */
        color: white;
        font-weight: 600;
        transition: background-color 0.2s ease, transform 0.2s ease;
    }

    .btn-back:hover {
        background-color: #c53030; /* Darker red for hover effect */
        transform: translateY(-2px);
    }

    .btn-back:focus {
        outline: none;
        box-shadow: 0 0 0 2px rgba(239, 68, 68, 0.5); /* Focus ring */
    }

    .btn-back:active {
        background-color: #9b2c2c; /* Darker red for active state */
        transform: translateY(1px);
    }
</style>

<div class="max-w-4xl p-6 mx-auto rounded-lg shadow" style="background-color: rgba(75, 85, 99, 0.60);">
    <h2 class="mb-4 text-2xl font-bold text-white">Edit Payroll Record</h2>

    <form action="<?php echo e(route('hr.payroll.update', $payroll->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <!-- Employee Dropdown -->
            <div>
                <label for="employee_id" class="block text-sm font-medium text-white">Employee</label>
                <select name="employee_id" id="employee_id" class="w-full p-2 text-black border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <option value="" disabled>Select Employee</option>
                    <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($employee->id); ?>" <?php echo e($payroll->employee_id == $employee->id ? 'selected' : ''); ?>><?php echo e($employee->employee_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>


            <div>
                <label for="month" class="block text-sm font-medium text-white">Month</label>
                <input type="text" name="month" value="<?php echo e(old('month', $payroll->month)); ?>" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label for="basic_salary" class="block text-sm font-medium text-white">Basic Salary</label>
                <input type="number" name="basic_salary" value="<?php echo e(old('basic_salary', $payroll->basic_salary)); ?>" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label for="allowances" class="block text-sm font-medium text-white">Allowances</label>
                <input type="number" name="allowances" value="<?php echo e(old('allowances', $payroll->allowances)); ?>" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label for="deductions" class="block text-sm font-medium text-white">Deductions</label>
                <input type="number" name="deductions" value="<?php echo e(old('deductions', $payroll->deductions)); ?>" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label for="overtime_hours" class="block text-sm font-medium text-white">Overtime Hours</label>
                <input type="number" name="overtime_hours" value="<?php echo e(old('overtime_hours', $payroll->overtime_hours)); ?>" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label for="bonus" class="block text-sm font-medium text-white">Bonus</label>
                <input type="number" step="0.01" name="bonus" value="<?php echo e(old('bonus', $payroll->bonus)); ?>" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
        </div>

        <div class="mt-4">
            <label for="remarks" class="block text-sm font-medium text-white">Remarks</label>
            <textarea name="remarks" rows="3" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500"><?php echo e(old('remarks', $payroll->remarks)); ?></textarea>
        </div>

        <div class="flex justify-between gap-4 mt-6 text-sm">
            <button type="submit" class="px-3 py-1 text-white bg-gray-600 rounded hover:bg-gray-700">Update</button>
        </div>
    </div>
</form>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.hr', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Erp-system\erp-system\resources\views/hr/payroll/edit.blade.php ENDPATH**/ ?>