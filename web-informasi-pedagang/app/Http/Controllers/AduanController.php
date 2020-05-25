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

    public function imageUpload()
    {
        return view('pengaduan.imageUpload');
    }
  
    public function imageUploadPost(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $imageName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('images/dataAduan'), $imageName);
   
        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName);
   
    }
}
