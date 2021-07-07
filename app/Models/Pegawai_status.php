<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai_status extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "pegawai_status";
    protected $fillable = [
        'id_pegawai',
        'status',
        'status_karyawan',
    ];
}
