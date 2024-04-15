<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/books', [BookController::class, 'index'])->name('index.blade');
Route::get('/', function () {
    return view('welcome');
});
