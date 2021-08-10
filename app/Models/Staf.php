<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staf extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_pegawai',
        'staf'
    ];

    public function pegawai() {
        return $this->belongsToMany(Pegawai::class, 'id');
    }
}
