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
| contains the "web"  middleware group. Now create something great!
|
*/



//route Autentikasi
Auth::routes(['register' => false]);
Route::group(['middleware' => ['auth','admin']], function (){

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/role-register','Admin\DashboardController@registered');
    Route::get('/role-edit/{id}','Admin\DashboardController@registeredit');
    Route::put('/role-register-update/{id}','Admin\DashboardController@registerupdate');
    Route::delete('/role-delete/{id}','Admin\DashboardController@registerdelete');

    Route::get(
        '/kurir/konfirmasi', 'RequestKurirControllers@konfir'
    )->name('kurirKonfirmasi');

    Route::get(
        '/kurir/viewproduk/{id}', 'RequestKurirControllers@view'
    )->name('kurirViewproduk');

    Route::get(
        '/kurir/konfirmasipdg', 'RequestKurirControllers@konfirpdg'
    )->name('kurirKonfirmasipdg');

    Route::get('admin/listaduan','AduanController@listaduan');
    Route::delete('/role-delete/{id}','AduanController@aduandelete');

//    Route:: get('admin/kurir','kurirController@index');
//    Route:: get('admin/dataKurir','kurirController@index');
//    Route:: post('dataKurir/create','kurirController@create')->name('createkurir');

    Route:: get('/dataKurir','kurirController@index');
    Route:: post('/dataKurir/create','kurirController@create');

    Route:: get('/listKurir','kurirController@viewKurir');
    Route:: get('/listKurir/dataKurir','kurirController@create');
    Route:: get('/dataKurir/{id_kurir}/edit','kurirController@edit_function');
    Route:: post('/dataKurir/{id_kurir}/update','kurirController@update');

    Route:: get('/dataKurir/hapus/{id_kurir}','kurirController@hapus');


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

    Route::get('/admin', function (){
        return view('jubel.admin');
    });

});



Route::middleware(['user'])->group(function (){

    //fungsi search pedagang (Kristopel)
    Route::get('/', function () {
        return view('search-pedagang.cari-pedagang');
    });
    Route::get('/hasil-pedagang', function () {
        return view('search-pedagang.hasil-pedagang');
    });

    //route pengaduan
    Route::get('pengaduan', function () {
        return view('pengaduan.index');
    });
    Route::get('pengaduan/aduan','AduanController@index');
    Route::post('save-aduan','AduanController@store');

    //route mencari kurir
    Route::get('user/kurir', 'SearchKurirController@index');

    Route::get('/kurir-terdekat', 'MencariKurirTerdekatController@index');

    Route::post('/search-kurir', 'SearchKurirController@search');

    Route::get(
        '/kurir/request', 'RequestKurirControllers@request'
    )->name('kurirRequest');

    Route::get(
        '/kurir/requestp', 'RequestKurirControllers@requestp'
    )->name('kurirRequestp');


    Route::get('/mencari', 'MencariKurirTerdekatController@index');


});


//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', function () {
//	if (Auth::user()) {
//        return redirect('/home');
//    }
//    return view('home');
//});

//Route::get(
//    '/kurir/pedagang', 'RequestKurirControllers@pedagangView'
//)->name('kurirProdukd');


//to index kurir
//Route::get(
//    '/kurir/index', 'RequestKurirControllers@index'
//)->name('kurirIndex');



Route::get('/mago', function () {
    return view('jubel.notyet');
});
