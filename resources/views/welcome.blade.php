<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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

        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mt-5 text-center col-3 mx-auto">
                <label for="formFile" class="d-block">Выбрать файл (.xlsx, .xls)</label>
                <input type="file" name="formFile" class="form-control" id="formFile" required>
            </div>

            <div class="mt-3 text-center">
                <button class="btn btn-danger" type="submit">Import</button>
            </div>
        </form>

        <div class="mt-3 text-center">
            <a href="{{ route('output') }}" class="btn btn-primary">Export</a>
        </div>

        <div class="mt-3 text-center">
            <a href="{{ route('output') }}" class="btn btn-primary">Show</a>
        </div>

        <div class="mt-5">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">Bootstrap</strong>
                <small>11 мин назад</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Закрыть"></button>
            </div>
            <div class="toast-body">
                Привет, мир! Это тост-сообщение.
            </div>
        </div>
    </div>
    <script>

    </script>
    </body>
</html>
