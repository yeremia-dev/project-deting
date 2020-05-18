<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kurir;
use App\Wilayah;

class SearchKurirController extends Controller
{
    public function index(){
    	$wilayahs = Wilayah::all();

    	return view('cari_kurir.cari-kurir', compact('wilayahs'));
    }

    public function search(Request $request){
    	$kurirs = Kurir::where('kode_wilayah', $request->kelurahan)->paginate(6);
    	$wilayahs = Wilayah::all();

    	return view('cari_kurir.hasil-search', compact('kurirs', 'wilayahs'));
    }
}
