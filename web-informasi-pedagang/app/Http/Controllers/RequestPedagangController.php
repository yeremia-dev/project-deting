<?php


namespace App\Http\Controllers;


use App\Pedagang;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class RequestPedagangController extends controller
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function stores(Request $request)
    {
        Pedagang::create([
            'nama_pedagang' => $request['nama_pedagang'],
            'alamat_pedagang'=> $request['alamat_pedagang'],
            'no_telepon'=> $request['no_telepon'],
            'foto_pedagang'=> $request['foto_pedagang'],
            'kategori_dagangan'=> $request['kategori_dagangan']
        ]);
        return "Sukses";
    }
    public function addImage(Request $request,$kode)
    {
        $explode = explode(',', $request->image);
        if (strpos($explode[0], 'data') !== false) {

            $explode = explode(',', $request->image);
            $decode = base64_decode($explode[1]);

            $extension = 'png';

            $filename = 'kurir' . $kode . '.' . $extension;
            $path = public_path() . '/storage/Pedagang/' . $filename;
            file_put_contents($path, $decode);
//            $data->image = './storage/Image/' . $filename;
        }
    }
}
