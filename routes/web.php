<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

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

Route::get('/ets', function () {
    return view('ets');
});

Route::get('/biodata', function () {
    return view('biodata');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/formulir', function () {
    return view('formulir');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/master', function () {
    return view('master');
});

Route::get('/tambah', function () {
    return view('tambah');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/testimonial', function () {
    return view('testimonial');
});

Route::get('/mystyle', function () {
    return view('mystyle');
});

Route::get('/stylelinktree', function () {
    return view('stylelinktree');
});

Route::get('/linktree', function () {
    return view('linktree');
});

Route::get('/responsive', function () {
    return view('responsive');
});

Route::get('/style', function () {
    return view('style');
});

Route::get('/style2', function () {
    return view('style2');
});

Route::get('/styles_tugas1', function () {
    return view('styles_tugas1');
});

Route::get('/error', function () {
    return "<h1>Server Error : Ada Kesalahan di Server</h1>";
});

Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

Route::get('dosen', 'App\Http\Controllers\DosenController@index');
Route::get('blog', 'App\Http\Controllers\DosenController@blog');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

// Route::get('/pegawai/{nama}', 'App\Http\Controllers\PegawaiController@index');
Route::get('/formulir', 'App\Http\Controllers\PegawaiController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\PegawaiController@proses');

Route::get('/pegawai','App\Http\Controllers\PegawaiDBController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiDBController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiDBController@edit');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiDBController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiDBController@cari');
