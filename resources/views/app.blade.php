<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tajawal:200,300,400,500,700,800,900&amp;subset=arabic,latin">
        <link href="https://fonts.cdnfonts.com/css/satoshi?styles=135009,135005,135007,135002,135000" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
        <script src="{{asset('assets/js/main.js')}}"></script>

    </body>
</html>
