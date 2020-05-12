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

Route::get('/kurir', 'SearchKurirController@index');

Route::get('/kurir-terdekat', 'MencariKurirTerdekatController@index');

Route::post('/search-kurir', 'SearchKurirController@search');