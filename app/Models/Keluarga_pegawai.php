<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluarga_pegawai extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "keluarga_pegawai";
    protected $fillable = [
        'id_pegawai',
        'nama',
        'jenis',
        'pekerjaan',
        'tmp_lahir',
        'tgl_lahir',
        'anak_ke',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'dari_suami_istri_ke',
        'status_tunjangan',
    ];
    public function pegawai() {
        return $this->belongsToMany(Pegawai::class, 'id');
    }
    public function keterangan() {
        return $this->hasMany(Pegawai_keterangan::class, 'id_keluarga');
    }
}
