@extends('layout.master')
@section('title')
Documentation Update Pendidikan
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
                            <h3 class="mb-0">Dokumentasi API Update Pendidikan</h3>
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
                            <pre class="alert alert-default">http://127.0.0.1:8000/api/kepegawaian/pegawai-pendidikan/1</pre>
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
                                        <td class="text-center">ulangi password</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">id_pegawai</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan satu huruf jenis kelamin seperti : L/P</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">pendidikan</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan satu huruf jenis kelamin seperti : L/P</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">nama_institusi_pendidikan</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan password</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">tempat</td>
                                        <td class="text-center">integer</td>
                                        <td class="text-center">ulangi password</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">fakultas</td>
                                        <td class="text-center">integer</td>
                                        <td class="text-center">ulangi password</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">jurusan</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan satu huruf jenis kelamin seperti : L/P</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">tahun_masuk</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan satu huruf jenis kelamin seperti : L/P</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">tahun_lulus</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan password</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">ijazah</td>
                                        <td class="text-center">integer</td>
                                        <td class="text-center">ulangi password</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">tingkat_pendidikan</td>
                                        <td class="text-center">integer</td>
                                        <td class="text-center">ulangi password</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">created_at</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan satu huruf jenis kelamin seperti : L/P</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">update_at</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan satu huruf jenis kelamin seperti : L/P</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">id_pendidikan</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan password</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">tingkat</td>
                                        <td class="text-center">integer</td>
                                        <td class="text-center">ulangi password</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">updated_at</td>
                                        <td class="text-center">integer</td>
                                        <td class="text-center">ulangi password</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">created_at</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan satu huruf jenis kelamin seperti : L/P</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">id</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan satu huruf jenis kelamin seperti : L/P</td>
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
                                        "data": {
                                            "id": 1,
                                            "id_pegawai": 1,
                                            "pendidikan": "smk",
                                            "nama_institusi_pendidikan": "poliwangi",
                                            "tempat": "bondowoso",
                                            "fakultas": "jombang",
                                            "jurusan": "teknik",
                                            "tahun_masuk": "2000",
                                            "tahun_lulus": "2020",
                                            "ijazah": "jombang",
                                            "tingkat_pendidikan": "s3",
                                            "created_at": "2021-08-12T20:49:32.000000Z",
                                            "updated_at": "2021-08-12T20:50:00.000000Z"
                                        },
                                        "data_pendidikan_tingkat": {
                                            "id_pendidikan": 1,
                                            "tingkat": "s1",
                                            "updated_at": "2021-08-12T20:50:00.000000Z",
                                            "created_at": "2021-08-12T20:50:00.000000Z",
                                            "id": 3
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
