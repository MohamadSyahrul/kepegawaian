<?php

namespace App\Http\Controllers\API;

use App\Models\Kota;
use GuzzleHttp\Client;
use App\Models\Kecamatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function insertApiKec() {

        $kota = Kota::all();
        $client = new Client();        
        foreach($kota as $kot) {
            
            $url = "https://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota=".$kot->id;
            
            $response = $client->request('GET', $url, [
                'verify'  => false,
            ]);

            $response = json_decode($response->getBody());
    
            foreach($response as $kec) {
                for($no = 0; $no < 100; $no++) {
                    if(isset($kec[$no])) {
                        Kecamatan::insert([
                            'id' => $kec[$no]->id,
                            'nama' => $kec[$no]->nama,
                            'id_kota' => $kec[$no]->id_kota,
                        ]);
                    }else {
                        continue;
                    }
                }
            }
        }
        dd($response);
    }
}
