<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client.index');
})->middleware('auth')->name('home');

Route::get('/login', [\App\Http\Controllers\Auth\AuthController::class , 'index'])->middleware('guest')->name('login');
Route::post('/login/store', [\App\Http\Controllers\Auth\AuthController::class , 'login'])->middleware('guest')->name('login.store');



require __DIR__.'/dashboard.php';

