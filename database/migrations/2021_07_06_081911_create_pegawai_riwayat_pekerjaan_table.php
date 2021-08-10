<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiRiwayatPekerjaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai_riwayat_pekerjaan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pegawai')->references('id')->on('pegawais')->onDelete('cascade')->onUpdate('cascade');
            $table->string('tentang');
            $table->string('nomor_sk');
            $table->date('tanggal_sk');
            $table->string('pejabat_yg_mengesahkan');
            $table->string('pangkat');
            $table->string('tmt');
            $table->string('masa_kerja_tahun');
            $table->string('masa_kerja_bulanan');
            $table->string('gaji');
            $table->text('keterangan');
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
        Schema::dropIfExists('pegawai_riwayat_pekerjaan');
    }
}
