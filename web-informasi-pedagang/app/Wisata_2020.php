<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wisata_2020 extends Model
{
    protected $table = 'wisata_2020';

    protected $primaryKey = 'kode';

    protected $fillable = [
        'kode',
        'nama'
    ];

}
