<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai_pendidikan extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "pegawai_pendidikan";
    protected $fillable = [
        'id_pegawai',
        'pendidikan',
        'nama_institusi_pendidikan',
        'tempat',
        'fakultas',
        'jurusan',
        'tahun_masuk',
        'tahun_lulus',
        'ijazah',
        'tingkat_pendidikan',
    ];
    public function pegawai() {
        return $this->belongsToMany(Pegawai::class, 'id');
    }
    public function tingkat() {
        return $this->hasMany(Pegawai_pendidikan_tingkat::class, 'id_pendidikan');
    }
}
