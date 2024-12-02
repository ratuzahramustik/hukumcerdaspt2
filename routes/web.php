<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\UserController;

// Rute untuk halaman utama, login, dan register
Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute yang hanya bisa diakses setelah login
Route::middleware('auth')->group(function () {
    Route::get('/profile', [AuthController::class, 'showProfile'])->name('profile.show');
    Route::resource('kategori', KategoriController::class);

    Route::post('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
    Route::put('/kategori/{kategori}', [KategoriController::class, 'edit'])->name('kategori.edit');
    Route::delete('kategori/delete/{kategori}', [KategoriController::class, 'destroy'])->name('kategori.delete');

    Route::get('/dashboard', function () {
        return view('dash');
    })->name('dashboard');

    Route::get('/about', function () {
        return view('about');
    })->name('about');

    Route::get('/info', function () {
        return view('infoHukum.index');
    })->name('info');


    Route::get('/hukum', [KategoriController::class, 'show'])->name('hukum');


    Route::get('/solusi', function () {
        return view('solusi');
    })->name('solusi');

    Route::get('/konsultasi', function () {
        return view('konsultasi');
    })->name('konsultasi');

    Route::get('/question', function () {
        return view('question');
    })->name('question');

    Route::get('/pro', function () {
        return view('pro');
    })->name('pro');

    // Pengertian
    Route::get('/pengertianpidana', function () {
        return view('pengertian.pengertianpidana');
    })->name('pengertianpidana');

    Route::get('/pengertianperdata', function () {
        return view('pengertian.pengertianperdata');
    })->name('pengertianperdata');

    Route::get('/pengertianpajakdankeuangan', function () {
        return view('pengertian.pengertianpajakdankeuangan');
    })->name('pengertianpajakdankeuangan');

    Route::get('/pengertianketenagakerjaan', function () {
        return view('pengertian.pengertianketenagakerjaan');
    })->name('pengertianketenagakerjaan');

    Route::get('/pengertianham', function () {
        return view('pengertian.pengertianham');
    })->name('pengertianham');

    // Kategori
    Route::get('/pidana', [KategoriController::class, 'showPidana'])->name('katpidana');
    Route::get('/perdata', [KategoriController::class, 'showPerdata'])->name('katperdata');
    Route::get('/pajak', [KategoriController::class, 'showPajak'])->name('katpajak');
    Route::get('/kerja', [KategoriController::class, 'showKerja'])->name('katkerja');
    Route::get('/ham', [KategoriController::class, 'showHam'])->name('katham');

    Route::get('/pidana/{id}', [KategoriController::class, 'showDeskPidana'])->name('deskpidana');
    Route::get('/perdata/{id}', [KategoriController::class, 'showDeskPerdata'])->name('deskperdata');
    Route::get('/pajak/{id}', [KategoriController::class, 'showDeskPajak'])->name('deskpajak');
    Route::get('/kerja/{id}', [KategoriController::class, 'showDeskKerja'])->name('deskkerja');
    Route::get('/ham/{id}', [KategoriController::class, 'showDeskHam'])->name('deskham');

    // Dokumen
    Route::get('/dokumen1', function () {
        return view('dokumen1');
    })->name('dokumen1');

    Route::get('/dokumenView1', function () {
        return view('suratPernyataan');
    })->name('view1');

    Route::get('/dokumen2', function () {
        return view('dokumen2');
    })->name('dokumen2');

    Route::get('/dokumenView2', function () {
        return view('surat_pernyataandaftarhitam');
    })->name('view2');

    Route::get('/generate-pdf', [AuthController::class, 'generatePdf'])->name('pdf1');
    Route::get('/export-pdf', [AuthController::class, 'exportPdf'])->name('pdf2');


    Route::resource('users', UserController::class);
    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');


    // Rute untuk menyimpan pesan (dari form pengguna)
    Route::post('/message/send', [PesanController::class, 'store'])->name('message.send');

        // Rute untuk menampilkan pesan di halaman admin, hanya untuk yang sudah login
    Route::get('admin/pesans', [PesanController::class, 'index'])->name('admin.pesans');

    Route::delete('/admin/pesans/{id}', [PesanController::class, 'destroy'])->name('pesans.destroy');
});
