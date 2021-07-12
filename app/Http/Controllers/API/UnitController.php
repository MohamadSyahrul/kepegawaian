<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\UnitRequest;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Unit::all();
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
    public function store(UnitRequest $request)
    {
        $unit = new Unit;
        $unit->id_pegawai = $request->id_pegawai;
        $unit->unit = $request->unit;
        $unit->kepala = $request->kepala;
        $unit->save();
        return response()->json(
            [
            "message" => "Success",
            "data" => $unit,
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
    public function update(Request $request, $id)
    {
        $unit = Unit::where('id', $id)->first();
        if($unit){

            $unit->id_pegawai = $request->id_pegawai ? $request->id_pegawai : $unit->id_pegawai;
            $unit->unit = $request->unit ? $request->unit : $unit->unit;
            $unit->kepala = $request->kepala ? $request->kepala : $unit->kepala;

            $unit->save();
            return response()->json(
                [
                "message" => "Update Unit method Success ",
                "data" => $unit
                ]
            );
        }
        return response()->json(
            [
            "message" => "unit with id ".$id ." not found"
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
        $unit = Unit::where('id', $id)->first();
        if($unit){
            $unit->delete();
            return response()->json(
                [
                "message" => "DELETE unit id ".$id ." Success"
                ]
            );
        }
        return response()->json(
            [
            "message" => "unit with id ".$id ." not found"
            ], 400
        );
    }
}
