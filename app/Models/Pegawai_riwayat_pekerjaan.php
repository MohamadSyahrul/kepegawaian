<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai_riwayat_pekerjaan extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "pegawai_riwayat_pekerjaan";
    protected $fillable = [
        'id_pegawai',
        'tentang',
        'nomor_sk',
        'tanggal_sk',
        'pejabat_yg_mengesahkan',
        'pangkat',
        'tmt',
        'masa_kerja_tahun',
        'masa_kerja_bulanan',
        'gaji',
        'keterangan',
    ];
}
