<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "kota";
    protected $fillable = [
        'nama',
        'id_provinsi'
    ];
    public function kecamatan() {
        return $this->hasMany(Kecamatan::class, 'id_kota');
    }
    public function provinsi() {
        return $this->belongsTo(Provinsi::class, 'id');
    }
    public function pegawai() {
        return $this->hasOne(Pegawai::class);
    }
}
