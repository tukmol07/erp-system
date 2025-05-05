<div class="space-y-2">
    <div>
        <label>Serial Number:</label>
        <input type="text" name="serial_number" value="<?php echo e(old('serial_number', $item->serial_number ?? '')); ?>" class="w-full px-3 py-2 border rounded">
    </div>

    <div>
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo e(old('name', $item->name ?? '')); ?>" class="w-full px-3 py-2 border rounded">
    </div>

    <div>
        <label>Description:</label>
        <textarea name="description" class="w-full px-3 py-2 border rounded"><?php echo e(old('description', $item->description ?? '')); ?></textarea>
    </div>

    <div>
        <label>Category:</label>
        <select name="category_id" class="w-full px-3 py-2 border rounded">
            <option value="">-- None --</option>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($category->id); ?>" <?php echo e(old('category_id', $item->category_id ?? '') == $category->id ? 'selected' : ''); ?>>
                    <?php echo e($category->name); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <div>
        <label>Supplier:</label>
        <select name="supplier_id" class="w-full px-3 py-2 border rounded">
            <option value="">-- None --</option>
            <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($supplier->id); ?>" <?php echo e(old('supplier_id', $item->supplier_id ?? '') == $supplier->id ? 'selected' : ''); ?>>
                    <?php echo e($supplier->company_name); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <div class="grid grid-cols-2 gap-4">
        <div>
            <label>Quantity:</label>
            <input type="number" name="quantity" value="<?php echo e(old('quantity', $item->quantity ?? 0)); ?>" class="w-full px-3 py-2 border rounded">
        </div>

        <div>
            <label>Minimum Stock:</label>
            <input type="number" name="min_stock" value="<?php echo e(old('min_stock', $item->min_stock ?? 0)); ?>" class="w-full px-3 py-2 border rounded">
        </div>
    </div>

    <div>
        <label>Last Purchase Date:</label>
        <input type="date" name="last_purchase_date" value="<?php echo e(old('last_purchase_date', isset($item->last_purchase_date) ? $item->last_purchase_date->format('Y-m-d') : '')); ?>" class="w-full px-3 py-2 border rounded">
    </div>
</div>
<?php /**PATH C:\Erp-system\erp-system\resources\views/inventory/partials/form.blade.php ENDPATH**/ ?>