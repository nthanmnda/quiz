<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/daftar-kategori', [KategoriController::class, 'tampil']); 
Route::get('/tambah-kategori', [KategoriController::class, 'create']); 
Route::post('/simpan-kategori', [KategoriController::class, 'simpan']); 
Route::delete('/delete-kategori/{kategori}', [KategoriController::class, 'hapus'])->name('kategori.hapus'); 
Route::get('/ubah-kategori/{kategori}', [KategoriController::class, 'ubah'])->name('kategori.ubah');
Route::put('/update-kategori',[KategoriController::class, 'update']);
