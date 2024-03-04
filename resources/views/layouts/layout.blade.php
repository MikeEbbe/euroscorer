<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark hidden">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>EuroScorer</title>
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/favicon-192x192.png">
    <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="/favicon-180x180.png">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- Core CSS + Tailwind -->
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-50 dark:bg-gray-900">
    @auth
    @include('layouts.partials.nav')
    @endauth
    
    @yield('content')

    @include('layouts.partials.footer')

    @vite('resources/js/app.js')
</body>

</html>