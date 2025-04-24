<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="font-sans antialiased bg-gray-100">
    <div class="flex flex-col items-center justify-center min-h-screen px-4">


        <div class="w-full max-w-md p-2 bg-white shadow-lg rounded-xl">
            <?php echo e($slot); ?>

        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Erp-system\erp-system\resources\views/components/guest-layout.blade.php ENDPATH**/ ?>