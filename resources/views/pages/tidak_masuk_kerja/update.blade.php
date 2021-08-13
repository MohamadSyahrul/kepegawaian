@extends('layout.master')
@section('title')
Documentation Update Data Pns
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
                            <h3 class="mb-0">Dokumentasi API Update Data Pns</h3>
                        </div>
                    </div>
                </div>
                <hr class="my-4">
                <div class="card-body p-0 border-0">
                    <div class="row">
                        <div class="col">
                            <h3 class="mb-0">URL :</h3>
                            <p>This is our base url for every endpoint with different http method request</p>
                            <span class="badge badge-pill badge-infi">Put</span>
                            <pre class="alert alert-default">http://127.0.0.1:8000/api/kepegawaian/data-pns/1</pre>
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
                                        <td class="text-center">id</td>
                                        <td class="text-center">integer</td>
                                        <td class="text-center">Nomor Identitas Pegawai</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">id_pegawai</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan Nama Pegawai</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">gol_awal</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan satu huruf jenis kelamin seperti : L/P</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">gol_akhir</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan password</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">tmt_cpns</td>
                                        <td class="text-center">integer</td>
                                        <td class="text-center">ulangi password</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">tmt_pns</td>
                                        <td class="text-center">integer</td>
                                        <td class="text-center">Nomor Identitas Pegawai</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">tmt_fungsional</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan Nama Pegawai</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">tmt_akhir</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan satu huruf jenis kelamin seperti : L/P</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">fungsional</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan password</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">karpeg</td>
                                        <td class="text-center">integer</td>
                                        <td class="text-center">ulangi password</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">karis_karsu</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan satu huruf jenis kelamin seperti : L/P</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">created_at</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan password</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">updated_at</td>
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
                                        "message": "Update Data PNS method Success",
                                        "data": {
                                            "id": 1,
                                            "id_pegawai": "1",
                                            "gol_awal": "sss",
                                            "gol_akhir": "ss",
                                            "tmt_cpns": "at",
                                            "tmt_pns": "op",
                                            "tmt_fungsional": "ww",
                                            "tmt_akhir": "q",
                                            "fungsional": "r",
                                            "karpeg": "t",
                                            "karis_karsu": "u",
                                            "created_at": "2021-08-12T18:30:43.000000Z",
                                            "updated_at": "2021-08-12T18:40:16.000000Z"
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
