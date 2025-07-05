<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{DashboardController,AuthController,AdminController,CourselController,BeritaController, CategoryController};

//front
Route::get('/', [DashboardController::class,'index']);
Route::get('beranda', [DashboardController::class,'index']);
Route::get('cari_berita',[DashboardController::class,'cari_berita']);
Route::get('show/{id}', [DashboardController::class,'show']);
Route::get('galeri_foto', [DashboardController::class,'galeri_foto']);
Route::get('jurusan/{jurusan:slug}', [DashboardController::class,'jurusan'])->name('jurusan');

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function(){
  Route::group(['prefix' => 'admin', 'as' => 'admin.'],function(){
    Route::get('home', [AdminController::class, 'index'])->name('home');
    
    // slider
    Route::get('coursels', [CourselController::class, 'index'])->name('coursels');
    Route::get('coursel/{id}/edit',[CourselController::class, 'edit']);
    Route::get('admin/coursels/tambah',[CourselController::class, 'create'])->name('coursels.tambah');
    Route::post('admin/coursels/store', [CourselController::class, 'store']);
    Route::put('admin/coursel/{id}/edit', [CourselController::class, 'update'])->name('admin.coursel.update');
    Route::delete('admin/coursel/{coursel:slug}', [CourselController::class, 'destroy']);
  
    // berita
    Route::resource('berita', BeritaController::class);
    Route::get('publish/{id}', [BeritaController::class, 'update_publish']);
  
    // kategori
    Route::resource('kategori', CategoryController::class);
  });
});
