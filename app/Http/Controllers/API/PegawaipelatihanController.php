<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\PegawaipelatihanRequest;
use App\Models\Pegawai_pelatihan;
use Illuminate\Http\Request;

class PegawaipelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelatihan = Pegawai_pelatihan::all();
        return response()->json($pelatihan, 200);
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
    public function store(PegawaipelatihanRequest $request)
    {
        $pelatihan = Pegawai_pelatihan::create($request->all());
        // dd($pelatihan);
        return response()->json([
            "message" => "Success",
            "data" => $pelatihan,
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
    public function update(PegawaipelatihanRequest $request, $id)
    {
        $pelatihan = Pegawai_pelatihan::find($id);
        $pelatihan->update($request->all());
        return $pelatihan;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pegawai_pelatihan::destroy($id);
        return response()->json([
            "message" => "Success",
            "data" => $data,
        ]);
    }
}
