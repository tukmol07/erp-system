<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="font-sans antialiased bg-gray-100">

    <div class="flex  ">
        <!-- Sidebar -->
        <aside class="w-64 p-4 my-8 mb-4 bg-white opacity-40 rounded-lg">
            <nav class="flex flex-col py-12 space-y-4 ">
                <a href="<?php echo e(route('hr.employment.index')); ?>"
                   class="flex items-center px-4 py-2 text-sm font-medium text-white bg-gray-600 rounded hover:bg-gray-700 ">
                    📄 Employment Records
                </a>
                <a href="<?php echo e(route('hr.employment.create')); ?>"
                   class="flex items-center px-4 py-2 text-sm font-medium text-white bg-gray-600 rounded hover:bg-gray-700 ">
                    ➕ Input Employment
                </a>

                <a href="<?php echo e(route('hr.payroll.index')); ?>"
                   class="flex items-center px-4 py-2 text-sm font-medium text-white bg-gray-600 rounded hover:bg-gray-700 ">
                    💰 Payroll System
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 min-h-screen ml-64">
            <!-- Navigation bar (if needed) -->
            <?php echo $__env->make('layouts.navigation', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            <!-- Header (optional) -->
            <?php if(isset($header)): ?>
                <header class="bg-white shadow">
                    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        <?php echo e($header); ?>

                    </div>
                </header>
            <?php endif; ?>

            <!-- Page Content -->
            <main class="p-6 bg-cover bg-center bg-no-repeat" style="background-image: url('<?php echo e(asset('images/background.jpg')); ?>');">
                <?php echo $__env->yieldContent('content'); ?>
            </main>
        </div>
    </div>

</body>
</html>
<?php /**PATH C:\Erp-system\erp-system\resources\views/layouts/hr.blade.php ENDPATH**/ ?>