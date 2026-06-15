<?php

use App\Http\Controllers\BelanjaController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaiDBController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlashdiskController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\NilaiPesertaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "<h1>Halo, Selamat datang</h1> di tutorial laravel <u>www.malasngoding.com</u>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('template', function () {
    return view('template');
});


Route::get('dosen', [DosenController::class, 'index']);
Route::get('bio', [DosenController::class, 'biodata']);
Route::get('/pegawailama/{nama}', [PegawaiController::class, 'index']);

Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

Route::get('pert5', function () {
    return view('pertemuan5');
});

Route::get('ituindex', function () {
    return view('index');
});

Route::get('itulinktree', function () {
    return view('linktree');
});

Route::get('ituintro', function () {
    return view('intro');
});

Route::get('itunews', function () {
    return view('news');
});

Route::get('itunewslagi', function () {
    return view('newsLagi');
});

Route::get('ituresponsive', function () {
    return view('responsive');
});

Route::get('menu', function () {
    return view('all-menu');
});

//route CRUD
Route::get('/pegawai', [PegawaiDBController::class, 'index']);

Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);

//route CRUD untuk flashdisk
Route::get('/flashdisk', [FlashdiskController::class, 'indexflashdisk']);
Route::get('/flashdisk/cari', [FlashdiskController::class, 'cari']);
Route::get('/flashdisk/tambah', [FlashdiskController::class, 'tambah']);
Route::post('/flashdisk/store', [FlashdiskController::class, 'store']);
Route::get('/flashdisk/edit/{kode}', [FlashdiskController::class, 'edit']);
Route::post('/flashdisk/update', [FlashdiskController::class, 'update']);
Route::get('/flashdisk/hapus/{kode}', [FlashdiskController::class, 'hapus']);

//route CRUD untuk belanja
Route::get('/belanja', [BelanjaController::class, 'indexbelanja']);
Route::get('/belanja/tambah', [BelanjaController::class, 'tambah']);
Route::post('/belanja/store', [BelanjaController::class, 'store']);
Route::get('/belanja/hapus/{kode}', [BelanjaController::class, 'hapus']);

//route CRUD untuk nilai
Route::get('/nilai', [NilaiController::class, 'indexnilai']);
Route::get('/nilai/tambah', [NilaiController::class, 'tambah']);
Route::post('/nilai/store', [NilaiController::class, 'store']);

//route CRUD untuk siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa/store', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/edit/{nrp}', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/update/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/destroy/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

//route CRUD untuk nilai peserta
Route::get('/eas', [NilaiPesertaController::class, 'indexnilai']);
Route::get('/eas/tambah', [NilaiPesertaController::class, 'tambah']);
Route::post('/eas/store', [NilaiPesertaController::class, 'store']);
