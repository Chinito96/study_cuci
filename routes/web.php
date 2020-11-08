<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('habitaciones', App\Http\Controllers\HabitacionesController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');