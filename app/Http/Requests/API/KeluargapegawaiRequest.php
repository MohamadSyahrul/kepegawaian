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
            'id_pegawai' => 'required',
            'nama' => 'required',
            'jenis' => 'required',
            'pekerjaan' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'anak_ke' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'dari_suami_istri_ke' => 'required',
            'status_tunjangan' => 'required',
        ];
    }
}
