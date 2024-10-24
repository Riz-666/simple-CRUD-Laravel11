<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MobilController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mobil', [MobilController::class, 'TampilMobil'])->name('mobil');

Route::get('/mobil/add', [MobilController::class, 'AddMobil'])->name('tambah');

Route::post('/mobil/tambah', [MobilController::class, 'submit'])->name('submit');

Route::get('/mobil/edit/{id}', [MobilController::class, 'edit'])->name('edit');

Route::post('/mobil/ubah/{id}', [MobilController::class, 'ubah'])->name('ubah');

Route::post('/mobil/hapus/{id}', [MobilController::class, 'hapus'])->name('hapus');

Route::get('/mobil/view/{id}', [MobilController::class, 'view'])->name('view');

