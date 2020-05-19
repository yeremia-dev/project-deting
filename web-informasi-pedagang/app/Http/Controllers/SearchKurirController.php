<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kurir;
use App\Wilayah;
use DB;

class SearchKurirController extends Controller
{
    public function index(){
    	$provinsis = DB::SELECT("SELECT * FROM wilayah_2020 WHERE CHAR_LENGTH(kode)=2");
    	$kabupatens = DB::SELECT("SELECT * FROM wilayah_2020 WHERE CHAR_LENGTH(kode)=5");
    	$kecamatans = DB::SELECT("SELECT * FROM wilayah_2020 WHERE CHAR_LENGTH(kode)=8");
    	$kelurahans = DB::SELECT("SELECT * FROM wilayah_2020 WHERE CHAR_LENGTH(kode)=13");

    	$wilayahs = Wilayah::all();

    	return view('cari_kurir.cari-kurir', compact('wilayahs', 'provinsis', 'kabupatens', 'kecamatans', 'kelurahans'));
    }

    public function search(Request $request){
    	$provinsis = DB::SELECT("SELECT * FROM wilayah_2020 WHERE CHAR_LENGTH(kode)=2");
    	$kabupatens = DB::SELECT("SELECT * FROM wilayah_2020 WHERE CHAR_LENGTH(kode)=5");
    	$kecamatans = DB::SELECT("SELECT * FROM wilayah_2020 WHERE CHAR_LENGTH(kode)=8");
    	$kelurahans = DB::SELECT("SELECT * FROM wilayah_2020 WHERE CHAR_LENGTH(kode)=13");

    	$kurirs = Kurir::where('kode_wilayah', $request->kelurahan)->paginate(6);
    	$wilayahs = Wilayah::all();

    	return view('cari_kurir.hasil-search', compact('kurirs', 'wilayahs', 'provinsis', 'kabupatens', 'kecamatans', 'kelurahans'));
    }
}
