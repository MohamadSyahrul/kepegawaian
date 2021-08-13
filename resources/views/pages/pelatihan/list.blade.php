@extends('layout.master')
@section('title')
Documentation List Pelatihan
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
                            <h3 class="mb-0">Dokumentasi API List Pelatihan</h3>
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
                            <pre class="alert alert-default">http://127.0.0.1:8000/api/kepegawaian/pegawai-riwayat-pekerjaan</pre>
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
                                    [
                                        {
                                            "id": 1,
                                            "id_pegawai": 1,
                                            "nama_pelatihan": "DTS web developer",
                                            "institusi_pelatihan": "poliwangi",
                                            "tempat_lahir": "jombang",
                                            "tanggal_mulai_pelaksanaan": "2021-06-02",
                                            "tanggal_akhir_pelaksanaan": "2021-07-02",
                                            "durasi_pelaksanaan": "1 bulan",
                                            "created_at": "2021-08-13T16:38:32.000000Z",
                                            "updated_at": "2021-08-13T16:41:48.000000Z"
                                        },
                                        {
                                            "id": 2,
                                            "id_pegawai": 1,
                                            "nama_pelatihan": "DTS",
                                            "institusi_pelatihan": "poliwangi",
                                            "tempat_lahir": "poliwangi",
                                            "tanggal_mulai_pelaksanaan": "2021-06-02",
                                            "tanggal_akhir_pelaksanaan": "2021-07-02",
                                            "durasi_pelaksanaan": "1 bulan",
                                            "created_at": "2021-08-13T16:38:41.000000Z",
                                            "updated_at": "2021-08-13T16:38:41.000000Z"
                                        },
                                        {
                                            "id": 3,
                                            "id_pegawai": 1,
                                            "nama_pelatihan": "WEB API",
                                            "institusi_pelatihan": "poliwangi",
                                            "tempat_lahir": "poliwangi",
                                            "tanggal_mulai_pelaksanaan": "2021-02-02",
                                            "tanggal_akhir_pelaksanaan": "2021-08-02",
                                            "durasi_pelaksanaan": "7 bulan",
                                            "created_at": "2021-08-13T16:39:13.000000Z",
                                            "updated_at": "2021-08-13T16:39:13.000000Z"
                                        }
                                    ]
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
