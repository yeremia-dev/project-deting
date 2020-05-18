<?php

namespace App\Http\Controllers;

use App\Produk;
use Illuminate\Http\Request;
use App\Pedagang;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pedagang = new Pedagang();
        $pedagang->nama = $request['nama'];
        $pedagang->alamat_rinci = $request['alamatRinci'];
        $pedagang->alamat = $request['alamat'];
        $pedagang->no_hp = $request['noHp'];
        $pedagang->no_wa = $request['noWA'];
        $pedagang->status=2;
        $explode = explode(',', $request['foto_pedagang']);
        if (strpos($explode[0],'data')!==false) {
            $explode = explode(',', $request['foto_pedagang']);
            $decode = base64_decode($explode[1]);
            if (strpos($explode[1], 'jpeg')!==false)
                $extension = 'jpg';
            else
                $extension = 'png';

            $filename = date("Ymdhis") . '.' . $extension;
            $path = public_path() . '/storage/Image/' . $filename;
            file_put_contents($path, $decode);
            $pedagang->foto_pedagang = './storage/Image/' . $filename;
        }
        $pedagang->save();

        if($datas = $request->get('myData')) {
            foreach ($datas as $data) {
                $produk = new Produk();
                $produk->nama_produk = $data['nama_produk'];
                // $produk->harga = $request->harga_produk;
                $produk->kategori = $data['kategori'];
                $produk->id_pedagang = $pedagang->id;

                $produk->save();
            }
        }

         return response()->json();
    }

    public function updateData(Request $request, $id)
    {
        $pedagang = Pedagang::find($id);
        $pedagang->nama = $request['nama'];
        $pedagang->alamat_rinci = $request['alamatRinci'];
        $pedagang->alamat = $request['alamat'];
        $pedagang->no_hp = $request['noHp'];
        $pedagang->no_wa = $request['noWA'];
        $pedagang->status=2;

        $pedagang->save();

        if($datas = $request->get('myData')) {
            foreach ($datas as $data) {
                if($data['id'] == null){
                    $produk = new Produk();
                    $produk->nama_produk = $data['nama_produk'];
                    // $produk->harga = $request->harga_produk;
                    $produk->kategori = $data['kategori'];
                    $produk->id_pedagang = $pedagang->id;

                    $produk->save();
                }else {
                    $produk = Produk::find($data['id']);
                    $produk->nama_produk = $data['nama_produk'];
                    $produk->kategori = $data['kategori'];
                    $produk->save();

                }
            }
        }

         return response()->json();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $data = Produk::find($id);

        // $data->delete();

        // return redirect('/pedagangs/detailPedagang');
    }
}
