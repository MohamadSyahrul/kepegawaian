<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MessageController extends Controller
{

    public $key = "cdeb9768d2a0f6a1b87d217b80bcf54424d9af33c6865c33";

    public function index(){
        return view('pages/send-msg/index');
    }

    public function sendMessage(Request $request){
        $message = "Hallo $request->name, ini pesan kamu : $request->message";

        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
            ])->withOptions([
              'debug' => false,
              'connect_timeout' =>false,
              'timeout' => false,
              'verify' => false,
            ])->post('http://116.203.191.58/api/send_message',[
              'phone_no' => $request->no_tlp,
              'message' => $request->message,
              'key' => $this->key,
              'skip_link' => true
            ]);
            // dd($response);
      if ($response->successful()){
        return redirect(url("send-message"));
      }
      return redirect(url("send-message"));

    }
}
