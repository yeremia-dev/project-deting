<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Wilayah;
use App\Kurir;
use Illuminate\Support\Facades\DB;

class RequestKurirControllers extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('requestKurir/index');
    }

    public function request()
    {
        return view('kurir/request');
    }

    public function requestp()
    {
        return view('kurir/requestp');
    }

    public function addp()
    {
        return view('kurir/produkd');
    }

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

    public function addImage(Request $request,$kode)
    {
        $explode = explode(',', $request->image);
        if (strpos($explode[0], 'data') !== false) {

            $explode = explode(',', $request->image);
            $decode = base64_decode($explode[1]);

                $extension = 'png';

            $filename = $kode . '.' . $extension;
            $path = public_path() . '/storage/KTP/' . $filename;
            file_put_contents($path, $decode);
//            $data->image = './storage/Image/' . $filename;
        }
    }
    public function addImageSTNK(Request $request,$kode)
    {
        $explode = explode(',', $request->image);
        if (strpos($explode[0], 'data') !== false) {

            $explode = explode(',', $request->image);
            $decode = base64_decode($explode[1]);

                $extension = 'png';

            $filename = $kode . '.' . $extension;
            $path = public_path() . '/storage/STNK/' . $filename;
            file_put_contents($path, $decode);
//            $data->image = './storage/Image/' . $filename;
        }
    }
    public function addImageSIM(Request $request,$kode)
    {
        $explode = explode(',', $request->image);
        if (strpos($explode[0], 'data') !== false) {

            $explode = explode(',', $request->image);
            $decode = base64_decode($explode[1]);

                $extension = 'png';

            $filename = $kode . '.' . $extension;
            $path = public_path() . '/storage/SIM/' . $filename;
            file_put_contents($path, $decode);
//            $data->image = './storage/Image/' . $filename;
        }
    }
    public function addImageKurir(Request $request,$kode)
    {
        $explode = explode(',', $request->image);
        if (strpos($explode[0], 'data') !== false) {

            $explode = explode(',', $request->image);
            $decode = base64_decode($explode[1]);

                $extension = 'png';

            $filename = 'kurir' . $kode . '.' . $extension;
            $path = public_path() . '/storage/kurir/' . $filename;
            file_put_contents($path, $decode);
//            $data->image = './storage/Image/' . $filename;
        }
    }

    public function addKTP(Request $request)
    {
        return 'asd';
    }

    public function getKurir(){
        $data = Kurir::all();
        return $data;
    }
    public function store(Request $request)
    {
        Kurir::create([
            'jenis_kendaraan' => $request['jenis_kendaraan'],
            'latitude' => $request['latitude'],
            'longtitude' => $request['longtitude'],
            'nomor_kendaraan' => $request['nomor_kendaraan'],
            'nama_kurir' => $request['nama_kurir'],
            'alamat_kurir' => $request['alamat_kurir'],
            'nomor_telepon' => $request['nomor_telepon'],
            'nomor_ktp' => $request['nomor_ktp'],
            'foto_ktp' => $request['foto_ktp'],
            'foto_stnk' => $request['foto_stnk'],
            'foto_SIM' => $request['foto_SIM'],
            'foto_kurir' => $request['foto_kurir'],
            'jenis_kelamin' => $request[' jenis_kelamin'],
            'status' => 1,
        ]);
        $data = Kurir::all();
        return $data;
    }
    public function masuk(Request $request){
        return Kurir::create([
            'jenis_kendaraan' => $request['jenis_kendaraan'],
            'latitude' => $request['latitude'],
            'longitude' => $request['longtitude'],
            'nomor_kendaraan' => $request['nomor_kendaraan'],
            'nama_kurir' => $request['nama_kurir'],
            'alamat_kurir' => $request['alamat_kurir'],
            'nomor_telepon' => $request['nomor_telepon'],
            'nomor_ktp' => $request['nomor_ktp'],
            'foto_ktp' => $request['foto_ktp'],
            'foto_stnk' => $request['foto_stnk'],
            'foto_SIM' => $request['foto_SIM'],
            'foto_kurir' => $request['foto_kurir'],
            'jenis_kelamin' => $request['jenis_kelamin'],
            'status' => 1,
        ]);
    }
}
