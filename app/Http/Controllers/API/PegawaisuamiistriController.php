<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\PegawaisuamiistriRequest;
use App\Models\Pegawai_suami_istri;
use Illuminate\Http\Request;

class PegawaisuamiistriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = Pegawai_suami_istri::all();
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
    public function store(PegawaisuamiistriRequest $request)
    {
        $pegawai = Pegawai_suami_istri::create($request->all());
        return response()->json([
            "message" => "Success",
            "data" => $pegawai,
        ]);
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
    public function update(PegawaisuamiistriRequest $request, $id)
    {
        $pegawai = Pegawai_suami_istri::find($id);
        $pegawai->update($request->all());
        return $pegawai;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pegawai = Pegawai_suami_istri::where('id', $id)->first();
        if($pegawai){
            $pegawai->delete();
            return response()->json(
                [
                "message" => "DELETE Data Pegawai Suami Istri id ".$id ." Success"
                ]
            );
        }
        return response()->json(
            [
            "message" => "Data Pegawai Suami Istri with id ".$id ." not found"
            ], 400
        ); 
    }
}
