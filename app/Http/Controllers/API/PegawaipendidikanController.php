<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\PegawaipendidikanRequest;
use App\Models\Pegawai_pendidikan;
use App\Models\Pegawai_pendidikan_tingkat;
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
        // $pendidikan = Pegawai_pendidikan::create($request->all());
        // return response()->json([
        //     "message" => "Success",
        //     "data" => $pendidikan,
        // ]);
        $pendidikan = new Pegawai_pendidikan();
        $pendidikan->id_pegawai = $request->id_pegawai;
        $pendidikan->pendidikan = $request->pendidikan;
        $pendidikan->nama_institusi_pendidikan = $request->nama_institusi_pendidikan;
        $pendidikan->tempat = $request->tempat;
        $pendidikan->fakultas = $request->fakultas;
        $pendidikan->jurusan = $request->jurusan;
        $pendidikan->tahun_masuk = $request->tahun_masuk;
        $pendidikan->tahun_lulus = $request->tahun_lulus;
        $pendidikan->ijazah = $request->ijazah;
        $pendidikan->tingkat_pendidikan = $request->tingkat_pendidikan;
        $pendidikan->save();
        

        foreach ($request->pendidikan_tingkat as $key => $value) {
            $tingkat = array(
                'id_pendidikan' => $pendidikan->id,
                'tingkat' => $value['tingkat']
            );
            $tkt = Pegawai_pendidikan_tingkat::create($tingkat);
        }

        return response()->json([
                'message'       => 'success',
                'data' => $tkt
            ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pendidikan = Pegawai_pendidikan::with('tingkat')->where('id', $id)->first();
        return response()->json([
            "message" => "success",
            "data_pendidikan" => $pendidikan
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
    public function update(PegawaipendidikanRequest $request, $id)
    {
        $pendidikan = Pegawai_pendidikan::find($id);
        $pendidikan->update($request->all());
        
        Pegawai_pendidikan_tingkat::where('id_pendidikan', $id)->delete();
        foreach ($request->pendidikan_tingkat as $key => $value) {
            $tingkat = array(
                'id_pendidikan' => $pendidikan->id,
                'tingkat' => $value['tingkat']
            );
            $tkt = Pegawai_pendidikan_tingkat::create($tingkat);
        }
        return response()->json([
            'message'       => 'success',
            'data' => $pendidikan,
            'data_pendidikan_tingkat' => $tkt,
        ], 200);
        // return $pendidikan;

        // $pendidikan = Pegawai_pendidikan::find($id);
        // $pendidikan->update([

            // 'id_pegawai' => $request->id_pegawai;
            // 'pendidikan' => $request->pendidikan;
            // 'nama_institusi_pendidikan' => $request->nama_institusi_pendidikan;
            // 'tempat' => $request->tempat;
            // 'fakultas' => $request->fakultas;
            // 'jurusan' => $request->jurusan;
            // 'tahun_masuk' => $request->tahun_masuk;
            // 'tahun_lulus' => $request->tahun_lulus;
            // 'ijazah' => $request->ijazah;
            // 'tingkat_pendidikan' => $request->tingkat_pendidikan;
        // ]);

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
