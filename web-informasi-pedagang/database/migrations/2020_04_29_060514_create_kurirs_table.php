<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKurirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kurirs', function (Blueprint $table) {
            $table->id('id_kurir');
            $table->string('nama_kurir');
            $table->string('alamat_kurir');
            $table->string('nomor_telepon');
            $table->string('nomor_ktp');
            $table->string('foto_ktp');
            $table->string('foto_stnk');
            $table->string('foto_SIM');
            $table->string('foto_kurir');
            $table->string('jenis_kelamin');
            $table->integer('status');
            $table->string('jenis_kendaraan');
            $table->string('nomor_kendaraan');
            $table->string('latitude');
            $table->string('longtitude');
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
        Schema::dropIfExists('kurirs');
    }
}
