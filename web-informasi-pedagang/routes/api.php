<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
    return DB::select('SELECT * FROM wilayah_2020 WHERE kode like "' . $kode . '%" AND CHAR_LENGTH(kode)=13 ORDER BY nama');
});
Route::get('searchbykode/{kode}/{produk}', function ($kode, $produk) {
    $where = '';
    if ($produk !== '') {
        $where = ' AND lower(s.nama_produk) LIKE "%' . strtolower($produk) . '%"';
    }
    $data = array();
    $dataPedagang = DB::select('SELECT p.id_pedagang, p.nama_pedagang,p.alamat_rinci,p.no_wa,p.no_hp,p.foto_pedagang FROM pedagang p INNER JOIN produk s ON s.id_pedagang = p.id_pedagang WHERE p.alamat like "' . $kode . '%"' . $where);
    $dataPedagang = array_map(function ($value) {
        return (array)$value;
    }, $dataPedagang);
    foreach ($dataPedagang as $ss) {
        $res = array();
        $res['pedagang'] = $ss;
        $dagangan = DB::select('SELECT * from produk where id_pedagang = ' . $ss['id_pedagang']);
        $res['dagangan'] = $dagangan;
        array_push($data, $res);
    }
    return $data;
});
