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

Route::get('/admin/daftar-siswa', [SiswaController::class, 'index'])->name('daftar-siswa');
Route::get('/admin/mata-pelajaran', [MataPelajaranController::class, 'index'])->name('mata-pelajaran');
