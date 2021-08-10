<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai_pendidikan_tingkat extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "pegawai_pendidikan_tingkat";
    protected $fillable = [
        'id_pendidikan',
        'tingkat',
    ];
    public function pegawai() {
        return $this->belongsToMany(Pegawai::class, 'id');
    }
}
