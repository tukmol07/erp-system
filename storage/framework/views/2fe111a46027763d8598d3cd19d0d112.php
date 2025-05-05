<?php $__env->startSection('content'); ?>
<div class="container max-w-4xl p-6 mx-auto mt-6 bg-white rounded shadow">
    <h2 class="mb-4 text-2xl font-bold">Create Payroll Record</h2>


    <form action="<?php echo e(route('hr.payroll.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div>
                <label for="employee_id" class="block text-sm font-medium">Employee</label>
                <select name="employee_id" id="employee_id" class="w-full p-2 text-black border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <option value="" disabled selected>Select Employee</option>
                    <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($employee->id); ?>" class="text-black"><?php echo e($employee->employee_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div>
                <label for="month" class="block text-sm font-medium">Month</label>
                <input type="text" name="month" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-600" placeholder="e.g. April 2025">
            </div>

            <div>
                <label for="basic_salary" class="block text-sm font-medium">Basic Salary</label>
                <input type="number" name="basic_salary" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label for="allowances" class="block text-sm font-medium">Allowances</label>
                <input type="number" name="allowances" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label for="deductions" class="block text-sm font-medium">Deductions</label>
                <input type="number" name="deductions" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label for="overtime_hours" class="block text-sm font-medium">Overtime Hours</label>
                <input type="number" name="overtime_hours" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <div>
                <label for="bonus" class="block text-sm font-medium">Bonus</label>
                <input type="number" step="0.01" name="bonus" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
        </div>

        <div class="mt-4">
            <label for="remarks" class="block text-sm font-medium">Remarks</label>
            <textarea name="remarks" rows="3" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
        </div>

        <div class="flex justify-end gap-4 mt-6 text-sm">
            <a href="<?php echo e(route('hr.payroll.index')); ?>" class="px-3 py-1 text-white bg-gray-600 rounded hover:bg-red-700">Cancel</a>
            <button type="submit" class="px-3 py-1 text-white bg-green-600 rounded hover:bg-green-700">Save</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Erp-system\erp-system\resources\views/hr/payroll/create.blade.php ENDPATH**/ ?>