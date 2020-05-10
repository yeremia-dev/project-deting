<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Produk;
use App\Pedagang;

class PedagangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function test()
    {
        $data = DB::SELECT("SELECT * FROM wilayah_2020 WHERE CHAR_LENGTH(kode)<3");
        return $data;
    }

    public function findKab($kode)
    {

        $data = DB::SELECT("SELECT * FROM wilayah_2020 WHERE kode LIKE '$kode%'   AND CHAR_LENGTH(kode)<6 AND CHAR_LENGTH(kode)>3");
        return $data;
    }

    public function findKec($kode)
    {
        $data = DB::SELECT("SELECT * FROM wilayah_2020 WHERE kode LIKE '$kode%' AND CHAR_LENGTH(kode)<9 AND CHAR_LENGTH(kode)>5 ");
        return $data;
    }

    public function index2()
    {
        $data= Produk::all();
        return view('pedagangs.detailPedagang')->with('data', $data);
    }
    public function index()
    {
       
        $data = Produk::all();        
        // var_dump($data);
        return view('pedagangs.detailPedagang')->with('data', $data);
    }

    public function show1() {
        $data = Produk::all();        
        return view('pedagangs.index')->with('data', $data);
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
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Produk::find($id);
        return view('pedagangs.editProduk')->with('data', $data);
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
        $produk = Produk::find($id);

        $produk->nama_produk = $request->nama_produk;
        $produk->kategori = $request->kategori;

        $produk->update();

        return redirect('/pedagangs/detailPedagang');
    }


}
