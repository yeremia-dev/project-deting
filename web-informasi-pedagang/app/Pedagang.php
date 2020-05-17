<?php

namespace App;

<<<<<<< HEAD
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
=======
use Illuminate\Database\Eloquent\Model;
>>>>>>> 60d04267366628f337402016c3e8f097694b0e68

class Pedagang extends Model
{
    protected $table = 'pedagang';
<<<<<<< HEAD

    protected $primaryKey = 'id_pedagang';

    protected $fillable = [
        'id_pedagang',
        'nama_pedagang',
        'alamat_rinci',
        'no_hp',
        'no_wa',
        'foto_pedagang',
        'id_admin',
        'kode_wilayah',
        'status'
    ];
=======
>>>>>>> 60d04267366628f337402016c3e8f097694b0e68
}
