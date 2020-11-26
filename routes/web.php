<?php

use Illuminate\Support\Facades\Route;
use App\Models\Restaurantes;

Route::get('/', function () {
    $restaurantes = Restaurantes::all();
    return view('welcome', compact('restaurantes'));
});

Auth::routes();

Route::resource('habitaciones', App\Http\Controllers\HabitacionesController::class);
Route::resource('restaurantes', App\Http\Controllers\RestaurantesController::class);
Route::resource('appointments', App\Http\Controllers\AppointmentsController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/contact', function(){
    return view('contact');
})->name('contact');

Route::post('contact-us', [App\Http\Controllers\ContactController::class, 'saveContact']);