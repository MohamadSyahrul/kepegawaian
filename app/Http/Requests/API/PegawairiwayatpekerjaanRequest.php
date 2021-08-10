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
            'id_pegawai' => 'required',
            'tentang' => 'required',
            'nomor_sk' => 'required',
            'tanggal_sk' => 'required',
            'pejabat_yg_mengesahkan' => 'required',
            'pangkat' => 'required',
            'tmt' => 'required',
            'masa_kerja_tahun' => 'required',
            'masa_kerja_bulanan' => 'required',
            'gaji' => 'required',
            'keterangan' => 'required',
        ];
    }
}
