<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai_pelatihan extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "pegawai_pelatihan";
    protected $fillable = [
        'id_pegawai',
        'nama_pelatihan',
        'institusi_pelatihan',
        'tempat_lahir',
        'tanggal_mulai_pelaksanaan',
        'tanggal_akhir_pelaksanaan',
        'durasi_pelaksanaan',
    ];
}
