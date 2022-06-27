@extends('layouts.app')

@section('title', 'Welcome page')

@section('content')
    <div class="mt-5 col-5 mx-auto">
        <h5 class="text-info">Задание</h5>
        <ul class="">
            <li>
                Реализовать контроллер с валидацией и загрузкой excel файла
            </li>
            <li>
                Загруженный файл через jobs поэтапно (по 1000 строк) парсить в бд (таблица rows)
            </li>
            <li>
                Поля excel:
                <ul>
                    <li>1.	id</li>
                    <li>2.	name</li>
                    <li>3.	date (d.m.Y)</li>
                </ul>
            </li>
            <li>
                Для парсинга excel можете использовать maatwebsite/excel
            </li>
            <li>
                Реализовать контроллер для вывода данных (rows) с группировкой по date - двумерный массив
            </li>
            <li>
                Будет плюсом если вы реализуете через laravel echo передачу event-а на создание записи в rows
            </li>
        </ul>
        <hr>
        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mt-5 text-center col mx-auto">
                <label for="formFile">Выбрать файл (.xlsx, .xls)</label>
                <input type="file" name="formFile" class="form-control mt-3" id="formFile" required>
            </div>

            <div class="mt-3 text-center">
                <button class="btn btn-danger" type="submit">Импорт</button>
            </div>
        </form>

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
@endsection
