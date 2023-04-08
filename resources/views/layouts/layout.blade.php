<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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

<body class="text-center">
    @yield('content')
</body>

</html>