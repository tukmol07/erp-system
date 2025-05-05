<?php $__env->startSection('content'); ?>

<style>
.submit-btn {
    margin-block-start: 2rem;
    padding: 0.75rem 1.5rem;
    background-color: #007BFF;
    color: #fff;
    font-weight: bold;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.submit-btn:hover {
    background-color: #0056b3;
}
</style>

<!-- Centering Wrapper -->
<div class="flex justify-center py-10">
    <div class="w-full max-w-5xl p-8 bg-white shadow-md rounded-xl">
        <h2 class="mb-6 text-3xl font-semibold text-center text-gray-800">Edit Employment Record</h2>

        <form action="<?php echo e(route('hr.hr.employment.update', $record->id)); ?>" method="POST" class="space-y-6">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Employee Name</label>
                    <input type="text" name="employee_name" value="<?php echo e(old('employee_name', $record->employee_name)); ?>" class="w-full p-2 mt-1 border border-gray-300 rounded focus:ring focus:ring-blue-200" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Employee Number</label>
                    <input type="text" name="employee_number" value="<?php echo e(old('employee_number', $record->employee_number)); ?>" class="w-full p-2 mt-1 border border-gray-300 rounded" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Visa Number</label>
                    <input type="text" name="visa_number" value="<?php echo e(old('visa_number', $record->visa_number)); ?>" class="w-full p-2 mt-1 border border-gray-300 rounded" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Category Resident</label>
                    <input type="text" name="category_resident" value="<?php echo e(old('category_resident', $record->category_resident)); ?>" class="w-full p-2 mt-1 border border-gray-300 rounded" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Nationality</label>
                    <input type="text" name="nationality" value="<?php echo e(old('nationality', $record->nationality)); ?>" class="w-full p-2 mt-1 border border-gray-300 rounded" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Date Arrival</label>
                    <input type="date" name="date_arrival" value="<?php echo e(old('date_arrival', $record->date_arrival)); ?>" class="w-full p-2 mt-1 border border-gray-300 rounded" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Date Hired</label>
                    <input type="date" name="date_hired" value="<?php echo e(old('date_hired', $record->date_hired)); ?>" class="w-full p-2 mt-1 border border-gray-300 rounded" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Kiwa Contract Number</label>
                    <input type="text" name="kiwa_contract_number" value="<?php echo e(old('kiwa_contract_number', $record->kiwa_contract_number)); ?>" class="w-full p-2 mt-1 border border-gray-300 rounded" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Salary</label>
                    <input type="number" name="salary" value="<?php echo e(old('salary', $record->salary)); ?>" class="w-full p-2 mt-1 border border-gray-300 rounded" required>
                </div>

                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700">Educational Background</label>
                    <textarea name="educational_background" rows="2" class="w-full p-2 mt-1 border border-gray-300 rounded"><?php echo e(old('educational_background', $record->educational_background)); ?></textarea>
                </div>

                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700">Skills</label>
                    <textarea name="skills" rows="2" class="w-full p-2 mt-1 border border-gray-300 rounded"><?php echo e(old('skills', $record->skills)); ?></textarea>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Ticket Provided</label>
                    <select name="ticket_provided" class="w-full p-2 mt-1 border border-gray-300 rounded" required>
                        <option value="1" <?php echo e($record->ticket_provided ? 'selected' : ''); ?>>Yes</option>
                        <option value="0" <?php echo e(!$record->ticket_provided ? 'selected' : ''); ?>>No</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Residence Renewal</label>
                    <select name="residence_renewal" class="w-full p-2 mt-1 border border-gray-300 rounded" required>
                        <?php $__currentLoopData = [2, 4, 6, 8, 10]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $year): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($year); ?>" <?php echo e($record->residence_renewal == $year ? 'selected' : ''); ?>><?php echo e($year); ?> years</option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>

            <div class="flex items-center justify-between mt-8 text-sm">
                <a href="<?php echo e(route('hr.hr.employment.index')); ?>" class="px-3 py-1 text-white bg-gray-600 rounded hover:bg-red-700">Back to list</a>
                <button type="submit" class="px-3 py-1 text-white bg-green-600 rounded hover:bg-green-700">Update</button>
            </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Erp-system\erp-system\resources\views/hr/employment/edit.blade.php ENDPATH**/ ?>