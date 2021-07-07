<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai_tidak_masuk_kerja extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "pegawai_tidak_masuk_kerja";
    protected $fillable = [
        'id_pegawai',
        'jenis',
        'mulai',
        'akhir',
        'nomor_surat',
        'keperluan',
        'tempat_kota',
        'tanggal_ttd',
        'pegawai_ttd_cuti',
    ];
}
