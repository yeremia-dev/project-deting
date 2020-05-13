<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kurir;

class MencariKurirTerdekatController extends Controller
{
    public function index(){
    	$kurirs = Kurir::all();
    	return view('mencari-kurir-terdekat.index',compact('kurirs'));
    }
}
