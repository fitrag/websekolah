<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{DashboardController,AuthController,AdminController,CourselController,BeritaController, CategoryController, JurusanController, EventController, PengaturanController, EskulController, AlumniController};

//front
Route::get('/', [DashboardController::class,'index']);
Route::get('beranda', [DashboardController::class,'index']);
Route::get('sejarah', [DashboardController::class,'index']);
Route::get('portofolio', [DashboardController::class,'index']);
Route::get('contact', [DashboardController::class,'index']);
Route::get('struktur/organisasi', [DashboardController::class,'struktur_organisasi'])->name('struktur-organisasi');
Route::get('logo', [DashboardController::class,'logo'])->name('logo');

Route::get('cari_berita',[DashboardController::class,'cari_berita']);
Route::get('show/{id}', [DashboardController::class,'show']);
Route::get('showsejarah/{id}', [DashboardController::class,'showsejarah']);
Route::get('galeri_foto', [DashboardController::class,'galeri_foto']);
Route::get('jurusan/{jurusan:slug}', [DashboardController::class,'jurusan'])->name('jurusan');
Route::get('event', [DashboardController::class,'event'])->name('event.index');
Route::get('event/{event:slug}', [DashboardController::class,'show_event'])->name('event.show');

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

    // jurusan
    Route::get('jurusan', [JurusanController::class, 'index'])->name('jurusan.index');
    Route::get('jurusan/{id}/edit', [JurusanController::class, 'edit'])->name('jurusan.edit');
    Route::get('jurusan/tambah', [JurusanController::class, 'create'])->name('jurusan.tambah');
    Route::post('jurusan/store', [JurusanController::class, 'store'])->name('jurusan.store');
    Route::put('jurusan/{id}/edit', [JurusanController::class, 'update'])->name('jurusan.update');
    Route::delete('jurusan/{jurusan:slug}', [JurusanController::class, 'destroy'])->name('jurusan.destroy');

    // event
    Route::get('event', [EventController::class, 'index'])->name('event.index');
    Route::get('event/{id}/edit', [EventController::class, 'edit'])->name('event.edit');
    Route::get('event/tambah', [EventController::class, 'create'])->name('event.tambah');
    Route::post('event/store', [EventController::class, 'store'])->name('event.store');
    Route::put('event/{id}/edit', [EventController::class, 'update'])->name('event.update');
    Route::delete('event/{event:slug}', [EventController::class, 'destroy'])->name('event.destroy');

    // pengaturan
    Route::get('pengaturan', [PengaturanController::class, 'index'])->name('pengaturan.index');
    Route::put('pengaturan/update', [PengaturanController::class, 'update'])->name('pengaturan.update');

    // eskul
    Route::get('eskul', [EskulController::class, 'index'])->name('eskul.index');
    Route::get('eskul/{id}/edit', [EskulController::class, 'edit'])->name('eskul.edit');
    Route::get('eskul/tambah', [EskulController::class, 'create'])->name('eskul.tambah');
    Route::post('eskul/store', [EskulController::class, 'store'])->name('eskul.store');
    Route::put('eskul/{id}/edit', [EskulController::class, 'update'])->name('eskul.update');
    Route::delete('eskul/{eskul:id}', [EskulController::class, 'destroy'])->name('eskul.destroy');

    // alumni
    Route::get('alumni', [AlumniController::class, 'index'])->name('alumni.index');
    Route::get('alumni/tambah', [AlumniController::class, 'create'])->name('alumni.tambah');
    Route::post('alumni/store', [AlumniController::class, 'store'])->name('alumni.store');
    Route::get('alumni/{id}/edit', [AlumniController::class, 'edit'])->name('alumni.edit');
    Route::put('alumni/{id}/edit', [AlumniController::class, 'update'])->name('alumni.update');
    Route::delete('alumni/{alumni:id}', [AlumniController::class, 'destroy'])->name('alumni.destroy');
  
    // berita
    Route::resource('berita', BeritaController::class);
    Route::get('publish/{id}', [BeritaController::class, 'update_publish']);
  
    // kategori
    Route::resource('kategori', CategoryController::class);
  });
});
