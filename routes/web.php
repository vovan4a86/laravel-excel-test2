<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\RowController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/import', [ExcelController::class, 'import'])
    ->name('import');
Route::get('/output', [ExcelController::class, 'output'])
    ->name('output');

// Добавление новой записи
Route::get('/rows/create', [RowController::class, 'create'])
    ->name('create');
Route::post('/rows', [RowController::class, 'store'])
    ->name('store');
