<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources(
    [
        'kurir' => 'API\RequestKurirControllers'
    ]
);
Route::get('/kurirs/provinsi','RequestKurirControllers@test');


Route::get('/kurir/test/prov/{kode}','RequestKurirControllers@findKab');
Route::get('/kurir/test/kab/{kode}','RequestKurirControllers@findKec');
Route::get('/kurirs/find/kab/{kode}','RequestKurirControllers@findKec');
Route::post('/kurir/test/addImage/{kode}','RequestKurirControllers@addImage');
Route::get('/kurirs/ktp/','RequestKurirControllers@addKTP');
Route::post('upload/{kode}', 'RequestKurirControllers@addImage');
Route::post('upload/stnk/{kode}', 'RequestKurirControllers@addImageSTNK');
Route::post('upload/sim/{kode}', 'RequestKurirControllers@addImageSIM');
Route::post('upload/kurir/{kode}', 'RequestKurirControllers@addImageKurir');
Route::post('upload/all/', 'RequestKurirControllers@store');
Route::post('insert', 'RequestKurirControllers@masuk');
Route::get('check/', 'RequestKurirControllers@getKurir');


//Pedagang
Route::get('pedagang/lihat/{kode}','RequestPedagangController@lihat');
Route::post('pedagang/upload/{kode}', 'RequestPedagangController@addImage');
Route::post('pedagang/insert', 'RequestPedagangController@stores');

//Produk
Route::post('produk/insert', 'RequestProdukController@stores');
