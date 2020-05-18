<?php

namespace App\Http\Controllers;

use App\Models\Aduan;
use Illuminate\Http\Request;

class AduanController extends Controller
{
    public function index()
    {
        $aduan = Aduan::all();
        return view('pengaduan.aduan')
            ->with('aduan',$aduan)
        ;
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

        return redirect('/')->with('success','Data Added for Aduan');
    }

    public function listaduan()
    {
        $aduan = Aduan::all();
        return view('pengaduan.viewaduan')
            ->with('viewaduan',$aduan);
    }

    public function aduandelete($id)
    {
        $aduan = Aduan::findOrfail($id);
        $aduan->delete();

        return redirect('admin/listaduan')->with('status','You Data Is Deleted');

    }
}
