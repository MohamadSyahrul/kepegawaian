@extends('layout.master')
@section('title')
Documentation Login
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
                            <h3 class="mb-0">Dokumentasi API Login</h3>
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
                            <pre class="alert alert-default">http://127.0.0.1:8000/api/login</pre>
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
                                        <td class="text-center">email</td>
                                        <td class="text-center">tring</td>
                                        <td class="text-center">Email users</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">password</td>
                                        <td class="text-center">string</td>
                                        <td class="text-center">Password users</td>
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
                            "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjo
                                            iNDM5ZTE3MDcyMTIwMWVmZWNkZTE4MGE1ZjViMjlmNTE4NDAzYjY2ZmQ2MTd
                                            mNWYxMGM0MjBkMjExNzkyYmQ0NzMyYjBhZDkzZDM4MDkwN2IiLCJpYXQiOjE2
                                            Mjg3NTYxMTkuMTI4NTcyLCJuYmYiOjE2Mjg3NTYxMTkuMTI4NTg5LCJleHAiO
                                            jE2NjAyOTIxMTguOTg2MjI1LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.3dY8KC
                                            B7PwN3r7S7Mpu7M-sCRJ5jyI3WnLD45jiTweuxj2KACGQE8nQQ3L9fFfKsgs",
                            "token_id": "439e170721201efecde180a5f5b29f518403b66fd617f5f10c420d211792bd473",
                            "user_id": 1,
                            "name": 1,
                            "email": "sudin2181@gmail.com"
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
