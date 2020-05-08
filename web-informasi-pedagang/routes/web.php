<?php

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
    return view('index');
});
// Route::get('pedagangs/index', function () {
//     return view('pedagangs.index');
// });
Route::get('/pedagangs/index', function () {
	return view('pedagangs.index');
});

Route::get('/pedagangs/tambahPedagang', function () {
	return view('pedagangs.tambahPedagang');
});

Route::get('/pedagangs/listPedagang', function () {
	return view('pedagangs.listPedagang');
});

Route::get('/pedagangs/editPedagang', function () {
	return view('pedagangs.editPedagang');
});

Route::get('/pedagangs/detailPedagang', function () {
	return view('pedagangs.detailPedagang');
});
Route::get('/pedagangs/tambahProduk', function () {
	return view('pedagangs.tambahProduk');
});
Route::get('/pedagangs/editProduk', function () {
	return view('pedagangs.editProduk');
});
Route::get('/pedagangs/editPedagang', function () {
	return view('pedagangs.editPedagang');
});
