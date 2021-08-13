@extends('layout.master')
@section('title')
Documentation List Keluarga Pegawai
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
                            <h3 class="mb-0">Dokumentasi API List Keluarga Pegawai</h3>
                        </div>
                    </div>
                </div>
                <hr class="my-4">
                <div class="card-body p-0 border-0">
                    <div class="row">
                        <div class="col">
                            <h3 class="mb-0">URL :</h3>
                            <p>This is our base url for every endpoint with different http method request</p>
                            <span class="badge badge-pill badge-primary">Post</span>
                            <pre
                                class="alert alert-default">http://127.0.0.1:8000/api/kepegawaian/keluarga-pegawai</pre>
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
                                            "nama": "siti", 
                                            "jenis": "manusia", 
                                            "pekerjaan": "tani", 
                                            "tmp_lahir": "madiun", 
                                            "tgl_lahir": "2000-02-03", 
                                            "anak_ke": "1", 
                                            "tempat_lahir": "jombang",
                                            "tanggal_lahir": "2000-12-20", 
                                            "jenis_kelamin": "L", 
                                            "dari_suami_istri_ke": "1", 
                                            "status_tunjangan": "2", 
                                            "created_at": "2021-08-12T20:28:52.000000Z", 
                                            "updated_at": "2021-08-12T20:29:24.000000Z" 
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
