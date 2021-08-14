<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use Illuminate\Support\Facades\Http;

use function GuzzleHttp\json_decode;

class MessageController extends Controller
{

    public $key = "cdeb9768d2a0f6a1b87d217b80bcf54424d9af33c6865c33";

    // public function index(){
    //     return view('pages/send-msg/index');
    // }
    // public function getNotlp(){
      // $pegawai = DB::table('pegawais')->select('no_tlp');

      // $number = Pegawai::pluck('no_tlp');
      // $responseBody = json_decode($number);
// dd($responseBody);
    
      // foreach($responseBody as $bot) {
          // for($no = 0; $no < 600; $no++) {
              // if(isset($bot[$no])) {
                  // dd($bot);
              // }else {
              //     continue;
              // }
          // }
      // }

      // // $int = (int)$bot; 
      // $pegawai = Pegawai::pluck('no_tlp');
      // foreach ($pegawai as $i=>$respon){
      //   $bot[$i] = ($respon);
  
      //   }
      //   dd($bot[$i]);
    // }

    public function sendMessage(Request $request){

      $request->validate([
         'no_tlp' => 'required',
         'pesan' => 'required',        
     ]);

    //  $pegawai = Pegawai::pluck('no_tlp');
    //   foreach ($pegawai as $i=>$respon){
    //        $bot = json_encode($respon);
    // }
       

        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
            ])->withOptions([
              'debug' => false,
              'connect_timeout' =>false,
              'timeout' => false,
              'verify' => false,
            ])->post('http://116.203.191.58/api/send_message',[
              'phone_no' => $request->no_tlp,
              'key' => $this->key,
              "message"	=> $request->pesan,
              'skip_link' => true
            ]);
            // dd($response);
      return response()->json(
        [
        "message" => "Success"
        ]
      );
    }


    public function sendWithImg(Request $request){

      $request->validate([
         'no_tlp' => 'required',
         'pesan' => 'required',
         'img' => 'required',
        
     ]);

        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
            ])->withOptions([
              'debug' => false,
              'connect_timeout' =>false,
              'timeout' => false,
              'verify' => false,
            ])->post('http://116.203.191.58/api/send_image_url',[
              'phone_no' => $request->no_tlp,
              'message' => $request->pesan,
              'key' => $this->key,
              "url"		=>$request->img,
            ]);
      return response()->json(
        [
        "message" => "Success",
        "data" => $response,
        ]
    );
  }

//   public function sendBroadcast(Request $request){

//   //   $request->validate([
//   //      'pesan' => 'required',
//   //      'grub' => 'required',
//   //  ]);

//    $pegawai = Pegawai::pluck('no_tlp');
//    $bot = json_decode($pegawai);
//    $pisah = implode(" ",$bot);

//           $response = Http::withHeaders([
//             'Content-Type' => 'application/json'
//             ])->withOptions([
//               'debug' => false,
//               'connect_timeout' =>false,
//               'timeout' => false,
//               'verify' => false,
//             ])->post('http://116.203.191.58/api/check_numberp',[
//               'phone_no' => $pisah,
//               "key"     =>$this->key,
//               // "message"	=> $request->pesan,
//             ]);
//         // return response()->json(
//         // [
//         // "message" => "Success"
//         // ]
//         // );
//         dd($response);
// }
}
