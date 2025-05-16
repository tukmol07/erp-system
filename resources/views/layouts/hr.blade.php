<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100">

    <div class="flex  ">
        <!-- Sidebar -->
        <aside class="w-64 p-4 my-8 mb-4 bg-white opacity-40 rounded-lg">
            <nav class="flex flex-col py-12 space-y-4 ">
                <a href="{{ route('hr.employment.index') }}"
                   class="flex items-center px-4 py-2 text-sm font-medium text-white bg-gray-600 rounded hover:bg-gray-700 ">
                    📄 Employment Records
                </a>
                <a href="{{ route('hr.employment.create') }}"
                   class="flex items-center px-4 py-2 text-sm font-medium text-white bg-gray-600 rounded hover:bg-gray-700 ">
                    ➕ Input Employment
                </a>

                <a href="{{ route('hr.payroll.index') }}"
                   class="flex items-center px-4 py-2 text-sm font-medium text-white bg-gray-600 rounded hover:bg-gray-700 ">
                    💰 Payroll System
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 min-h-screen ml-64">
            <!-- Navigation bar (if needed) -->
            @include('layouts.navigation')

            <!-- Header (optional) -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main class="p-6 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/background.jpg') }}');">
                @yield('content')
            </main>
        </div>
    </div>

</body>
</html>
