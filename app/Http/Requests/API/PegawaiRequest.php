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
            'nip',
            'noid',
            'nama',
            'jurusan',
            'id_jabatan',
            'jenis_kelamin',
            'agama',
            'no_tlp',
            'shift',
            'gol_darah',
            'gelar_dpn',
            'gelar_blk',
            'status_kawin',
            'kelurahan',
            'kecamatan',
            'kota',
            'provinsi',
            'askes',
            'kode_dosen',
            'nip_lama',
            'npwp',
            'nidn',
            'id_unit',
            'departemen',
            'praktisi',
            'nama_instansi',
            'alamat_instansi',
            'pendidikan_terakhir',
        ];
    }
}
