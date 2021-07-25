<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\KeluargapegawaiRequest;
use App\Models\Keluarga_pegawai;
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
        $keluarga = Keluarga_pegawai::create($request->all());
        return response()->json([
            "message" => "Success",
            "data" => $keluarga,
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
    public function update(KeluargapegawaiRequest $request, $id)
    {
        $keluarga = Keluarga_pegawai::find($id);
        $keluarga->update($request->all());
        return $keluarga;
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
