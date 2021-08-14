@extends('layout.master')
@section('title')
Documentation Detail Pegawai
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
                            <h3 class="mb-0">Dokumentasi API Detail Pegawai</h3>
                        </div>
                    </div>
                </div>
                <hr class="my-4">
                <div class="card-body p-0 border-0">
                    <div class="row">
                        <div class="col">
                            <h3 class="mb-0">URL :</h3>
                            <p>This is our base url for every endpoint with different http method request</p>
                            <span class="badge badge-pill badge-success">Get</span>
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
                            <h4 class="mb-0"> Success-Response</h4>
                            <pre class="language-json alert alert-default" data-type="json">
                                <code class="language-json ">
                                    {
                                        "message": "success",
                                        "data_pegawai": {
                                            "id": 1,
                                            "nip": 288,
                                            "noid": 2121,
                                            "nama": "mochamad syahrul",
                                            "jurusan": "sa",
                                            "jenis_kelamin": "L",
                                            "agama": "islam",
                                            "no_tlp": "082141213185",
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
                                            "nip_lama": 1,
                                            "npwp": "1",
                                            "nidn": "1",
                                            "departemen": "jmg",
                                            "praktisi": "jmg",
                                            "nama_instansi": "jmg",
                                            "alamat_instansi": "jombang",
                                            "pendidikan_terakhir": "smk",
                                            "id_user": 1,
                                            "created_at": "2021-08-12T08:14:49.000000Z",
                                            "updated_at": "2021-08-14T16:57:07.000000Z",
                                            "unit": [],
                                            "staf": [],
                                            "data_pns": [],
                                            "tidak_masuk_kerja": [],
                                            "riwayat_pekerjaan": [],
                                            "data_struktural": [],
                                            "pegawai_status": [
                                                {
                                                    "id": 1,
                                                    "id_pegawai": 1,
                                                    "status": "non aktif",
                                                    "status_karyawan": "non aktif",
                                                    "created_at": "2021-08-13T15:47:54.000000Z",
                                                    "updated_at": "2021-08-13T15:51:13.000000Z"
                                                }
                                            ],
                                            "pegawai_pelatihan": [
                                                {
                                                    "id": 4,
                                                    "id_pegawai": 1,
                                                    "nama_pelatihan": "WEB API",
                                                    "institusi_pelatihan": "poliwangi",
                                                    "tempat_lahir": "poliwangi",
                                                    "tanggal_mulai_pelaksanaan": "2021-02-02",
                                                    "tanggal_akhir_pelaksanaan": "2021-08-02",
                                                    "durasi_pelaksanaan": "7 bulan",
                                                    "created_at": "2021-08-13T16:42:33.000000Z",
                                                    "updated_at": "2021-08-13T16:42:33.000000Z"
                                                }
                                            ],
                                            "pegawai_pendidikan": [],
                                            "keluarga_pegawai": [],
                                            "suami_istri": [
                                                {
                                                    "id": 2,
                                                    "id_pegawai": 1,
                                                    "nama_suami_istri": "rezeki",
                                                    "tempat_lahir": "kediri",
                                                    "tanggal_lahir": "2021-07-08",
                                                    "pekerjaan": "mobile developer",
                                                    "pernikahan_ke": "1",
                                                    "tanggal_pernikahan": "2021-08-02",
                                                    "tempat_pernikahan": "surabaya",
                                                    "created_at": "2021-08-13T18:05:12.000000Z",
                                                    "updated_at": "2021-08-13T18:05:12.000000Z"
                                                }
                                            ],
                                            "ttd_cuti": []
                                        }
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
