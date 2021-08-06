<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nip')->nullable();
            $table->bigInteger('noid')->nullable();
            $table->string('nama')->nullable();
            $table->string('jurusan')->nullable();
            $table->integer('id_jabatan')->nullable();
            $table->char('jenis_kelamin', 1)->nullable();
            $table->string('agama')->nullable();
            $table->string('no_tlp')->nullable();
            $table->string('shift')->nullable();
            $table->string('gol_darah')->nullable();
            $table->string('gelar_dpn')->nullable();
            $table->string('gelar_blk')->nullable();
            $table->string('status_kawin')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kota')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('askes')->nullable();
            $table->string('kode_dosen')->nullable();
            $table->bigInteger('nip_lama')->nullable();
            $table->string('npwp')->nullable();
            $table->string('nidn')->nullable();
            $table->integer('id_unit')->nullable();
            $table->string('departemen')->nullable();
            $table->string('praktisi')->nullable();
            $table->string('nama_instansi')->nullable();
            $table->string('alamat_instansi')->nullable();
            $table->string('pendidikan_terakhir')->nullable();
            $table->foreignId('id_user')->references('id')->on('users');
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
        Schema::dropIfExists('pegawais');
    }
}
