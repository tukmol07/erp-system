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
<div class="flex justify-center py-8">
    <div class="max-w-xl p-6 mx-auto rounded-lg shadow" style="background-color: rgba(75, 85, 99, 0.60);">

        <h2 class="mb-6 text-3xl font-semibold text-center text-white">Edit Employment Record</h2>

        <form action="<?php echo e(route('hr.hr.employment.update', $record->id)); ?>" method="POST" class="space-y-6">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2  ">
                <div>
                    <label class="block text-sm font-medium text-white">Employee Name</label>
                    <input type="text" name="employee_name" value="<?php echo e(old('employee_name', $record->employee_name)); ?>" class="w-full p-2 mt-1 border border-gray-300 rounded focus:ring focus:ring-blue-200" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-white">Employee Number</label>
                    <input type="text" name="employee_number" value="<?php echo e(old('employee_number', $record->employee_number)); ?>" class="w-full p-2 mt-1 border border-gray-300 rounded" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-white">Visa Number</label>
                    <input type="text" name="visa_number" value="<?php echo e(old('visa_number', $record->visa_number)); ?>" class="w-full p-2 mt-1 border border-gray-300 rounded" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-white">Category Resident</label>
                    <input type="text" name="category_resident" value="<?php echo e(old('category_resident', $record->category_resident)); ?>" class="w-full p-2 mt-1 border border-gray-300 rounded" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-white">Resident Number</label>
                    <input type="text" name="resident_number" value="<?php echo e(old('resident_number', $record->resident_number)); ?>" class="w-full p-2 mt-1 border border-gray-300 rounded" required>
                </div>


                <div>
                    <label class="block text-sm font-medium text-white">Nationality</label>
                    <input type="text" name="nationality" value="<?php echo e(old('nationality', $record->nationality)); ?>" class="w-full p-2 mt-1 border border-gray-300 rounded" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-white">Date Arrival</label>
                    <input type="date" name="date_arrival" value="<?php echo e(old('date_arrival', $record->date_arrival)); ?>" class="w-full p-2 mt-1 border border-gray-300 rounded" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-white">Date Hired</label>
                    <input type="date" name="date_hired" value="<?php echo e(old('date_hired', $record->date_hired)); ?>" class="w-full p-2 mt-1 border border-gray-300 rounded" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-white">Contract Expiration</label>
                    <input type="date" name="contract_expiry_date" value="<?php echo e(old('contract_expiry_date', $record->contract_expiry_date)); ?>" class="w-full p-2 mt-1 border border-gray-300 rounded" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-white">Kiwa Contract Number</label>
                    <input type="text" name="kiwa_contract_number" value="<?php echo e(old('kiwa_contract_number', $record->kiwa_contract_number)); ?>" class="w-full p-2 mt-1 border border-gray-300 rounded" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-white">Salary</label>
                    <input type="number" name="salary" value="<?php echo e(old('salary', $record->salary)); ?>" class="w-full p-2 mt-1 border border-gray-300 rounded" required>
                </div>

                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-white">Educational Background</label>
                    <textarea name="educational_background" rows="2" class="w-full p-2 mt-1 border border-gray-300 rounded"><?php echo e(old('educational_background', $record->educational_background)); ?></textarea>
                </div>

                <div class="flex flex-col">
                <label class="mb-1 font-semibold text-white">Skills</label>
                <select name="skills" required class="px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-500">
                    <option value="">Select a skill</option>
                    <option value="Professional">Professional</option>
                    <option value="High Skilled">High Skilled</option>
                    <option value="Skilled">Skilled</option>
                    <option value="Labors">Labors</option>
                    <option value="Others">Others</option>
                </select>
            </div>

                <div>
                    <label class="block text-sm font-medium text-white">Ticket Provided</label>
                    <select name="ticket_provided" class="w-full p-2 mt-1 border border-gray-300 rounded" required>
                        <option value="1" <?php echo e($record->ticket_provided ? 'selected' : ''); ?>>Yes</option>
                        <option value="0" <?php echo e(!$record->ticket_provided ? 'selected' : ''); ?>>No</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-white">Residence Renewal</label>
                    <select name="residence_renewal" class="w-full p-2 mt-1 border border-gray-300 rounded" required>
                        <?php $__currentLoopData = [2, 4, 6, 8, 10]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $year): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($year); ?>" <?php echo e($record->residence_renewal == $year ? 'selected' : ''); ?>><?php echo e($year); ?> years</option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>

            <div class="flex items-center justify-between mt-8 text-sm">
                <a href="<?php echo e(route('hr.hr.employment.index')); ?>" class="px-3 py-1 text-white bg-gray-600 rounded hover:bg-gray-700">Back to list</a>
                <button type="submit" class="px-3 py-1 text-white bg-indigo-600 rounded hover:bg-indigo-700">Update</button>
            </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.hr', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Erp-system\erp-system\resources\views/hr/employment/edit.blade.php ENDPATH**/ ?>