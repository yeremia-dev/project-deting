<?php


namespace App\Http\Controllers;

use App\Produk;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequestProdukController extends controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function stores(Request $request){
        Produk::create([
            'nama_produk' => "asd",
            'kategori' => $request['kategori'],
            'id_pedagang' => $request['id_pedagang']
        ]);
        return "sukses";
    }


    public function inserts(Request $request){
        $produk = new Produk();
        $produk->nama_produk = $request['nama_produk'];
        $produk->kategori = $request['kategori'];
        $produk->id_pedagang = $request['id_pedagang'];
        $produk->save();
        return "sukses";
    }
}
