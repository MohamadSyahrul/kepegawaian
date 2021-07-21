<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\PegawairiwayatpekerjaanRequest;
use App\Models\Pegawai_riwayat_pekerjaan;
use Illuminate\Http\Request;

class PegawairiwayatpekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rwyt = Pegawai_riwayat_pekerjaan::all();
        return response()->json($rwyt, 200);
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
    public function store(PegawairiwayatpekerjaanRequest $request)
    {
        $riwayat = new Pegawai_riwayat_pekerjaan([
            'id_pegawai' => $request->get('id_pegawai'),
            'tentang' => $request->get('tentang'),
            'nomor_sk' => $request->get('nomor_sk'),
            'tanggal_sk' => $request->get('tanggal_sk'),
            'pejabat_yg_mengesahkan' => $request->get('pejabat_yg_mengesahkan'),
            'pangkat' => $request->get('pangkat'),
            'tmt' => $request->get('tmt'),
            'masa_kerja_tahun' => $request->get('masa_kerja_tahun'),
            'masa_kerja_bulanan' => $request->get('masa_kerja_bulanan'),
            'gaji' => $request->get('gaji'),
            'keterangan' => $request->get('keterangan')
        ]);
        $riwayat->save();
        return response()->json(
            [
                "message" => "Success",
                "data" => $riwayat
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
    public function update(PegawairiwayatpekerjaanRequest $request, $id)
    {
        $riwayat = Pegawai_riwayat_pekerjaan::find($id);
        $riwayat->update([
            'id_pegawai' => $request->id_pegawai,
            'tentang' => $request->tentang,
            'nomor_sk' => $request->nomor_sk,
            'tanggal_sk' => $request->tanggal_sk,
            'pejabat_yg_mengesahkan' => $request->pejabat_yg_mengesahkan,
            'pangkat' => $request->pangkat,
            'tmt' => $request->tmt,
            'masa_kerja_tahun' => $request->masa_kerja_tahun,
            'masa_kerja_bulanan' => $request->masa_kerja_bulanan,
            'gaji' => $request->gaji,
            'keterangak' => $request->keterangak

        ]);
        return response()->json([
            "message" => "Update Data method Success",
            'data' => $riwayat
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
        $riwayat = Pegawai_riwayat_pekerjaan::where('id', $id)->first();
        if($riwayat){
            $riwayat->delete();
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
