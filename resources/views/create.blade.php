@extends('layouts.app')

@section('title', 'Create row')

@section('content')
    <div class="col-3 mx-auto mt-5">
        <h5>Добавление нового имени</h5>
        <form action="/rows" method="post" class="form-control p-2 mt-3">
            @csrf
            <div class="mt-2">
                <label>Имя<sup class="text-danger">*</sup></label>
                <input class="form-control mt-2" type="text" placeholder="Иван" name="name" id="name" required>
            </div>
            <div class="d-flex align-items-center">
                <button type="submit" class="btn btn-success mt-3" id="send-btn">Добавить</button>
                <label class="error mt-2 text-danger px-3"></label>
            </div>
        </form>
    </div>
@endsection
