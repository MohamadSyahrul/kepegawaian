<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\PegawaiRequest;
use App\Models\Pegawai;
use App\Models\User;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pgw = Pegawai::all();
        return response()->json($pgw, 200);
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
    public function store(PegawaiRequest $request)
    {
        // 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pgw = Pegawai::with([
            'unit', 'staf', 'data_pns', 'tidakMasukKerja', 'riwayatPekerjaan', 'dataStruktural',
            'pegawaiStatus','pegawaiPelatihan','pegawaiPendidikan','keluargaPegawai',
            'suamiIstri','ttdCuti'
        ])->where('id', $id)->first();
        return response()->json([
            "message" => "success",
            "data_pegawai" => $pgw
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
    public function update(PegawaiRequest $request, $id)
    {
        $pgw = Pegawai::find($id);
        $pgw->update($request->all());
        return $pgw;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pgw = Pegawai::where('id', $id)->first();
        if($pgw){
            $pgw->delete();
            return response()->json(
                [
                "message" => "DELETE Pegawai id ".$id ." Success"
                ]
            );
        }
        return response()->json(
            [
            "message" => "Pegawai with id ".$id ." not found"
            ], 400
        ); 
    }
}
