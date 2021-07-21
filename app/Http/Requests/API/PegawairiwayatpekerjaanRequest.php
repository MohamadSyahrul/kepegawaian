<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class PegawairiwayatpekerjaanRequest extends FormRequest
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
            'tentang',
            'nomor_sk',
            'tanggal_sk',
            'pejabat_yg_mengesahkan',
            'pangkat',
            'tmt',
            'masa_kerja_tahun',
            'masa_kerja_bulanan',
            'gaji',
            'keterangan',
        ];
    }
}
