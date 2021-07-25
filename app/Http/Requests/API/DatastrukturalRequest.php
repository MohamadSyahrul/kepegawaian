<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class DatastrukturalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id_pegawai',
            'nama_jabatan',
            'tmt',
            'nomor_sk',
            'tanggal_sk',
            'pejabat_yg_mengesahkan',
            'keterangan',
            'jabatan_fungsional',
            'jabatan_struktural',
            'status',
            'tmt_struktural',
            'tmt_kerja',
            'tmt_kontrak',
        ];
    }
}
