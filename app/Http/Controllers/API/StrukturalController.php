<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\StrukturalRequest;
use App\Models\Data_struktural;
use Illuminate\Http\Request;

class StrukturalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Data_struktural::all();
        return response()->json($data, 200);
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
    public function store(StrukturalRequest $request)
    {
        $data = new Data_struktural;
        $data->id = $request->id;
        $data->id_pegawai = $request->id_pegawai;
        $data->nama_jabatan = $request->nama_jabatan;
        $data->tmt = $request->tmt;
        $data->nomor_sk = $request->nomor_sk;
        $data->tanggal_sk = $request->tanggal_sk;
        $data->pejabat_yg_mengesahkan = $request->pejabat_yg_mengesahkan;
        $data->keterangan = $request->keterangan;
        $data->jabatan_fungsional = $request->jabatan_fungsional;
        $data->jabatan_struktural = $request->jabatan_struktural;
        $data->status = $request->status;
        $data->tmt_struktural = $request->tmt_struktural;
        $data->tmt_kerja = $request->tmt_kerja;
        $data->tmt_kontrak = $request->tmt_kontrak;
        
        $data->save();
        return response()->json($data, 201);
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
    public function update(Request $request, $id)
    {
        $jabatan = Data_struktural::where('id', $id)->first();
        if($jabatan){ 
            $jabatan->id_pegawai = $request->id_pegawai ? $request->id_pegawai : $jabatan->id_pegawai;
            $jabatan->nama_jabatan = $request->nama_jabatan ? $request->nama_jabatan : $jabatan->nama_jabatan;
            $jabatan->tmt = $request->tmt ? $request->tmt : $jabatan->tmt;
            $jabatan->nomor_sk = $request->nomor_sk ? $request->nomor_sk : $jabatan->nomor_sk;
            $jabatan->tanggal_sk = $request->tanggal_sk ? $request->tanggal_sk : $jabatan->tanggal_sk;
            $jabatan->pejabat_yg_mengesahkan = $request->pejabat_yg_mengesahkan ? $request->pejabat_yg_mengesahkan : $jabatan->pejabat_yg_mengesahkan;
            $jabatan->keterangan = $request->keterangan ? $request->keterangan : $jabatan->keterangan;
            $jabatan->jabatan_fungsional = $request->jabatan_fungsional ?  $request->jabatan_fungsional : $jabatan->jabatan_fungsional;
            $jabatan->jabatan_struktural = $request->jabatan_struktural ? $request->jabatan_struktural : $jabatan->jabatan_struktural;
            $jabatan->status = $request->status ? $request->status : $jabatan->status;
            $jabatan->tmt_struktural = $request->tmt_struktural ? $jabatan->tmt_struktural : $jabatan->tmt_struktural;
            $jabatan->tmt_kerja = $request->tmt_kerja ? $request->tmt_kerja : $jabatan->tmt_kerja;
            $jabatan->tmt_kontrak = $request->tmt_kontrak ? $request->tmt_kontrak : $jabatan->tmt_kontrak;
        
            $jabatan->update();
            return response()->json(
                [
                "message" => "Update method Success ",
                "jabatan" => $jabatan
                ]
            );
        }
        return response()->json(
            [
            "message" => "Data Strukturl with id ".$id ." not found"
            ], 400
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jabatan = Data_struktural::where('id', $id)->first();
        if($jabatan){
            $jabatan->delete();
            return response()->json(
                [
                "message" => "DELETE Data Struktural id ".$id ." Success"
                ]
            );
        }
        return response()->json(
            [
            "message" => "Data Struktural with id ".$id ." not found"
            ], 400
        );
    }
}
