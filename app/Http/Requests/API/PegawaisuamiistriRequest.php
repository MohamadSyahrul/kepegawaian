<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class PegawaisuamiistriRequest extends FormRequest
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
            'nama_suami_istri',
            'tempat_lahir',
            'tanggal_lahir',
            'pekerjaan',
            'pernikahan_ke',
            'tanggal_pernikahan',
            'tempat_pernikahan',
        ];
    }
}
