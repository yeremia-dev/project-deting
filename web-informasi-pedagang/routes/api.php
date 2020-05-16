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
Route::get('/kurirs/provinsi','PedagangController@test');
Route::get('/kurir/test/prov/{kode}','PedagangController@findKab');
Route::get('/kurir/test/kab/{kode}','PedagangController@findKec');
Route::get('/kurirs/find/kab/{kode}','PedagangController@findKec');
Route::get('getprovinsi', function () {
    return \Illuminate\Support\Facades\DB::select('SELECT * FROM wilayah_2020 WHERE CHAR_LENGTH(kode)=2 ORDER BY nama');
});
Route::get('getproduct/{id}', function ($id) {
    return \Illuminate\Support\Facades\DB::select('SELECT * FROM produk WHERE id_pedagang='.$id);
});
Route::get('getkab/{kode}', function ($kode) {
    return \Illuminate\Support\Facades\DB::select('SELECT * FROM wilayah_2020 WHERE kode like "' . $kode . '%" AND CHAR_LENGTH(kode)=5 ORDER BY nama');
});
Route::get('getkec/{kode}', function ($kode) {
    return \Illuminate\Support\Facades\DB::select('SELECT * FROM wilayah_2020 WHERE kode like "' . $kode . '%" AND CHAR_LENGTH(kode)=8 ORDER BY nama');
});
Route::get('getkel/{kode}', function ($kode) {
    return DB::select('SELECT * FROM wilayah_2020 WHERE kode like "' . $kode . '%" AND CHAR_LENGTH(kode)=13 ORDER BY nama');
});