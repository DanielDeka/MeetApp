<?php

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
    return view('index');
});

Auth::routes();

Route::prefix('/home')->group(function () {
    Route::get('', 'HomeController@index')->name('home');
});

Route::prefix('/admin')->group(function () {
    Route::get('', 'AdminController@index');
});

Route::prefix('/pengguna')->group(function () {
    Route::get('', 'PenggunaController@index');
    Route::get('/mitra/{id}', 'PenggunaController@mitra');
    Route::get('/mitra/{id}/booking', 'PenggunaController@booking');
    Route::get('status-pemesanan', 'PenggunaController@statusPemesanan');
    Route::post('/submit-booking', 'PenggunaController@buatPemesanan');
    Route::post('/submit-verifikasi-booking', 'PenggunaController@verifikasiPemesanan');
});


Route::prefix('/mitra')->group(function () {
    Route::get('', 'MitraController@index');
    Route::get('/mitra', 'MitraController@mitra');
    Route::get('/edit','MitraController@edit');
    Route::get('/konfirmasi', 'MitraController@konfirmasi');

    Route::post('/status-toko', 'MitraController@toggleStatusToko');
    Route::post('/form-profil-mitra', 'MitraController@profilMitra');
    Route::post('/form-harga-mitra', 'MitraController@hargaMitra');
    Route::post('/tolak-pemesanan', 'MitraController@tolakPemesanan');
    Route::post('/terima-pemesanan', 'MitraController@terimaPemesanan');
});
