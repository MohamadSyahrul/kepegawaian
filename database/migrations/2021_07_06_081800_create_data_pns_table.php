<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pns', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pegawai');
            $table->string('gol_awal');
            $table->string('gol_akhir');
            $table->string('tmt_cpns');
            $table->string('tmt_pns');
            $table->string('tmt_fungsional');
            $table->string('tmt_akhir');
            $table->string('fungsional');
            $table->string('karpeg');
            $table->string('karis_karsu');
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
        Schema::dropIfExists('data_pns');
    }
}
