<?php

use Illuminate\Support\Facades\Route;
use App\Pedagang;

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
Route::get('/pedagangs/index', 'PedagangController@show1');
	


Route::get('/pedagangs/tambahPedagang', function () {
	return view('pedagangs.tambahPedagang');
});

Route::get('/pedagangs/listPedagang', 'PedagangController@showAll');
	// return view('pedagangs.listPedagang');

Route::get('/pedagangs/editPedagang', function () {
	return view('pedagangs.editPedagang');
});

// Route::get('/pedagangs/detailPedagang', function () {
// 	return view('pedagangs.detailPedagang');
// });

Route::get('/pedagangs/detailPedagang', 'PedagangController@index2');

Route::get('/pedagangs/tambahProduk', function () {
	return view('pedagangs.tambahProduk');
});

Route::post('/pedagang/store', 'ProdukController@store');
Route::post('/pedagang/edit/{id}', 'ProdukController@updateData');

// Route::post('/produk/delete/{id_produk}', 'ProdukController@destroy');
// // Route::post('/banners/store', 'BannerController@store');

Route::get('/pedagangs/editProduk/{id}', 'PedagangController@show');
Route::post('/pedagangs/updateProduk/{id}', 'PedagangController@update');
Route::get('/pedagang/delete/{id}', 'PedagangController@delete');	
Route::get('/pedagang/produk/{id}', 'PedagangController@detailPedang');
Route::get('/pedagangs/editInfo', 'PedagangController@edit');
Route::get('getdatapedagang/{id}', function($id){
	return Pedagang::find($id);
});
Route::post('/pedagang/updateInfo/{id}', 'PedagangController@updateInfo');

Route::get('/pedagangs/editPedagang', function () {
	return view('pedagangs.editPedagang');
});