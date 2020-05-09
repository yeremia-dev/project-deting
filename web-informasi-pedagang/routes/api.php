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

Route::get('getprovinsi', function () {
    return \Illuminate\Support\Facades\DB::select('SELECT * FROM wilayah_2020 WHERE CHAR_LENGTH(kode)=2 ORDER BY nama');
});
Route::get('getkab/{kode}', function ($kode) {
    return \Illuminate\Support\Facades\DB::select('SELECT * FROM wilayah_2020 WHERE kode like "' . $kode . '%" AND CHAR_LENGTH(kode)=5 ORDER BY nama');
});
Route::get('getkec/{kode}', function ($kode) {
    return \Illuminate\Support\Facades\DB::select('SELECT * FROM wilayah_2020 WHERE kode like "' . $kode . '%" AND CHAR_LENGTH(kode)=8 ORDER BY nama');
});
Route::get('getkel/{kode}', function ($kode) {
    return \Illuminate\Support\Facades\DB::select('SELECT * FROM wilayah_2020 WHERE kode like "' . $kode . '%" AND CHAR_LENGTH(kode)=13 ORDER BY nama');
});
Route::get('searchbykode/{kode}', function ($kode) {
    return \Illuminate\Support\Facades\DB::select('SELECT * FROM pedagang WHERE alamat like "' . $kode . '%"');
});
