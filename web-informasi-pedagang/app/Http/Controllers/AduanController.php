<?php

namespace App\Http\Controllers;

use App\Models\Aduan;
use Illuminate\Http\Request;

class AduanController extends Controller
{
    public function index()
    {
        return view('pengaduan.aduan');
    }

    public function store(Request $request)
    {
        $aduan = new Aduan;

        $aduan->nama_pengadu = $request->input('nama_pengadu');
        $aduan->email_pengadu = $request->input('email_pengadu');
        $aduan->nomor_telepon = $request->input('nomor_telepon');
        $aduan->lokasi = $request->input('lokasi');
        $aduan->isi = $request->input('isi');
        $aduan->foto_buktiAduan = $request->input('foto_buktiAduan');

        $aduan->save();

        return redirect('/aduan')->with('success','Data Added for Aduan');
    }
}
