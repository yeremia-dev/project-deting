<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Pedagang extends Model
{
    protected $table = 'pedagang';

    protected $primaryKey = 'id_pedagang';

    protected $fillable = [
        'nama_pedagang',
        'alamat_pedagang',
        'no_telepon',
        'foto_pedagang',
        'kategori_dagangan'
    ];
}
