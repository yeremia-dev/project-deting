<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aduan extends Model
{
    protected $table = 'aduan';
    protected $primaryKey = 'id_aduan';
    protected $fillable = ['nama_pengadu','email_pengadu','nomor_telepon','lokasi','isi','foto_buktiAduan'];
}
