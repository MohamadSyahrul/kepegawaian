@extends('layout.master')
@section('title')
Documentation Update Suami istri
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
                            <h3 class="mb-0">Dokumentasi API Suami istri</h3>
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
                            <pre class="alert alert-default">http://127.0.0.1:8000/api/kepegawaian/pegawai-suamiIstri/1</pre>
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
                                        <td class="text-center">id_pegawai</td>
                                        <td class="text-center">integer</td>
                                        <td class="text-center">Nomor Identitas Pegawai</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">nama_suami_istri</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">nama suami atau istri pegawai</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">tempat_lahir</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">tempat lahir pegawai</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">pekerjaan</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">pekerjaan suami atau istri pegawai</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">pernikahan_ke</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">-</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">tanggal_pernikahan</td>
                                        <td class="text-center">date</td>
                                        <td class="text-center">format tanggal Yyyy-Mm-Dd</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">tempat_pernikahan</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">-</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">tanggal_lahir</td>
                                        <td class="text-center">date</td>
                                        <td class="text-center">format tanggal Yyyy-Mm-Dd</td>
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
                                        "id_pegawai": "1",
                                        "nama_suami_istri": "rezeki",
                                        "tempat_lahir": "ponorogo",
                                        "tanggal_lahir": "2021-07-08",
                                        "pekerjaan": "network developer",
                                        "pernikahan_ke": "1",
                                        "tanggal_pernikahan": "2021-08-02",
                                        "tempat_pernikahan": "madura",
                                        "created_at": "2021-08-13T18:04:48.000000Z",
                                        "updated_at": "2021-08-13T18:07:31.000000Z"
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
