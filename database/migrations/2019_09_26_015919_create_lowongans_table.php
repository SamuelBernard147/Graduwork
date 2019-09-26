<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLowongansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lowongans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_perusahaan');
            $table->String('judul_pekerjaan');
            $table->String('gaji');
            $table->String('tipe_kontrak');
            $table->String('posisi');
            $table->String('waktu_bekerja');
            $table->String('lokasi');
            $table->String('tgl_habis');
            $table->String('syarat');
            $table->String('deskripsi');
            $table->String('status');
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
        Schema::dropIfExists('lowongans');
    }
}
