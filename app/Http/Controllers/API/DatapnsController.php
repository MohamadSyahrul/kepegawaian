<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\DatapnsRequest;
use App\Models\Datapns;
use Illuminate\Http\Request;

class DatapnsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pns = Datapns::all();
        return response()->json($pns, 200);
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
    public function store(DatapnsRequest $request)
    {
        $pns = new Datapns;
        $pns->id_pegawai = $request->id_pegawai;
        $pns->gol_awal = $request->gol_awal;
        $pns->gol_akhir = $request->gol_akhir;
        $pns->tmt_cpns = $request->tmt_cpns;
        $pns->tmt_pns = $request->tmt_pns;
        $pns->tmt_fungsional = $request->tmt_fungsional;
        $pns->tmt_akhir = $request->tmt_akhir;
        $pns->fungsional = $request->fungsional;
        $pns->karpeg = $request->karpeg;
        $pns->karis_karsu = $request->karis_karsu;

        $pns->save();
        return response()->json(
            [
            "message" => "Success",
            "data" => $pns,
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
    public function update(DatapnsRequest $request, $id)
    {
        $pns = Datapns::find($id);
        $pns->update([
            'id_pegawai' => $request->id_pegawai,
            'gol_awal' => $request->gol_awal,
            'gol_akhir' => $request->gol_akhir,
            'tmt_cpns' => $request->tmt_cpns,
            'tmt_pns' => $request->tmt_pns,
            'tmt_fungsional' => $request->tmt_fungsional,
            'tmt_akhir' => $request->tmt_akhir,
            'fungsional' => $request->fungsional,
            'karpeg' => $request->karpeg,
            'karis_karsu' => $request->karis_karsu,
        ]);
        return response()->json([
            "message" => "Update Data PNS method Success",
            'data' => $pns
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
        $pns = Datapns::where('id', $id)->first();
        if($pns){
            $pns->delete();
            return response()->json(
                [
                "message" => "DELETE Data PNS id ".$id ." Success"
                ]
            );
        }
        return response()->json(
            [
            "message" => "Data PNS with id ".$id ." not found"
            ], 400
        );
    }
}
