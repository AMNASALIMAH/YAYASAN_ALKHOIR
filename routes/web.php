<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// info_lainnya - berita
Route::get('/Berita', function () {
    return view('info_lainnya.berita.berita');
})->name('berita');
Route::get('/Detail Berita', function () {
    return view('info_lainnya.berita.detail_berita');
})->name('detail_berita');

// info_lainnya - pmb
Route::get('/Daftar PMB Alkhoir', function () {
    return view('info_lainnya.pmb.daftar_pmb');
})->name('daftar_pmb');

// tentang kami
Route::get('/Sejarah-singkat', function () {
    return view('tentang_kami.sejarah');
})->name('sejarah');
Route::get('/Visi-Misi', function () {
    return view('tentang_kami.Visi-Misi');
})->name('visi-misi');
Route::get('/Struktur Organisasi', function () {
    return view('tentang_kami.struktur_organisasi');
})->name('struktur_organisasi');

// Program - SD Tahfidz Alkhoir
Route::get('/SD Tahfidz Al-Khoir', function () {
    return view('program.sdt_alkhoir.deskripsi');
})->name('SDT');

//Program -  RTQ Alkhoir
Route::get('RTQ Al-Khoir', function () {
    return view('program.rtq_alkhoir.deskripsi');
})->name('RTQ');

//Program - Mahasantri Alkhoir
Route::get('Mahasantri Al-Khoir', function () {
    return view('program.mhs_alkhoir.deskripsi');
})->name('MHS');

//Program - MT Alkhhoir
Route::get('Majelis Talim Al-Khoir', function () {
    return view('program.mt_alkhoir.deskripsi');
})->name('MT');
Route::get('/Galeri', function () {
    return view('galeri.galeri');
})->name('galeri');
Route::get('/Kontak', function () {
    return view('kontak.kontak');
})->name('kontak');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
