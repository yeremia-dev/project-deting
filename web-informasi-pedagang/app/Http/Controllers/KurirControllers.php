<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class KurirControllers extends Controller{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(){
        return view('kurir/index');
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
}
