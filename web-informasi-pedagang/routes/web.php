<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web"  middleware group. Now create something great!
|
*/

//route Autentikasi
Auth::routes(['register' => false]);

//route pengaduan
Route::get('/index', function () {
    return view('pengaduan.index');
});
Route::get('/aduan','AduanController@index');
Route::post('/save-aduan','AduanController@store');



Route::get('/', function () {
	if (Auth::user()) {
        return redirect('/home');
    }
    return view('home');
});


Route::get('/kurir', 'SearchKurirController@index');

Route::get('/kurir-terdekat', 'MencariKurirTerdekatController@index');

Route::post('/search-kurir', 'SearchKurirController@search');


Route::get('/pedagang', function () {
    return view('search-pedagang.cari-pedagang');
});
Route::get('/hasil-pedagang', function () {
    return view('search-pedagang.hasil-pedagang');
});



Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth','admin']], function (){

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/role-register','Admin\DashboardController@registered');
    Route::get('/role-edit/{id}','Admin\DashboardController@registeredit');
    Route::put('/role-register-update/{id}','Admin\DashboardController@registerupdate');
    Route::delete('/role-delete/{id}','Admin\DashboardController@registerdelete');

    Route::get('/pengacara','Admin\PengacaraController@index');

});


//to index kurir
Route::get(
    '/kurir/index', 'RequestKurirControllers@index'
)->name('kurirIndex');

Route::get(
    '/kurir/request', 'RequestKurirControllers@request'
)->name('kurirRequest');

Route::get(
    '/kurir/requestp', 'RequestKurirControllers@requestp'
)->name('kurirRequestp');

Route::get(
    '/kurir/konfirmasi', 'RequestKurirControllers@konfir'
)->name('kurirKonfirmasi');

Route::get(
    '/kurir/viewproduk', 'RequestKurirControllers@view'
)->name('kurirViewproduk');

Route::get(
    '/kurir/pedagang', 'RequestKurirControllers@pedagangView'
)->name('kurirProdukd');

Route::get(
    '/kurir/konfirmasipdg', 'RequestKurirControllers@konfirpdg'
)->name('kurirKonfirmasipdg');

Route::get('/', 'MencariKurirTerdekatController@index');



Route:: get('/','kurirController@index');
Route:: get('/dataKurir','kurirController@index');
Route:: post('/dataKurir/create','kurirController@create');
