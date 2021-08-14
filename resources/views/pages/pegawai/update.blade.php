@extends('layout.master')
@section('title')
Documentation Update Pegawai
@endsection
@section('content')
<div class="header bg-primary pb-6">
</div>

<section class="page-content container-fluid" id="daftar_ulang">

    <div class="row">
        <div class="col-xl-12">
            <div class="card shadow padding--medium">
                <div class="card-header p-0 border-0">
                    <div class="row">
                        <div class="col">
                            <h3 class="mb-0">Dokumentasi API Update Pegawai</h3>
                        </div>
                    </div>
                </div>
                <hr class="my-4">
                <div class="card-body p-0 border-0">
                    <div class="row">
                        <div class="col">
                            <h3 class="mb-0">URL :</h3>
                            <p>This is our base url for every endpoint with different http method request</p>
                            <span class="badge badge-pill badge-info">Put</span>
                            <pre class="alert alert-default">http://127.0.0.1:8000/api/kepegawaian/pegawai/1</pre>
                        </div>
                    </div>
                    <hr class="my-2">
                    <div class="row">
                        <div class="col">
                            <h4 class="mb-0"> Header</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center table-borderless table-flush table-hover">
                                <thead class="table-header">
                                    <tr>
                                        <th scope="col" class="border-0 font-weight-bold text-center">Field</th>
                                        <th scope="col" class="border-0 font-weight-bold text-center">Type</th>
                                        <th scope="col" class="border-0 font-weight-bold text-center">Description</th>
                                    </tr>
                                </thead>

                                <tbody class="table-body">
                                    <tr>
                                        <td class="text-center">Accept</td>
                                        <td class="text-center">String</td>
                                        <td class="text-center">Language message response</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">Token</td>
                                        <td class="text-center">String</td>
                                        <td class="text-center">Header Authorization Bearer token client user</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <hr class="my-2">
                    <div class="row">
                        <div class="col">
                            <h4 class="mb-0"> Parameter</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center table-borderless table-flush table-hover">
                                <thead class="table-header">
                                    <tr>
                                        <th scope="col" class="border-0 font-weight-bold text-center">Field</th>
                                        <th scope="col" class="border-0 font-weight-bold text-center">Type</th>
                                        <th scope="col" class="border-0 font-weight-bold text-center">Description</th>
                                    </tr>
                                </thead>

                                <tbody class="table-body">
                                    <tr>
                                        <td class="text-center">nip</td>
                                        <td class="text-center">integer</td>
                                        <td class="text-center">Nomor Identitas Pegawai</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">noid</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan Nama Pegawai</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">nama</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan satu huruf jenis kelamin seperti : L/P</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">jurusan</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan agama anda</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">jenis_kelamin</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan alamat anda</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">agama</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan tempat lahir anda</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">no_tlp</td>
                                        <td class="text-center">date</td>
                                        <td class="text-center">Masukan dengan format tanggal seperti 2000-06-22</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">tmp_lahir</td>
                                        <td class="text-center">integer</td>
                                        <td class="text-center">Masukan nomor telepon dengan format 082633749502</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">tgl_lahir</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan nama kecamatan</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">shift</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan nama kota atau kabupaten yang di awali dengan kota atau kabupaten</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">gol_darah</td>
                                        <td class="text-center">integer</td>
                                        <td class="text-center">Masukan nama provinsi</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">gelar_dpn</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan password</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">gelar_blk</td>
                                        <td class="text-center">integer</td>
                                        <td class="text-center">ulangi password</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">status_kawin</td>
                                        <td class="text-center">integer</td>
                                        <td class="text-center">Masukan nama provinsi</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">kelurahan</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan password</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">kecamatan</td>
                                        <td class="text-center">integer</td>
                                        <td class="text-center">ulangi password</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">kota</td>
                                        <td class="text-center">integer</td>
                                        <td class="text-center">Masukan nama provinsi</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">provinsi</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan password</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">akses</td>
                                        <td class="text-center">integer</td>
                                        <td class="text-center">ulangi password</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">kode_dosen</td>
                                        <td class="text-center">integer</td>
                                        <td class="text-center">Masukan nama provinsi</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">nip_lama</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan password</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">npwp</td>
                                        <td class="text-center">integer</td>
                                        <td class="text-center">ulangi password</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">nidn</td>
                                        <td class="text-center">integer</td>
                                        <td class="text-center">Masukan nama provinsi</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">departemen</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan password</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">praktisi</td>
                                        <td class="text-center">integer</td>
                                        <td class="text-center">ulangi password</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">nama_instansi</td>
                                        <td class="text-center">integer</td>
                                        <td class="text-center">Masukan nama provinsi</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">alamat_instansi</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan password</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">pendidikan_terakhir</td>
                                        <td class="text-center">integer</td>
                                        <td class="text-center">ulangi password</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">id_user</td>
                                        <td class="text-center">integer</td>
                                        <td class="text-center">Masukan nama provinsi</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">created_at</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan password</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">update_at</td>
                                        <td class="text-center">integer</td>
                                        <td class="text-center">ulangi password</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <hr class="my-2">
                    <div class="row">
                        <div class="col">
                            <h4 class="mb-0"> Success-Response</h4>
                            <pre class="language-json alert alert-default" data-type="json">
                                <code class="language-json ">
                                    {
                                        "id": 1,
                                        "nip": "288",
                                        "noid": "2121",
                                        "nama": "mochamad syahrul",
                                        "jurusan": "sa",
                                        "jenis_kelamin": "L",
                                        "agama": "islam",
                                        "no_tlp": "212",
                                        "tmp_lahir": "jombang",
                                        "tgl_lahir": "2021-07-08",
                                        "shift": "sa",
                                        "gol_darah": "sas",
                                        "gelar_dpn": "sa",
                                        "gelar_blk": "sa",
                                        "status_kawin": "sasa",
                                        "kelurahan": "asa",
                                        "kecamatan": "Koto Kampar Hulu",
                                        "kota": "Kabupaten Kampar",
                                        "provinsi": "Riau",
                                        "askes": "1",
                                        "kode_dosen": "12",
                                        "nip_lama": "1",
                                        "npwp": "1",
                                        "nidn": "1",
                                        "departemen": "jmg",
                                        "praktisi": "jmg",
                                        "nama_instansi": "jmg",
                                        "alamat_instansi": "jombang",
                                        "pendidikan_terakhir": "smk",
                                        "id_user": 1,
                                        "created_at": "2021-08-12T14:53:18.000000Z",
                                        "updated_at": "2021-08-12T14:58:37.000000Z"
                                    }
                                </code>
                            </pre>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
