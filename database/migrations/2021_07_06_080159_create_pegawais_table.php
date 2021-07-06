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
            $table->bigInteger('nip');
            $table->bigInteger('noid');
            $table->string('nama');
            $table->string('jurusan');
            $table->integer('id_jabatan');
            $table->char('jenis_kelamin', 1);
            $table->string('agama');
            $table->string('no_tlp');
            $table->string('shift');
            $table->string('gol_darah');
            $table->string('gelar_dpn');
            $table->string('gelar_blk');
            $table->string('status_kawin');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('askes');
            $table->string('kode_dosen');
            $table->bigInteger('nip_lama');
            $table->string('npwp');
            $table->string('nidn');
            $table->integer('id_unit');
            $table->string('departemen');
            $table->string('praktisi');
            $table->string('nama_instansi');
            $table->string('alamat_instansi');
            $table->string('pendidikan_terakhir');
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
