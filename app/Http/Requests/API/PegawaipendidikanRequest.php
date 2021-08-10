<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class PegawaipendidikanRequest extends FormRequest
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
            'pendidikan' => 'required',
            'nama_institusi_pendidikan' => 'required',
            'tempat' => 'required',
            'fakultas' => 'required',
            'jurusan' => 'required',
            'tahun_masuk' => 'required',
            'tahun_lulus' => 'required',
            'ijazah' => 'required',
            'tingkat_pendidikan' => 'required',
        ];
    }
}
