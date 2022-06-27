<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcelController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/import', [ExcelController::class, 'import'])
    ->name('import');
Route::get('/output', [ExcelController::class, 'output'])
    ->name('output');
