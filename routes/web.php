<?php

use App\Http\Controllers\MataPelajaranController;
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
Route::get('/admin', function () {
    return view('dashboard');
});

Route::get('/admin/daftar-siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/admin/daftar-siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/admin/daftar-siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/admin/daftar-siswa/{siswa}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::patch('/admin/daftar-siswa/{siswa}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/admin/daftar-siswa/{siswa}', [SiswaController::class, 'destroy'])->name('siswa.destroy');


Route::get('/admin/mata-pelajaran', [MataPelajaranController::class, 'index'])->name('mata-pelajaran');
