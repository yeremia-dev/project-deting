<?php


namespace App\Http\Controllers;


use App\Pedagang;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequestPedagangController extends controller
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function lihat($kode){
        $data = DB::SELECT("SELECT COUNT(id_pedagang) as val FROM pedagang WHERE id_pedagang LIKE '$kode%'");
        return $data;
    }
    public function stores(Request $request)
    {
        Pedagang::create([
            'id_pedagang' => $request['id_pedagang'],
            'nama_pedagang' => $request['nama_pedagang'],
            'alamat_rinci'=> $request['alamat_rinci'],
            'no_hp'=> $request['no_hp'],
            'no_wa'=> $request['no_wa'],
            'foto_pedagang'=> $request['foto_pedagang'],
            'kode_wilayah'=>$request['kode_wilayah'],
            'status' => 1
        ]);
        return view('kurir/requestp');

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

    public function findAllPedagangRequest(){
        $data = DB::SELECT("SELECT * FROM pedagang WHERE status =1");
        return $data;
    }
    public function terima($id){
        DB::SELECT("UPDATE pedagang set status=2 WHERE id_pedagang LIKE '$id' ");
    }
    public function tolak($id){
        DB::SELECT("UPDATE pedagang set status=0 WHERE id_pedagang LIKE '$id' ");
    }
}
