@extends('layout.master')
@section('title')
Documentation Check User
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
                            <h3 class="mb-0">Dokumentasi API Check User</h3>
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
                            <pre class="alert alert-default">http://127.0.0.1:8000/api/kepegawaian/checkUserBot</pre>
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
                                        "data": [
                                            {
                                                "update_id": 26835602,
                                                "my_chat_member": {
                                                    "chat": {
                                                        "id": 724485890,
                                                        "first_name": "Mochamad",
                                                        "last_name": "Sahrul",
                                                        "username": "sHryung01",
                                                        "type": "private"
                                                    },
                                                    "from": {
                                                        "id": 724485890,
                                                        "is_bot": false,
                                                        "first_name": "Mochamad",
                                                        "last_name": "Sahrul",
                                                        "username": "sHryung01",
                                                        "language_code": "id"
                                                    },
                                                    "date": 1628884790,
                                                    "old_chat_member": {
                                                        "user": {
                                                            "id": 1938811210,
                                                            "is_bot": true,
                                                            "first_name": "SimKepegawaianPoliwangiBot",
                                                            "username": "SimKepegawaianPoliwangi_bot"
                                                        },
                                                        "status": "member"
                                                    },
                                                    "new_chat_member": {
                                                        "user": {
                                                            "id": 1938811210,
                                                            "is_bot": true,
                                                            "first_name": "SimKepegawaianPoliwangiBot",
                                                            "username": "SimKepegawaianPoliwangi_bot"
                                                        },
                                                        "status": "kicked",
                                                        "until_date": 0
                                                    }
                                                }
                                            },
                                            {
                                                "update_id": 26835603,
                                                "my_chat_member": {
                                                    "chat": {
                                                        "id": 724485890,
                                                        "first_name": "Mochamad",
                                                        "last_name": "Sahrul",
                                                        "username": "sHryung01",
                                                        "type": "private"
                                                    },
                                                    "from": {
                                                        "id": 724485890,
                                                        "is_bot": false,
                                                        "first_name": "Mochamad",
                                                        "last_name": "Sahrul",
                                                        "username": "sHryung01",
                                                        "language_code": "id"
                                                    },
                                                    "date": 1628884807,
                                                    "old_chat_member": {
                                                        "user": {
                                                            "id": 1938811210,
                                                            "is_bot": true,
                                                            "first_name": "SimKepegawaianPoliwangiBot",
                                                            "username": "SimKepegawaianPoliwangi_bot"
                                                        },
                                                        "status": "kicked",
                                                        "until_date": 0
                                                    },
                                                    "new_chat_member": {
                                                        "user": {
                                                            "id": 1938811210,
                                                            "is_bot": true,
                                                            "first_name": "SimKepegawaianPoliwangiBot",
                                                            "username": "SimKepegawaianPoliwangi_bot"
                                                        },
                                                        "status": "member"
                                                    }
                                                }
                                            },
                                            {
                                                "update_id": 26835604,
                                                "message": {
                                                    "message_id": 3,
                                                    "from": {
                                                        "id": 724485890,
                                                        "is_bot": false,
                                                        "first_name": "Mochamad",
                                                        "last_name": "Sahrul",
                                                        "username": "sHryung01",
                                                        "language_code": "id"
                                                    },
                                                    "chat": {
                                                        "id": 724485890,
                                                        "first_name": "Mochamad",
                                                        "last_name": "Sahrul",
                                                        "username": "sHryung01",
                                                        "type": "private"
                                                    },
                                                    "date": 1628884807,
                                                    "text": "/start",
                                                    "entities": [
                                                        {
                                                            "offset": 0,
                                                            "length": 6,
                                                            "type": "bot_command"
                                                        }
                                                    ]
                                                }
                                            },
                                            {
                                                "update_id": 26835605,
                                                "message": {
                                                    "message_id": 4,
                                                    "from": {
                                                        "id": 1395977656,
                                                        "is_bot": false,
                                                        "first_name": "Mochamad Surya Aji",
                                                        "language_code": "id"
                                                    },
                                                    "chat": {
                                                        "id": 1395977656,
                                                        "first_name": "Mochamad Surya Aji",
                                                        "type": "private"
                                                    },
                                                    "date": 1628884837,
                                                    "text": "/start",
                                                    "entities": [
                                                        {
                                                            "offset": 0,
                                                            "length": 6,
                                                            "type": "bot_command"
                                                        }
                                                    ]
                                                }
                                            },
                                            {
                                                "update_id": 26835606,
                                                "my_chat_member": {
                                                    "chat": {
                                                        "id": -1001508150399,
                                                        "title": "Sim Kepegawaian Poliwangi",
                                                        "type": "channel"
                                                    },
                                                    "from": {
                                                        "id": 724485890,
                                                        "is_bot": false,
                                                        "first_name": "Mochamad",
                                                        "last_name": "Sahrul",
                                                        "username": "sHryung01",
                                                        "language_code": "id"
                                                    },
                                                    "date": 1628884925,
                                                    "old_chat_member": {
                                                        "user": {
                                                            "id": 1938811210,
                                                            "is_bot": true,
                                                            "first_name": "SimKepegawaianPoliwangiBot",
                                                            "username": "SimKepegawaianPoliwangi_bot"
                                                        },
                                                        "status": "left"
                                                    },
                                                    "new_chat_member": {
                                                        "user": {
                                                            "id": 1938811210,
                                                            "is_bot": true,
                                                            "first_name": "SimKepegawaianPoliwangiBot",
                                                            "username": "SimKepegawaianPoliwangi_bot"
                                                        },
                                                        "status": "administrator",
                                                        "can_be_edited": false,
                                                        "can_manage_chat": true,
                                                        "can_change_info": true,
                                                        "can_post_messages": true,
                                                        "can_edit_messages": true,
                                                        "can_delete_messages": true,
                                                        "can_invite_users": true,
                                                        "can_restrict_members": true,
                                                        "can_promote_members": false,
                                                        "can_manage_voice_chats": true,
                                                        "is_anonymous": false
                                                    }
                                                }
                                            }
                                        ]
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
