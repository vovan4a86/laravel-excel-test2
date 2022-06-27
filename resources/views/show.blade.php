<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Show Export</title>

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
    <body class="bg-black bg-opacity-10">
    <div class="container">
        <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div>

        <div class="mt-5">
            @foreach($rows as $row => $data)
                <p>
                    <span class="fw-bold">{{ $row }}</span>
                    <ul>
                    @foreach($data as $key => $value)
                        <li>{{ $key }} - {{ $value }}</li>
                    @endforeach
                    </ul>
                </p>
            @endforeach
        </div>

    </div>


    </body>
</html>
