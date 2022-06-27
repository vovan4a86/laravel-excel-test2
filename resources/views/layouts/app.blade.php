<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
<div class="wrapper d-flex flex-column vh-100">
    <header class="bg-dark opacity-75">
        @include('layouts.header')
    </header>

        <div class="container flex-grow-1">
            @yield('content')
        </div>

    <footer class="bg-dark opacity-75">
        @include('layouts.footer')
        @include('layouts.toast')
    </footer>
</div>
</body>
</html>

