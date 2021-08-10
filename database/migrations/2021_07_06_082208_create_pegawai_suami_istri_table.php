<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiSuamiIstriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai_suami_istri', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pegawai')->references('id')->on('pegawais')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama_suami_istri');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('pekerjaan');
            $table->string('pernikahan_ke');
            $table->date('tanggal_pernikahan');
            $table->string('tempat_pernikahan');
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
        Schema::dropIfExists('pegawai_suami_istri');
    }
}
