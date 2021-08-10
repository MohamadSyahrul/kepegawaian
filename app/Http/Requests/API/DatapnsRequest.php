<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class DatapnsRequest extends FormRequest
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
            'gol_awal' => 'required',
            'gol_akhir' => 'required',
            'tmt_cpns' => 'required',
            'tmt_pns' => 'required',
            'tmt_fungsional' => 'required',
            'tmt_akhir' => 'required',
            'fungsional' => 'required',
            'karpeg' => 'required',
            'karis_karsu' => 'required',
        ];
    }
}
