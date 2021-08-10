<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class PegawaiRequest extends FormRequest
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
            'nip' => 'required',
            'noid' => 'required',
            'nama' => 'required',
            'jurusan' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'no_tlp' => 'required',
            'shift' => 'required',
            'gol_darah' => 'required',
            'gelar_dpn' => 'required',
            'gelar_blk' => 'required',
            'status_kawin' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'askes' => 'required',
            'kode_dosen' => 'required',
            'nip_lama' => 'required',
            'npwp' => 'required',
            'nidn' => 'required',
            'departemen' => 'required',
            'praktisi' => 'required',
            'nama_instansi' => 'required',
            'alamat_instansi' => 'required',
            'pendidikan_terakhir' => 'required',
            'id'
        ];
    }
}
