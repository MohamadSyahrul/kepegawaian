<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai_keterangan extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "pegawai_keterangan";
    protected $fillable = [
        'keterangan',
    ];
}
