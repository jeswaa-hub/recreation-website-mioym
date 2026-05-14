<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="MIOYM - Distressed Asset Equity Firm">
        <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">
        <title>{{ config('app.name', 'MIOYM') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="font-sans text-gray-900 antialiased bg-gray-50 min-h-screen flex flex-col">
        <!-- Navigation -->
        <nav class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur border-b border-gray-100">
            <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
                <a href="{{ route('landing') }}" class="text-xl font-semibold tracking-wider hover:opacity-70 transition">MIOYM</a>
                <a href="{{ route('landing') }}" class="text-sm text-gray-500 hover:text-black transition">Back to Home</a>
            </div>
        </nav>

        <div class="flex-1 flex flex-col sm:justify-center items-center pt-20 sm:pt-0">
            <div>
                <a href="{{ route('landing') }}">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-6 bg-white shadow-sm border border-gray-100 overflow-hidden sm:rounded-xl">
                {{ $slot }}
            </div>
        </div>

        <!-- Footer -->
        <footer class="py-6 px-6 border-t border-gray-100">
            <div class="max-w-6xl mx-auto">
                <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                    <p class="text-sm text-gray-400">© Copyright 2024 MIOYM. All Rights Reserved.</p>
                    <p class="text-sm text-gray-400">Design & Developed By: Digital Guider</p>
                </div>
            </div>
        </footer>

        @livewireScripts
    </body>
</html>
