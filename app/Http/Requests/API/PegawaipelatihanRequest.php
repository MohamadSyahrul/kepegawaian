<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class PegawaipelatihanRequest extends FormRequest
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
            'nama_pelatihan' => 'required',
            'institusi_pelatihan' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_mulai_pelaksanaan' => 'required',
            'tanggal_akhir_pelaksanaan' => 'required',
            'durasi_pelaksanaan' => 'required',
        ];
    }
}
