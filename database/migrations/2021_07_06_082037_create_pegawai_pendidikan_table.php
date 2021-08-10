<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiPendidikanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai_pendidikan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pegawai')->references('id')->on('pegawais')->onDelete('cascade')->onUpdate('cascade');
            $table->string('pendidikan');
            $table->string('nama_institusi_pendidikan');
            $table->string('tempat');
            $table->string('fakultas');
            $table->string('jurusan');
            $table->string('tahun_masuk');
            $table->string('tahun_lulus');
            $table->string('ijazah');
            $table->string('tingkat_pendidikan');        
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
        Schema::dropIfExists('pegawai_pendidikan');
    }
}
