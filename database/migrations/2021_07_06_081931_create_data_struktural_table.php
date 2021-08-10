<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataStrukturalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_struktural', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pegawai')->references('id')->on('pegawais')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama_jabatan');
            $table->string('tmt');
            $table->string('nomor_sk');
            $table->date('tanggal_sk');
            $table->string('pejabat_yg_mengesahkan');
            $table->text('keterangan');
            $table->string('jabatan_fungsional');
            $table->string('jabatan_struktural');
            $table->string('status');
            $table->string('tmt_struktural');
            $table->string('tmt_kerja');
            $table->string('tmt_kontrak');
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
        Schema::dropIfExists('data_struktural');
    }
}
