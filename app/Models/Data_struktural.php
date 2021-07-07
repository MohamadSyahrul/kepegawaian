<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_struktural extends Model
{
    use HasFactory;

    protected $primaryKey = "id";
    protected $table = "data_struktural";
    protected $fillable = [
        'id_pegawai',
        'nama_jabatan',
        'tmt',
        'nomor_sk',
        'tanggal_sk',
        'pejabat_yg_mengesahkan',
        'keterangan',
        'jabatan_fungsional',
        'jabatan_struktural',
        'status',
        'tmt_struktural',
        'tmt_kerja',
        'tmt_kontrak',
    ];
}
