<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class StrukturalRequest extends FormRequest
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
            'nama_jabatan' => 'required',
            'tmt' => 'required',
            'nomor_sk' => 'required',
            'tanggal_sk' => 'required',
            'pejabat_yg_mengesahkan' => 'required',
            'keterangan' => 'required',
            'jabatan_fungsional' => 'required',
            'jabatan_struktural' => 'required',
            'status' => 'required',
            'tmt_struktural' => 'required',
            'tmt_kerja' => 'required',
            'tmt_kontrak' => 'required',
        ];
    }
}
