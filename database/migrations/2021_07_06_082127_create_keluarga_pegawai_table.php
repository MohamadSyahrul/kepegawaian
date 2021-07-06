<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeluargaPegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keluarga_pegawai', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pegawai');
            $table->string('nama');
            $table->string('jenis');
            $table->string('pekerjaan');
            $table->string('tmp_lahir');
            $table->date('tgl_lahir');
            $table->string('anak_ke');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->char('jenis_kelamin', 1);
            $table->string('dari_suami_istri_ke');
            $table->integer('id_keterangan');
            $table->string('status_tunjangan');
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
        Schema::dropIfExists('keluarga_pegawai');
    }
}
