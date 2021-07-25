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
            'id_pegawai',
            'pendidikan',
            'nama_institusi_pendidikan',
            'tempat',
            'fakultas',
            'jurusan',
            'tahun_masuk',
            'tahun_lulus',
            'ijazah',
            'tingkat_pendidikan',
        ];
    }
}
