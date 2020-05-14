<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKurirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kurir', function (Blueprint $table) {
            $table->increments('id_kurir');
            $table->string('nama_kurir');
            $table->string('alamat_kurir');
            $table->string('nomor_telepon');
            $table->string('nomor_ktp');
            $table->string('foto_ktp');
            $table->string('foto_stnk');
            $table->string('foto_SIM');
            $table->string('foto_kurir');
            $table->string('jenis_kelamin');
            $table->string('status');
            $table->string('jenis_kendaraan');
            $table->string('nomor_kendaraan');
            $table->string('latitude');
            $table->string('longitude');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kurir');
    }
}
