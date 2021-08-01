<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "provinsi";
    protected $fillable = [
        'provinsi'
    ];
    public function kota() {
        return $this->hasMany(Kota::class, 'id_provinsi');
    }
}
