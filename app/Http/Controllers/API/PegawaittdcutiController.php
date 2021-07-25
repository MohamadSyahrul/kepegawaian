<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pegawai_ttd_cuti;
use Illuminate\Http\Request;

class PegawaittdcutiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ttd = Pegawai_ttd_cuti::all();
        return response()->json($ttd, 200);
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
    public function store(Request $request)
    {
        $request->validate([
            "id_pegawai" => "required",
            "jabatan" => "required"
        ]);
        return Pegawai_ttd_cuti::create($request->all());
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
        $ttd = Pegawai_ttd_cuti::find($id);
        $ttd->update($request->all());
        return $ttd;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ttd = Pegawai_ttd_cuti::where('id', $id)->first();
        if($ttd){
            $ttd->delete();
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
