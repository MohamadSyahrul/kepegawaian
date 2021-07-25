<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\PegawaipendidikanRequest;
use App\Models\Pegawai_pendidikan;
use Illuminate\Http\Request;

class PegawaipendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendidikan = Pegawai_pendidikan::all();
        return response()->json($pendidikan, 200);
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
    public function store(PegawaipendidikanRequest $request)
    {
        $pendidikan = Pegawai_pendidikan::create($request->all());
        return response()->json([
            "message" => "Success",
            "data" => $pendidikan,
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
    public function update(PegawaipendidikanRequest $request, $id)
    {
        $pendidikan = Pegawai_pendidikan::find($id);
        $pendidikan->update($request->all());
        return $pendidikan;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pendidikan = Pegawai_pendidikan::where('id', $id)->first();
        if($pendidikan){
            $pendidikan->delete();
            return response()->json(
                [
                "message" => "DELETE Pegawai Pendidikan id ".$id ." Success"
                ]
            );
        }
        return response()->json(
            [
            "message" => "Pegawai Pendidikan with id ".$id ." not found"
            ], 400
        ); 
    }
}
