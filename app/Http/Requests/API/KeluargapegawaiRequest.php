<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class KeluargapegawaiRequest extends FormRequest
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
            'nama',
            'jenis',
            'pekerjaan',
            'tmp_lahir',
            'tgl_lahir',
            'anak_ke',
            'tempat_lahir',
            'tanggal_lahir',
            'jenis_kelamin',
            'dari_suami_istri_ke',
            'id_keterangan',
            'status_tunjangan',
        ];
    }
}
