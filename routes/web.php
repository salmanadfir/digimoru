<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!`
|
*/

Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::get('/beranda','BarangController@beranda');
Route::get('/beranda/cari', 'BarangController@cari');
Route::get('/beranda/detail/{barang}', 'BarangController@showBeranda');
Route::get('/cari', 'BarangController@cariHome');
Route::get('/lihat/{barang}', 'BarangController@show');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

// Route::get('/beranda', 'BerandaController@index')->name('beranda');
//Route::get('/welcome', 'WelcomeController@index')->name('welcome');
//Route::get('lihat/{id}', 'PesanController@index');

Route::get('/home','BarangController@seller');

Route::get('/manajemenproduk', 'BarangController@manajemenproduk');
Route::delete('/manajemenproduk/{barang}', 'BarangController@destroy');

Route::get('/manajemenproduk/tambahproduk', 'BarangController@formBarang');
Route::post('/manajemenproduk/tambahproduk', 'BarangController@create');

Route::patch('/manajemenproduk/{barang}', 'BarangController@update');
Route::get('/manajemenproduk/editproduk/{barang}', 'BarangController@edit');
