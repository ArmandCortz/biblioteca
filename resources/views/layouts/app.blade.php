<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
<<<<<<< HEAD
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
=======
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
<<<<<<< HEAD
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
=======
        <div class="min-h-screen bg-gray-100">
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
<<<<<<< HEAD
                <header class="bg-white dark:bg-gray-800 shadow">
=======
                <header class="bg-white shadow">
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
