<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datapns extends Model
{
    use HasFactory;
    
    protected $primaryKey = "id";
    protected $table = "data_pns";
    protected $fillable = [
        'id_pegawai',
        'gol_awal',
        'gol_akhir',
        'tmt_cpns',
        'tmt_pns',
        'tmt_fungsional',
        'tmt_akhir',
        'fungsional',
        'karpeg',
        'karis_karsu',
    ];
    public function pegawai() {
        return $this->belongsToMany(Pegawai::class, 'id');
    }
}
