<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiTidakMasukKerjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai_tidak_masuk_kerja', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pegawai');
            $table->string('jenis');
            $table->string('mulai');
            $table->string('akhir');
            $table->string('nomor_surat');
            $table->string('keperluan');
            $table->string('tempat_kota');
            $table->date('tanggal_ttd');
            $table->string('pegawai_ttd_cuti');
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
        Schema::dropIfExists('pegawai_tidak_masuk_kerja');
    }
}
