<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    
    
    </head>

    <body>
        <!-- Page Heading -->
        <header class="bg-white">
            <div class="max-w-7xl ml-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>

        <!-- main -->
        <main>
            <div class="font-sans text-gray-900 antialiased">
                {{ $slot }}
            </div>
        </main>

        <!-- Page footer -->
        <footer class="bg-white">
            <div class="text-center max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $footer }}
            </div>
        </footer>
    </body>
</html>
