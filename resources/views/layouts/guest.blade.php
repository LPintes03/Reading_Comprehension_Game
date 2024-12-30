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
    <body>
        <div style="position: absolute; width: 100%; height: 100%; background: url('{{ asset('FrontendAssets/16.png') }}') no-repeat center center fixed; background-size: contain; background-position: -260px;">
            <div style="position: absolute; width: 100%; height: 100%; background: linear-gradient(to right, rgba(68, 53, 53, 0.5) 5%, rgba(237, 237, 229, 0.8) 50%);">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>

