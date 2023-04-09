<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark hidden">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Eurovision scores</title>

    <!-- Core CSS + Tailwind -->
    @vite('resources/css/app.css')

    <style>
    </style>
</head>

<body class="bg-gray-50 dark:bg-gray-900">
    @include('layouts.partials.nav')
    @yield('content')
</body>

@vite('resources/js/app.js')

</html>