<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class PegawaitidakmasukkerjaRequest extends FormRequest
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
            'jenis',
            'mulai',
            'akhir',
            'nomor_surat',
            'keperluan',
            'tempat_kota',
            'tanggal_ttd',
            'pegawai_ttd_cuti',
        ];
    }
}
