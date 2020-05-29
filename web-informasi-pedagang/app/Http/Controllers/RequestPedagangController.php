<?php


namespace App\Http\Controllers;


use App\Pedagang;
use App\Produk;
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
        $pedagang = new Pedagang();
        $pedagang->nama = $request['nama_pedagang'];
        $pedagang->alamat_rinci = $request['alamat_rinci'];
        $pedagang->alamat = $request['alamat'];
        $pedagang->no_hp = $request['no_hp'];
        $pedagang->no_wa = $request['no_wa'];
        $pedagang->foto_pedagang =   './../storage/Pedagang/'.$request['foto_pedagang'];
        $pedagang->status = 1;
//        Pedagang::create([
//            'nama' => $request['nama_pedagang'],
//            'alamat_rinci'=> $request['alamat_rinci'],
//            'alamat' => $request['alamat'],
//            'no_hp'=> $request['no_hp'],
//            'no_wa'=> $request['no_wa'],
//            'foto_pedagang'=> $request['foto_pedagang'],
//            'status' => 1
//        ]);
        $pedagang->save();
        return $pedagang->id;

    }
    public function addImage(Request $request,$kode)
    {
        $explode = explode(',', $request->image);
        if (strpos($explode[0], 'data') !== false) {

            $explode = explode(',', $request->image);
            $decode = base64_decode($explode[1]);

            $extension = 'png';

            $filename =   $kode . '.' . $extension;
            $path = public_path() . '/storage/Pedagang/' . $filename;
            file_put_contents($path, $decode);
//            $data->image = './storage/Image/' . $filename;
        }
    }

    public function findAllPedagangRequest(){
        $data = DB::SELECT("SELECT * FROM pedagang WHERE status =1");
        return $data;
    }

    public function getDataPedagang($id)
    {
        $data = Pedagang::find($id);
//        $data = DB::SELECT("SELECT * FROM pedagang WHERE status =1");
        return $data;
    }

    public function getDataProduk($id)
    {
        $data = Produk::where('id_pedagang',$id)->get();
//        $data = DB::SELECT("SELECT * FROM pedagang WHERE status =1");
        return $data;
    }

    public function terima($id)
    {

        $pedagang = Pedagang::find($id);
        $pedagang->id_admin = 1;
        $pedagang->status =  2;
        $pedagang->save();
    }

    public function tolak($id)
    {
        $pedagang = Pedagang::find($id);
        $pedagang->id_admin = 1;
        $pedagang->status = 0;
        $pedagang->save();
    }
}
