<?php

namespace App\Http\Controllers\API;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kota;
use App\Models\Provinsi;

class KotaController extends Controller
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

    public function insertApiKot() {


        $provinsi = Provinsi::all();

        $client = new Client(); //GuzzleHttp\Client

        foreach($provinsi as $prov) {

            $url = 'https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi='.$prov->id;
    
            $response = $client->request('GET', $url, [
                'verify'  => false,
            ]);
    
            $responseBody = json_decode($response->getBody());

    
            foreach($responseBody as $kot) {
                for($no = 0; $no < 600; $no++) {
                    if(isset($kot[$no])) {
                        Kota::insert([
                            'id' => $kot[$no]->id,
                            'nama' => $kot[$no]->nama,
                            'id_provinsi' => $kot[$no]->id_provinsi,
                        ]);
                    }else {
                        continue;
                    }
                }
            }
        }
        dd($responseBody);
    }
}
