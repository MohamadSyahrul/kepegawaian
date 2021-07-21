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
            'id_pegawai',
            'gol_awal',
            'gol_akhir',
            'tmt_cpns',
            'tmt_pns',
            'tmt_fungsional',
            'tmt_akhir',
            'fungsional',
            'karpeg',
            'karis_karsu',
        ];
    }
}
