@extends('layout.master')
@section('title')
Documentation Update Data Struktural
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
                            <h3 class="mb-0">Dokumentasi API Update Data Struktural</h3>
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
                            <pre class="alert alert-default">127.0.0.1:8000/api/kepegawaian/data-struktural/2</pre>
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
                                        <td class="text-center">nama_jabatan</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan satu huruf jenis kelamin seperti : L/P</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">tmt</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan agama anda</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">nomor_sk</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan alamat anda</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">tanggal_sk</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan tempat lahir anda</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">pejabat_yang_mengesahkan</td>
                                        <td class="text-center">date</td>
                                        <td class="text-center">Masukan dengan format tanggal seperti 2000-06-22</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">keterangan</td>
                                        <td class="text-center">integer</td>
                                        <td class="text-center">Masukan nomor telepon dengan format 082633749502</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">jabatan_fungsional</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan nama kecamatan</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">jabatan_struktural</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan nama kota atau kabupaten yang di awali dengan
                                            kota atau kabupaten</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">status</td>
                                        <td class="text-center">integer</td>
                                        <td class="text-center">Masukan nama provinsi</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">tmt_struktural</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Masukan password</td>


                                    </tr>
                                    <tr>
                                        <td class="text-center">tmt_kerja</td>
                                        <td class="text-center">integer</td>
                                        <td class="text-center">ulangi password</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">tmt_kontrak</td>
                                        <td class="text-center">integer</td>
                                        <td class="text-center">Masukan nama provinsi</td>
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
                                        "message": "Update method Success ", 
                                        "jabatan": { 
                                            "id": 2, 
                                            "id_pegawai": "1", 
                                            "nama_jabatan": "coba", 
                                            "tmt": "coba", 
                                            "nomor_sk": "2182198", 
                                            "tanggal_sk": "2021-07-08", 
                                            "pejabat_yg_mengesahkan": "bagus", 
                                            "keterangan": "coba", 
                                            "jabatan_fungsional": "coba", 
                                            "jabatan_struktural": "coba", 
                                            "status": "aktiv", 
                                            "tmt_struktural": "coba", 
                                            "tmt_kerja": "coba", 
                                            "tmt_kontrak": "coba", 
                                            "created_at": "2021-08-12T16:24:36.000000Z", 
                                            "updated_at": "2021-08-12T17:35:30.000000Z" 
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
