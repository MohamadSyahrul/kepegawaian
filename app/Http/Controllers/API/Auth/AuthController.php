<?php

namespace App\Http\Controllers\API\Auth;

use App\Models\Unit;
use App\Models\User;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required | max:25',
            'email' => 'email | required | unique:users',
            'password' => 'required | confirmed',
            'nip' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'no_tlp' => 'required',
            'alamat' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',

            
        ]);

        //create user
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        Pegawai::create([
            'id_user' => $user->id,
            'nip' => $request->nip,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'no_tlp' => $request->no_tlp,
            'alamat' => $request->alamat,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'kecamatan' => $request->kecamatan,
            'kota' => $request->kota,
            'provinsi' => $request->provinsi,

        ]);

        $user->save();

        return response()->json($user, 201);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $validateData = $request->validate([
            'email' => 'email | required',
            'password' => 'required',
        ]);
        $login_detail = request(['email','password']);
        if(!Auth::attempt($login_detail)){
            return response()->json([
                'error'=>'login gagal, Cek lagi detail login'
            ], 401);
        }
        $user = $request->user();

        $tokenResult = $user->createToken('AccessToken');
        $token = $tokenResult->token;
        $token->save();

        return response()->json([
            'access_token'=> $tokenResult->accessToken,
            'token_id'=> $token->id,
            'user_id'=> $user->id,
            'name'=> $user->id,
            'email'=> $user->email,
        ],200);
    }
    
    public function logout()
    {
        auth()->logout();
        return response()->json(['message' => 'Successfully logged out']);
    }
}
