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

Route:: get('/','kurirController@index');

Route:: get('/dataKurir','kurirController@index');
Route:: post('/dataKurir/create','kurirController@create');

Route:: get('/listKurir','kurirController@viewKurir');
Route:: get('/listKurir/dataKurir','kurirController@create');
Route:: get('/dataKurir/{id_kurir}/edit','kurirController@edit_function');
Route:: post('/dataKurir/{id_kurir}/update','kurirController@update');





Route:: get('/dataKurir/hapus/{id_kurir}','kurirController@hapus');

