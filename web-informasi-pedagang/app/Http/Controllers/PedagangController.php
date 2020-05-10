<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedagang;
use Illuminate\Support\Facades\DB;

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
        return view('pedagangs.tambahPedagang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pedagang = new Pedagang;
        $pedagang->nama_pedagang = $request->nama_pedagang;
        $pedagang->alamat_rinci = $request->alamat_rinci;
        $pedagang->kabupaten = $request->kabupaten;
        $pedagang->kecamatan = $request->kecamatan;
        $pedagang->kelurahan = $request->kelurahan;
        $pedagang->no_hp = $request->no_hp;
        $pedagang->no_wa = $request->no_wa;
        $filename=time() . '.' . $request->foto_pedagang->extension();
        $pedagang->foto_pedagang = $filename;

       

        $request->validate([
            'foto_pedagang' => 'required|mimes:jpeg,jpg,png,JPG|max:2048'
        ]);

        $request->foto_pedagang->move(public_path('foto'), $filename);
        $pedagang->save();
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
        //
    }
}
