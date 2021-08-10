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
            'id_pegawai' => 'required',
            'jenis' => 'required',
            'mulai' => 'required',
            'akhir' => 'required',
            'nomor_surat' => 'required',
            'keperluan' => 'required',
            'tempat_kota' => 'required',
            'tanggal_ttd' => 'required',
            'pegawai_ttd_cuti' => 'required',
        ];
    }
}
