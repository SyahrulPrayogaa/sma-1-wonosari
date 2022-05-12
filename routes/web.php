<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\SiswaController;
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

Route::get('/', function () {
    return view('landing-page');
});
Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index');

// Login Route
Route::GET('/login', [LoginController::class, 'index'])->name('login');
Route::POST('/login', [LoginController::class, 'authenticate'])->name('login.auth');
Route::GET('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/admin', function () {
    return view('dashboard');
})->name('admin')->middleware('login');

Route::get('/admin/daftar-siswa', [SiswaController::class, 'index'])->name('siswa.index')->middleware('login');
Route::get('/admin/daftar-siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/admin/daftar-siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/admin/daftar-siswa/{siswa}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::patch('/admin/daftar-siswa/{siswa}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/admin/daftar-siswa/{siswa}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

Route::get('/admin/daftar-siswa/cari', [SiswaController::class, 'search'])->name('siswa.search');

Route::get('/admin/daftar-siswa/{siswa}/nilai', [SiswaController::class, 'nilai'])->name('siswa.nilai.index');
Route::get('/admin/daftar-siswa/{siswa}/nilai/edit', [SiswaController::class, 'editNilai'])->name('siswa.nilai.edit');
Route::patch('/admin/daftar-siswa/{siswa}/nilai', [SiswaController::class, 'updateNilai'])->name('siswa.nilai.update');

Route::get('/admin/mata-pelajaran', [MataPelajaranController::class, 'index'])->name('mata-pelajaran');
