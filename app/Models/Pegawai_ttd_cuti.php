<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai_ttd_cuti extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "pegawai_ttd_cuti";
    protected $fillable = [
        'id_pegawai',
        'jabatan'
    ];
}
