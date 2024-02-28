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
