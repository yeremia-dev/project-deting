<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedagang extends Model
{
    protected $table = "pedagang";

    protected $fillable = [
        'nama_pedagang',
        'alamat_rinci',
        'kabupaten',
        'kecamatan',
        'kelurahan',
        'no_hp',
        'no_wa',
        'foto_pedagang'       
    ];
}
