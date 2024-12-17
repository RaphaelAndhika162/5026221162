<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\TasController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\TugasController;
use Illuminate\Support\Facades\DB;

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
    return view('welcome');
});

Route::get('/error', function () {
    return "<h1>Server Error : Ada Kesalahan di Server</h1>";
});

Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/blog2', [DosenController::class, 'blog']);
Route::get('/biodata', [DosenController::class, 'biodata']);

Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::get('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

Route::get('/linktree', [TugasController::class, 'linktree']);
Route::get('/week5', [TugasController::class, 'week5']);

Route::get('/counter', function () {
    $records = DB::table('pagecounter')->get();
    if ($records->isNotEmpty()) {
        $record = $records->first();
        DB::table('pagecounter')->update(['Jumlah' => $record->Jumlah + 1]);
    } else {
        DB::table('pagecounter')->insert(['Jumlah' => 1]);
    }

    $updatedRecord = DB::table('pagecounter')->get()->first();

    return view('counter', ['jumlah' => $updatedRecord->Jumlah]);
});

Route::get('/tas', [TasController::class, 'index']);
Route::get('/tas/tambah', [TasController::class, 'tambah']);
Route::post('/tas/store', [TasController::class, 'store']);
Route::get('/tas/edit/{kodetas}', [TasController::class, 'editGet']);
Route::post('/tas/edit/{kodetas}', [TasController::class, 'editPost']);
Route::delete('/tas/hapus/{kodetas}', [TasController::class, 'delete']);

Route::get('/pengunjung', [PengunjungController::class, 'index']);
Route::resource('karyawan', KaryawanController::class);
