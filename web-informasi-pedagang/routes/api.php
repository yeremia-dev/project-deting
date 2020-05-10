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