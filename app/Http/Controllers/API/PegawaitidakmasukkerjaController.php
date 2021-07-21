<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\PegawaitidakmasukkerjaRequest;
use App\Models\Pegawai_tidak_masuk_kerja;
use Illuminate\Http\Request;

class PegawaitidakmasukkerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = Pegawai_tidak_masuk_kerja::all();
        return response()->json($pegawai, 200);
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
    public function store(PegawaitidakmasukkerjaRequest $request)
    {
        $pegawai = new Pegawai_tidak_masuk_kerja;
        $pegawai->id_pegawai = $request->id_pegawai;
        $pegawai->jenis = $request->jenis;
        $pegawai->mulai = $request->mulai;
        $pegawai->akhir = $request->akhir;
        $pegawai->nomor_surat = $request->nomor_surat;
        $pegawai->keperluan = $request->keperluan;
        $pegawai->tempat_kota = $request->tempat_kota;
        $pegawai->tanggal_ttd = $request->tanggal_ttd;
        $pegawai->pegawai_ttd_cuti = $request->pegawai_ttd_cuti;

        $pegawai->save();
        return response()->json(
            [
            "message" => "Success",
            "data" => $pegawai,
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(PegawaitidakmasukkerjaRequest $request, $id)
    {
        $item = Pegawai_tidak_masuk_kerja::find($id);
        $item->update([
            'id_pegawai' => $request->id_pegawai,
            'jenis' => $request->jenis,
            'mulai' => $request->mulai,
            'akhir' => $request->akhir,
            'nomor_surat' => $request->nomor_surat,
            'keperluan' => $request->keperluan,
            'tempat_kota' => $request->tempat_kota,
            'tanggal_ttd' => $request->tanggal_ttd,
            'pegawai_ttd_cuti' => $request->pegawai_ttd_cuti

        ]);
        return response()->json([
            "message" => "Update Data method Success",
            'data' => $item
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Pegawai_tidak_masuk_kerja::where('id', $id)->first();
        if($item){
            $item->delete();
            return response()->json(
                [
                "message" => "DELETE Data id ".$id ." Success"
                ]
            );
        }
        return response()->json(
            [
            "message" => "Data with id ".$id ." not found"
            ], 400
        );
    }
}
