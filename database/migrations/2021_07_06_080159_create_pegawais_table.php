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
            $table->bigInteger('noid')->nullable();
            $table->string('nama');
            $table->string('jurusan')->nullable();
            $table->char('jenis_kelamin', 1);
            $table->string('agama');
            $table->string('no_tlp');
            $table->string('tmp_lahir');
            $table->date('tgl_lahir');
            $table->string('shift')->nullable();
            $table->string('gol_darah')->nullable();
            $table->string('gelar_dpn')->nullable();
            $table->string('gelar_blk')->nullable();
            $table->string('status_kawin')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kecamatan')->index();
            $table->string('kota')->index();
            $table->string('provinsi')->index();
            $table->string('askes')->nullable();
            $table->string('kode_dosen')->nullable();
            $table->bigInteger('nip_lama')->nullable();
            $table->string('npwp')->nullable();
            $table->string('nidn')->nullable();
            $table->string('departemen')->nullable();
            $table->string('praktisi')->nullable();
            $table->string('nama_instansi')->nullable();
            $table->string('alamat_instansi')->nullable();
            $table->string('pendidikan_terakhir')->nullable();
            $table->foreignId('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
