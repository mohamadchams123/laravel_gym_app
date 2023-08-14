<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <style>
            html{
                scroll-behavior:smooth;
            }
        body {
            margin: 0;
            padding: 0;

        }
        
        #background-container {
            /* position: fixed; */
            top: 0;
            left: 0;
            z-index: -1; /* Place behind other content */
            background-image: url('./images/OIP.jpeg');
            background-repeat: no-repeat;
            background-attachment: fixed; /* Stay fixed while scrolling */
            background-position: center;
        }
        </style>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900" id="background-container">
            @include('layouts.navigation')

            @if (isset($header))
                <header>
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
