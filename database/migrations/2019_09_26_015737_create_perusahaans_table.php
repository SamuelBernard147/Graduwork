<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerusahaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perusahaans', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nama');
            $table->String('npwp');
            $table->String('lokasi');
            $table->String('alamat');
            $table->String('website');
            $table->String('no_telp');
            $table->String('tentang');
            $table->String('jenis_industri');
            $table->String('logo');
            $table->String('backdrop');
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
        Schema::dropIfExists('perusahaans');
    }
}
