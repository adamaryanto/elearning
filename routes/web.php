<?php

use App\Http\Controllers\Admin\DosenController;
use App\Http\Controllers\Admin\KelasController;
use App\Http\Controllers\Admin\MahasiswaController;
use App\Http\Controllers\Admin\MataKuliahController;
use App\Http\Controllers\Admin\ProgramStudiController;

// use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Mahasiswa\AbsensiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth','verified'])->prefix('admin')->name('admin.')->group(function(){
    Route::resource('prodi',ProgramStudiController::class);
    Route::resource('mahasiswa',MahasiswaController::class);
    Route::resource('mata-kuliah',MataKuliahController::class);
    Route::resource('dosen',DosenController::class);
    Route::resource('kelas',KelasController::class)->parameters(['kelas'=>'kelas']);
});

Route::middleware(['auth','verified'])->prefix('user')->name('user.')->group(function(){
    Route::get('/absensi',[AbsensiController::class,'index'])->name('absensi.index');
});


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
