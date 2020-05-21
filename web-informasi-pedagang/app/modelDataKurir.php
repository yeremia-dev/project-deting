<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelDataKurir extends Model
{
protected $table="kurir";
protected $primarykey ="id_kurir";
protected $fillable = ['nama_kurir', 'alamat_kurir', 'nomor_telepon',
'nomor_ktp', 'foto_ktp', 'foto_stnk', 'foto_SIM', 'foto_kurir', 'jenis_kelamin', 
'status', 'jenis_kendarann', 'latitude', 'longitude' ];
}
