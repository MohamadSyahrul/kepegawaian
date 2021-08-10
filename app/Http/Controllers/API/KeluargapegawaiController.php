<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\KeluargapegawaiRequest;
use App\Models\Keluarga_pegawai;
use App\Models\Pegawai_keterangan;
use Illuminate\Http\Request;

class KeluargapegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keluarga = Keluarga_pegawai::all();
        return response()->json($keluarga, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KeluargapegawaiRequest $request)
    {
        // $keluarga = Keluarga_pegawai::create($request->all());
        // return response()->json([
        //     "message" => "Success",
        //     "data" => $keluarga,
        // ]);
        $keluarga = new Keluarga_pegawai();
        $keluarga->id_pegawai = $request->id_pegawai;
        $keluarga->nama = $request->nama;
        $keluarga->jenis = $request->jenis;
        $keluarga->pekerjaan = $request->pekerjaan;
        $keluarga->tmp_lahir = $request->tmp_lahir;
        $keluarga->tgl_lahir = $request->tgl_lahir;
        $keluarga->anak_ke = $request->anak_ke;
        $keluarga->tempat_lahir = $request->tempat_lahir;
        $keluarga->tanggal_lahir = $request->tanggal_lahir;
        $keluarga->jenis_kelamin = $request->jenis_kelamin;
        $keluarga->dari_suami_istri_ke = $request->dari_suami_istri_ke;
        $keluarga->status_tunjangan = $request->status_tunjangan;
        $keluarga->save();

        foreach ($request->list_keterangan as $key => $value) {
            $ktr = array(
                'id_keluarga' => $keluarga->id,
                'keterangan' => $value['keterangan']
            );
            $ket = Pegawai_keterangan::create($ktr);
        }

        return response()->json([
                'message'       => 'success',
                'data' => $ket
            ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $keluarga = Keluarga_pegawai::with('keterangan')->where('id', $id)->first();
        return response()->json([
            "message" => "success",
            "data_keluarga" => $keluarga
        ],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KeluargapegawaiRequest $request, $id)
    {
        $keluarga = Keluarga_pegawai::find($id);
        $keluarga->update($request->all());

        Pegawai_keterangan::where('id_keluarga', $id)->delete();

        foreach ($request->list_keterangan as $key => $value) {
            $ktr = array(
                'id_keluarga' => $keluarga->id,
                'keterangan' => $value['keterangan']
            );
            $ket = Pegawai_keterangan::create($ktr);
        }
        return response()->json([
            'message'       => 'success',
            'data' => $keluarga,
            'data_keterangan' => $ket,
        ], 200);
        // return $keluarga;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $keluarga = Keluarga_pegawai::where('id', $id)->first();
        if($keluarga){
            $keluarga->delete();
            return response()->json(
                [
                "message" => "DELETE Keluarga Pegawai id ".$id ." Success"
                ]
            );
        }
        return response()->json(
            [
            "message" => "Keluarga Pegawai with id ".$id ." not found"
            ], 400
        ); 
    }
}
