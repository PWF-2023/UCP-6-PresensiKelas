<?php

use App\Http\Controllers\PresensiController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// tambahkan route presensi disini
Route::get('/presensi', [PresensiController::class, 'index'])->name('presensi.index');

// tambahkan route matkul
Route::get('/matkul', [MatkulController::class, 'index'])->name('matkul.index');


// tambahkan route kelas
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
