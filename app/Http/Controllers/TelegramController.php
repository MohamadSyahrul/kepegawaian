<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Telegram as ModelsTelegram;
use App\Models\TelegramModel;
use Illuminate\Http\Request;
use Telegram\Bot\FileUpload\InputFile;
use Telegram\Bot\Laravel\Facades\Telegram;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TelegramController extends Controller
{
    public function updatedActivity()
     {
        // $activity = Telegram::getUpdates();
        // dd($activity);
        $response = Telegram::getUpdates();
        return response()->json([
            "message" => "success",
            "data" => $response
        ]);
        // $index = [];
        // foreach ($response as $index=>$respon){
        //          array_push($index ,[$respon['message']['from']]);
        //     }
        //     foreach ($response as $i=>$respon){
        //             $bot[$i] = $respon['channel_post']['sender_chat']['id'];
        //             $botId[$i] = $respon['message']['from']['id'];
        //         }
        // // $index = [];
        // // $botId = $response[$index]->message->from->id;
        // // $botId = $response[$index]['message']['from']['id'];
        // dd($botId, $bot);
        // $to = collect($botId);
        // $index = 3; 
     }



    //  public function sendMessage()
    //  {
    //      return view('telegramView');
    //  }

     public function storeMessageChannel(Request $request)
     {
         $request->validate([
            //  'channel_id' =>'required',
             'judul' => 'required',
             'pesan' => 'required',
            //  'no_telp' => 'required'
         ]);

        //  $response = Telegram::getUpdates();
        //  cara 1
        //  $index = [];
        //  foreach ($response as $i=>$respon){
        //      array_push($index ,[$respon['message']['from']['id']]);
        //  }
        //  $to = json_encode($index);
        //  $to = $index;
        // cara 2
        // foreach ($response as $i=>$respon){
        //     $botId = $respon['message']['chat']['id'];
        // }
        // dd($botId);
        // dd($botId);
        
        // $to = json_encode($botId);
        
        $text =  "<b>Judul: </b>"."$request->judul\n"
        . "<b>Message: </b>". $request->pesan;
        
         Telegram::sendMessage([
             'chat_id' => '-1001552678944',
             'parse_mode' => 'HTML',
             'text' => $text
         ]);

         return response()->json([
             "message" => "success"
         ]);
     }

     public function storeMessageToUser(Request $request)
     {
         $request->validate([
             'chat_id' =>'required',
             'judul' => 'required',
             'pesan' => 'required',
         ]);
        
        $text =  "<b>Judul: </b>"."$request->judul\n"
        . "<b>Message: </b>". $request->pesan;
        $to = $request->chat_id;
         Telegram::sendMessage([
             'chat_id' => $to,
             'parse_mode' => 'HTML',
             'text' => $text
         ]);

         return response()->json([
             "message" => "success"
         ]);
     }

    //  public function storePhoto(Request $request)
    //  {
    //      $request->validate([
    //          'file' => 'file|mimes:jpeg,png,gif'
    //      ]);

    //      $photo = $request->file('file');

    //      Telegram::sendPhoto([
    //          'chat_id' => '-1001320386121',
    //          'photo' => InputFile::createFromContents(file_get_contents($photo->getRealPath()), str_random(10) . '.' . $photo->getClientOriginalExtension()),
    //          'caption' => 'Photo Image'
    //      ]);

    //      return redirect()->back();
    //  }
    // public function sends(Request $request){

    //     $request->validate([
    //         'notelp_id' => 'required',
    //         'chat' => 'required',
    //     ]);

    //     $send = Telegram::sendMessage([
    //         'notelp_id' => $request->notelp_id,
    //         'chat' => $request->chat
    //     ]);
    //     $kirim = TelegramModel::create($send);

    //     return response()->json([
    //         'message'       => 'success',
    //         'data'       => $kirim,
    //     ], 200);
    // }
}
