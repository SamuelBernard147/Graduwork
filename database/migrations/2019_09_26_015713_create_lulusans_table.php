<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLulusansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lulusans', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nama');
            $table->String('nisn');      
            $table->String('tempat_lahir');
            $table->String('tanggal_lahir');
            $table->String('jkl');
            $table->String('agama');
            $table->String('asal_sekolah');
            $table->String('website');
            $table->String('bio');
            $table->String('file');
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
        Schema::dropIfExists('lulusans');
    }
}
