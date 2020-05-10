<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    protected $table = 'wilayah_2020';

    protected $primaryKey = 'kode';

    protected $fillable = [
        'kode',
        'nama'
    ];
}
