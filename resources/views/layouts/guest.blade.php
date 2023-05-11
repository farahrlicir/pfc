<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!--<title>{{ config('app.name', '') }}</title>-->
        <title>login</title>
        <link href="img/favicon.png" rel="icon">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-black antialiased">
        
        <div class="flex flex-col  items-center">
          
            <div class=" mt-6 px-40 py-10 mb-10 border-2 border-purple-900 shadow-md sm:rounded-lg">
                {{ $slot }}
            </div>
            
        </div>
    </body>
</html>