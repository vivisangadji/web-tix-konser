<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [App\Http\Controllers\PesanTiketController::class, 'index'])->name('pesan.tiket');
Route::post('/pesan-tiket', [App\Http\Controllers\PesanTiketController::class, 'store'])->name('pesan.tiket.store');

Route::get('/dashboard', function () {
    // return view('dashboard');
    return view('layouts.admin.index');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::resource('pesanan', App\Http\Controllers\PesananController::class);
    Route::resource('tiket', App\Http\Controllers\TiketController::class);
    Route::get('/check', [App\Http\Controllers\CheckInController::class, 'index'])->name('check');
    Route::get('/check-id', [App\Http\Controllers\CheckInController::class, 'check'])->name('check.id');
    Route::patch('/check/{id}', [App\Http\Controllers\CheckInController::class, 'update'])->name('check.update');
    Route::get('/laporan', [App\Http\Controllers\LaporanController::class,'index'])->name('laporan');
});


require __DIR__.'/auth.php';
