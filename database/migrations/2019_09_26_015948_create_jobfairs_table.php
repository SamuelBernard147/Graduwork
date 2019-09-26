<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobfairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobfairs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_sekolah');
            $table->String('judul_jobfair');
            $table->String('deskripsi');
            $table->String('lokasi');
            $table->String('alamat');
            $table->String('kuota_perusahaan');
            $table->String('kuota_peserta');
            $table->String('mulai');
            $table->String('selesai');
            $table->String('tgl_habis');
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
        Schema::dropIfExists('jobfairs');
    }
}
