<?php

namespace App;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Pedagang extends Model
{
    protected $table = 'pedagang';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nama',
        'alamat_rinci',
        'alamat',
        'no_hp',
        'no_wa',
        'foto_pedagang',
        'id_admin',
        'status'
    ];
}
