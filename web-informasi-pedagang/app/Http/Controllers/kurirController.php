<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\modelDataKurir;
use\Session;

class kurirController extends Controller
{
public function index(){
    return view('dataKurir');
}



//    public function create(Request $request){
//
//        $create = "Failed";
//        if($request->hasFile('foto_kurir')){
//            $destination = "../public/images/dataKurir/FotoKurir";
//            $foto_kurir  = $request->file('foto_kurir');
//            $foto_kurir->move($destination, $foto_kurir->getClientOriginalName());
//            $create = "Succes";
//
//        }
//        if($request->hasFile('foto_ktp')){
//            $destination = "../public/images/dataKurir/FotoKTP";
//            $foto_ktp = $request->file('foto_ktp');
//            $foto_ktp->move($destination, $foto_ktp->getClientOriginalName());
//            $create = "Succes";
//        }
//        if($request->hasFile('foto_stnk')){
//            $destination = "../public/images/dataKurir/FotoSTNK";
//            $foto_stnk = $request->file('foto_stnk');
//            $foto_stnk->move($destination, $foto_stnk->getClientOriginalName());
//            $create = "Succes";
//        }
//        if($request->hasFile('foto_SIM')){
//            $destination = "../public/images/dataKurir/FotoSIM";
//            $foto_SIM = $request->file('foto_SIM');
//            $foto_SIM->move($destination, $foto_SIM->getClientOriginalName());
//            $create = "Succes";
//        }
//
//
//        if($create=="Succes"){
//        $create = new modelDataKurir;
////        $create->id = $request->id_kurir;
//        $create->nama_kurir = $request->nama_kurir;
//        $create->alamat_kurir = $request->alamat_kurir;
//        $create->nomor_telepon = $request->nomor_telepon;
//        $create->nomor_ktp = $request->nomor_ktp;
//        $create->status = $request->status;
//        $create->jenis_kelamin = $request->jenis_kelamin;
//        $create->jenis_kendaraan = $request->jenis_kendaraan;
//        $create->nomor_kendaraan = $request->nomor_kendaraan;
//        $create->foto_kurir = $foto_kurir->getClientOriginalName();
//        $create->foto_ktp = $foto_ktp->getClientOriginalName();
//        $create->foto_stnk = $foto_stnk->getClientOriginalName();
//        $create->foto_SIM = $foto_SIM->getClientOriginalName();
//        $create->save();
//        return redirect('dataKurir')->with('sukses', 'Data berhasil di tambahkan!');
//    } if($create=="Failed"){
//
//        return redirect('admin/kurir');

        //savean terbaru
public function create(Request $request){

    $create = "Failed";
    if($request->hasFile('foto_kurir')){
        $destination = "../public/images/dataKurir/FotoKurir";
        $foto_kurir  = $request->file('foto_kurir');
        $foto_kurir->move($destination, $foto_kurir->getClientOriginalName());
        $create = "Succes";

    }
    if($request->hasFile('foto_ktp')){
        $destination = "../public/images/dataKurir/FotoKTP";
        $foto_ktp = $request->file('foto_ktp');
        $foto_ktp->move($destination, $foto_ktp->getClientOriginalName());
        $create = "Succes";
    }

    if($request->hasFile('foto_stnk')){
        $destination = "../public/images/dataKurir/FotoSTNK";
        $foto_stnk = $request->file('foto_stnk');
        $foto_stnk->move($destination, $foto_stnk->getClientOriginalName());
        $create = "Succes";

    }
    if($request->hasFile('foto_SIM')){
        $destination = "../public/images/dataKurir/FotoSIM";
        $foto_SIM = $request->file('foto_SIM');
        $foto_SIM->move($destination, $foto_SIM->getClientOriginalName());
        $create = "Succes";
    }


    if($create=="Succes"){
    $create = new modelDataKurir;
    $create->id_kurir = $request->id_kurir;
    $create->nama_kurir = $request->nama_kurir;
    $create->alamat_kurir = $request->alamat_kurir;
    $create->nomor_telepon = $request->nomor_telepon;
    $create->nomor_ktp = $request->nomor_ktp;
    $create->status = $request->status='approved';
    $create->jenis_kelamin = $request->jenis_kelamin;
    $create->jenis_kendaraan = $request->jenis_kendaraan;
    $create->nomor_kendaraan = $request->nomor_kendaraan;
    $create->foto_kurir = $foto_kurir->getClientOriginalName();
    $create->foto_ktp = $foto_ktp->getClientOriginalName();
    $create->foto_stnk = $foto_stnk->getClientOriginalName();
    $create->foto_SIM = $foto_SIM->getClientOriginalName();
    $create->save();
    return redirect('listKurir')->with('sukses', 'Data berhasil di tambahkan!');
} if($create=="Failed"){

    return redirect('listKurir');

}

}

public function viewKurir(){
    $kurir = DB::table('kurir')->get();


    return view('listKurir',['kurir' => $kurir]);
}


public function edit_function($id_kurir){
    $data= DB::SELECT("SELECT * FROM kurir WHERE id_kurir=$id_kurir");

    return view('editDataKurir',['data'=>$data]);
}

public function update(Request $request,$id_kurir){

    DB::table('kurir')->WHERE('id_kurir',$id_kurir)->update([
        'nama_kurir' => $request->nama_kurir,
        'alamat_kurir' => $request->alamat_kurir,
        'nomor_telepon' => $request->nomor_telepon,
        // 'nomor_ktp' => $request->nomor_ktp,
        'jenis_kelamin' => $request->jenis_kelamin,
        'jenis_kendaraan' => $request->jenis_kendaraan,
        'nomor_kendaraan' => $request->nomor_kendaraan,
    ]);

    return redirect('/listKurir')->with('sukses','Update Data Berhasil');
}


public function hapus($id_kurir){
    DB::table('kurir')->where('id_kurir',$id_kurir)->delete();

    return redirect('/listKurir')->with('sukses', 'Data berhasil di Dihapus!');
}

}
