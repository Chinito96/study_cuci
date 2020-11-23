<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('habitaciones', App\Http\Controllers\HabitacionesController::class);
Route::resource('appointments', App\Http\Controllers\AppointmentsController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/contact', function(){
    return view('contact');
})->name('contact');

Route::post('contact-us', [App\Http\Controllers\ContactController::class, 'saveContact']);