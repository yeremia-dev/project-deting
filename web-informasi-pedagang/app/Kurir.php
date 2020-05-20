<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurir extends Model
{
    protected $table = 'kurir';

    protected $primaryKey = 'id_kurir';

    protected $fillable = [
        'jenis_kendaraan',
        'latitude',
        'longitude',
        'nomor_kendaraan',
        'nama_kurir',
        'alamat_kurir',
        'nomor_telepon',
        'nomor_ktp',
        'foto_ktp',
        'foto_stnk',
        'foto_SIM',
        'foto_kurir',
        'jenis_kelamin',
        'status'
    ];
}
