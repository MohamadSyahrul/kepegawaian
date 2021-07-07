<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai_suami_istri extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "pegawai_suami_istri";
    protected $fillable = [
        'id_pegawai',
        'nama_suami_istri',
        'tempat_lahir',
        'tanggal_lahir',
        'pekerjaan',
        'pernikahan_ke',
        'tanggal_pernikahan',
        'tempat_pernikahan',
    ];
}
