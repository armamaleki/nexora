<?php
use Illuminate\Support\Facades\Route;



Route::prefix('/dashboard')->name('dashboard.')->middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('dashboard.index');
    })->name('index');

    Route::prefix('/role')->name('role.')->group(function () {
        Route::get('/', [\App\Http\Controllers\Dahsboard\RoleController::class , 'index'])->name('index');
        Route::get('/create', [\App\Http\Controllers\Dahsboard\RoleController::class , 'create'])->name('create');
        Route::post('/store', [\App\Http\Controllers\Dahsboard\RoleController::class , 'store'])->name('store');
        Route::get('/{id}/edit', [\App\Http\Controllers\Dahsboard\RoleController::class , 'edit'])->name('edit');
        Route::patch('/{id}/update', [\App\Http\Controllers\Dahsboard\RoleController::class , 'update'])->name('update');
    });
});


