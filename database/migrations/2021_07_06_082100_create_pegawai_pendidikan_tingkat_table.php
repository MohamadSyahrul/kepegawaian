<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiPendidikanTingkatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai_pendidikan_tingkat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pendidikan')->references('id')->on('pegawai_pendidikan')->onDelete('cascade')->onUpdate('cascade');
            $table->string('tingkat');
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
        Schema::dropIfExists('pegawai_pendidikan_tingkat');
    }
}
