<?php
namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class RequestKurirControllers extends Controller{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(){
        return view('requestKurir/index');
    }

    public function request(){
        return view('kurir/request');
    }

    public function requestp(){
        return view('kurir/requestp');
    }
    public function addp(){
        return view('kurir/produkd');
    }
    public function test(){
        return "hello";
    }

    public function store(Request $request){
        return create([
            'jenis_kendaraan'=>$request['jenis_kendaraan'],
            'latitude' =>$request['latitude'],
            'longtitude' =>$request['longtitude'],
            'nomor_kendaraan'=>$request['nomor_kendaraan'],
            'nama_kurir'=>$request['nama_kurir'],
            'alamat_kurir'=>$request['alamat_kurir'],
            'nomor_telepon'=>$request['nomor_telepon'],
            'nomor_ktp'=>$request['nomor_ktp'],
            'foto_ktp'=>$request['foto_ktp'],
            'foto_stnk'=>$request['foto_stnk'],
            'foto_SIM'=>$request['foto_SIM'],
            'foto_kurir'=> $request['foto_kurir'],
            'jenis_kelamin'=>$request[' jenis_kelamin'],
            'status' => 1
        ]);
    }
}
