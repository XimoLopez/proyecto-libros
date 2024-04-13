<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Librería Online') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
    <body class="antialiased bg-gray-100 dark:bg-gray-900">
        <div class="flex items-center justify-center min-h-screen">
            <div class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#3182ce" stroke-width="2" style="width: 100px; height: 100px;" class="mx-auto">
                    <path d="M4 2.5h16c1.1 0 2 .9 2 2v15c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2v-15c0-1.1.9-2 2-2z"/>
                    <path d="M4 2.5v19.5M20 2.5v19.5"/>
                    <path d="M4 6.5h16M4 10.5h16M4 14.5h16"/>
                </svg>
                <br>
                <h1 class="text-4xl font-bold text-blue-500 mb-4">Bienvenido a Nuestra Librería Online</h1>
                <h2 class="text-md text-gray-600 dark:text-gray-400 mb-6">
                    Este es el primer paso para acceder a nuestro sistema de préstamos y devolución de libros.<br>
                    Para poder usar nuestros servicios, necesitas estar registrado y logueado en nuestro sistema.
                </h2>
                <div class="space-x-4">
                    <a href="{{ route('login') }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Entrar
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="inline-block bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            Regístrate
                        </a>
                    @endif
                </div>
            </div>
        </div>
        @livewireScripts
    </body>
</html>
