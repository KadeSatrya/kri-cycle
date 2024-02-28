<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers as Controllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('/kerajinan')->group(function () {
    Route::get('', [Controllers\KerajinanController::class, 'index'])->name("kerajinan.index");
    Route::get('/{id}', [Controllers\KerajinanController::class, 'show'])->name("kerajinan.show");
    Route::get('/create', [Controllers\KerajinanController::class, 'create'])->name("kerajinan.create");
    Route::post('', [Controllers\KerajinanController::class, 'store'])->name("kerajinan.store");
    Route::get('/{id}/edit', [Controllers\KerajinanController::class, 'update'])->name("kerajinan.edit");
    Route::put('/{id}', [Controllers\KerajinanController::class, 'update'])->name("kerajinan.update");
    Route::delete('/{id}', [Controllers\KerajinanController::class, 'destroy'])->name("kerajinan.destroy");
});

Route::prefix('/sampah')->group(function () {
    Route::get('', [Controllers\SampahController::class, 'index'])->name("sampah.index");
    Route::get('/{id}', [Controllers\SampahController::class, 'show'])->name("sampah.show");
    Route::get('/create', [Controllers\SampahController::class, 'create'])->name("sampah.create");
    Route::post('', [Controllers\SampahController::class, 'store'])->name("sampah.store");
    Route::get('/{id}/edit', [Controllers\SampahController::class, 'update'])->name("sampah.edit");
    Route::put('/{id}', [Controllers\SampahController::class, 'update'])->name("sampah.update");
    Route::delete('/{id}', [Controllers\SampahController::class, 'destroy'])->name("sampah.destroy");
});
