<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\StaffRequest;
use App\Models\Staf;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stf = Staf::all();
        return response()->json($stf, 200);
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
    public function store(StaffRequest $request)
    {
        $stf = new Staf;
        $stf->id_pegawai = $request->id_pegawai;
        $stf->staf = $request->staf;
        $stf->save();
        return response()->json(
            [
            "message" => "Success",
            "data" => $stf,
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
    public function update(StaffRequest $request, $id)
    {
        // $stf = Staf::where('id', $id)->first();
        // if($stf){

        //     $stf->id_pegawai = $request->id_pegawai ? $request->id_pegawai : $stf->id_pegawai;
        //     $stf->staf = $request->staf ? $request->staf : $stf->staf;

        //     $stf->save();
        //     return response()->json(
        //         [
        //         "message" => "Update Staf method Success ",
        //         "data" => $stf
        //         ]
        //     );
        // }
        // return response()->json(
        //     [
        //     "message" => "unit with id ".$id ." not found"
        //     ], 400
        // );
        $stf = Staf::find($id);
        $stf->update([
            'id_pegawai' => $request->id_pegawai,
            'staf' => $request->staf,
        ]);
        return response()->json([
            "message" => "Update Staf method Success",
            'data' => $stf
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
        $stf = Staf::where('id', $id)->first();
        if($stf){
            $stf->delete();
            return response()->json(
                [
                "message" => "DELETE Staf id ".$id ." Success"
                ]
            );
        }
        return response()->json(
            [
            "message" => "Staf with id ".$id ." not found"
            ], 400
        );
    }
}
