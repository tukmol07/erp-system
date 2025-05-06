<?php $__env->startSection('content'); ?>
<div class="p-4 mx-auto bg-white rounded shadow">
    <h2 class="mb-6 text-2xl font-bold">Employment Records</h2>

    <!-- Search and Back Button Row -->
<div class="flex items-center justify-between mb-4 text-sm">
    <!-- Search Form -->
    <form method="GET" action="<?php echo e(route('hr.hr.employment.index')); ?>" class="flex items-center space-x-4">
        <label for="search" class="text-gray-700">Search by Name:</label>
        <input type="text" name="search" id="search" value="<?php echo e(request('search')); ?>"
               placeholder="Enter employee name"
               class="px-3 py-1 border rounded shadow-sm focus:outline-none focus:ring focus:border-blue-300">

        <button type="submit" class="px-3 py-1 text-white bg-green-600 rounded hover:bg-green-700">
            Search
        </button>
    </form>

    <!-- Back Button -->
    <a href="<?php echo e(route('hr.dashboard')); ?>"
       class="px-3 py-1 text-sm font-semibold text-white bg-gray-600 rounded-md hover:bg-gray-700">
        Back
    </a>
</div>


    <!-- Records Table -->
    <table class="min-w-full text-sm table-auto">
        <thead>
            <tr class="text-left bg-gray-100">
                <th class="px-3 py-1">Employee Name</th>
                <th class="px-3 py-1">Employee Number</th>
                <th class="px-3 py-1">Nationality</th>
                <th class="px-3 py-1">Visa Number</th>
                <th class="px-3 py-1">Residence Category</th>
                <th class="px-3 py-1">Kiwa Number</th>
                <th class="px-3 py-1">Date Arrival</th>
                <th class="px-3 py-1">Educational Background</th>
                <th class="px-3 py-1">Skills</th>
                <th class="px-3 py-1">Ticket Provide</th>
                <th class="px-3 py-1">Date Hired</th>
                <th class="px-3 py-1">Contract Expiration</th>

                <th class="px-3 py-1">Salary</th>
                <th class="px-3 py-1">Residence Renewal</th>
                <th class="px-3 py-1">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="border-t">
                <td class="px-3 py-1"><?php echo e($record->employee_name); ?></td>
                <td class="px-3 py-1"><?php echo e($record->employee_number); ?></td>
                <td class="px-3 py-1"><?php echo e($record->nationality); ?></td>
                <td class="px-3 py-1"><?php echo e($record->visa_number); ?></td>
                <td class="px-3 py-1"><?php echo e($record->category_resident); ?></td>
                <td class="px-3 py-1"><?php echo e($record->kiwa_contract_number); ?></td>
                <td class="px-3 py-1"><?php echo e($record->date_arrival); ?></td>
                <td class="px-3 py-1"><?php echo e($record->educational_background); ?></td>
                <td class="px-3 py-1"><?php echo e($record->skills); ?></td>
                <td class="px-3 py-1"><?php echo e($record->ticket_provided ? 'Yes' : 'No'); ?></td>
                <td class="px-3 py-1"><?php echo e($record->date_hired); ?></td>
                <td class="px-3 py-1"><?php echo e($record->contract_expiry_date); ?></td>
                <td class="px-3 py-1">$<?php echo e($record->salary); ?></td>
                <td class="px-3 py-1"><?php echo e($record->residence_renewal); ?> years</td>
                <td class="w-48 px-3 py-1">
                    <a href="<?php echo e(route('hr.hr.employment.edit', $record->id)); ?>"
                       class="inline-block px-3 py-1 text-sm font-semibold text-white bg-green-600 rounded-md hover:bg-green-700">Edit</a>

                    <form action="<?php echo e(route('hr.hr.employment.destroy', $record->id)); ?>" method="POST"
                          class="inline-block" onsubmit="return confirm('Are you sure you want to delete this record?');">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit"
                                class="px-3 py-1 text-sm font-semibold text-white bg-gray-600 rounded-md hover:bg-red-700">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="mt-4">
        <?php echo e($records->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Erp-system\erp-system\resources\views/hr/employment/index.blade.php ENDPATH**/ ?>