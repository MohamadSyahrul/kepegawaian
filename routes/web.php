<?php

use App\Http\Controllers\API\KecamatanController;
use App\Http\Controllers\API\KotaController;
use App\Http\Controllers\API\ProvinsiController;
use App\Http\Controllers\Api\MessageController;
use App\Http\Controllers\TelegramController;
use Illuminate\Support\Facades\Route;

use Telegram\Bot\Api;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('/kirim-pesan', function () {
//     $telegram = new API(env("TELEGRAM_BOT_TOKEN"));
//     // dd($telegram);
//     $response = $telegram->sendMessage([
//         'chat_id' => env("TELEGRAM_CHAT_ID_SAMPLE"),
//         'text' => 'Hello Word'
//     ]);
//         $messageID = $response->getMessageId();
//         dd($messageID);
//     // return response()->json([
//     //     'data'=>$messageID
//     // ],200);
// });

// Route::get('/updated-activity',[TelegramController::class, 'updatedActivity']);


// Route::get('/',  [TelegramController::class, 'sendMessage']);
// Route::post('/send-message', [TelegramController::class, 'storeMessage']);
// Route::post('/store-photo', [TelegramController::class, 'storePhoto']);

// Route::get('/apiProv', [ProvinsiController::class, 'insertApiProv']);
// Route::get('/apiKot', [KotaController::class, 'insertApiKot']);
// Route::get('/apiKec', [KecamatanController::class, 'insertApiKec']);

// Route::get('/get-no-tlp', [MessageController::class, 'getNotlp']);

// Route::get('/send-message', [MessageController::class, 'index']);
// Route::post('/sendMsg', [MessageController::class, 'sendMessage'])->name('SendMsg');

// Route::get('/loginApiDocumentation', function () {
//     return view('dashboard');
// })->name('loginApiDocumentation');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.dashboard');
    })->name('dashboard');
    // telegram
    
    Route::get('/documentation-checkUser', function () {
        return view('pages.telegram.check');
    })->name('documentationCheck');
    
    Route::get('/documentation-sendToUser', function () {
        return view('pages.telegram.sendTouser');
    })->name('documentationsendToUser');
    
    Route::get('/documentation-sendChannel', function () {
        return view('pages.telegram.sendChannel');
    })->name('documentationChannel');
    
    
    
    Route::get('/documentation-login', function () {
        return view('pages.loginDocumentation');
    })->name('documentationlogin');
    
    Route::get('/documentation-register', function () {
        return view('pages.registerDocumentation');
    })->name('documentationregister');
    
    
    // api pegawai
    Route::get('/documentation-pegawaiList', function () {
        return view('pages.pegawai.list');
    })->name('documentationpegawaiList');
    
    Route::get('/documentation-pegawaiShow', function () {
        return view('pages.pegawai.detail');
    })->name('documentationpegawaiShow');
    
    
    Route::get('/documentation-pegawaiUpdate', function () {
        return view('pages.pegawai.update');
    })->name('documentationpegawaiUpdate');
    
    Route::get('/documentation-pegawaiDelete', function () {
        return view('pages.pegawai.delete');
    })->name('documentationpegawaiDelete');
    
    // api unit
    Route::get('/documentation-unitList', function () {
        return view('pages.unit.list');
    })->name('documentationunitList');
    
    Route::get('/documentation-unitCreate', function () {
        return view('pages.unit.create');
    })->name('documentationunitCreate');
    
    Route::get('/documentation-unitUpdate', function () {
        return view('pages.unit.update');
    })->name('documentationunitUpdate');
    
    Route::get('/documentation-unitDelete', function () {
        return view('pages.unit.delete');
    })->name('documentationunitDelete');
    
    // api struktural
    Route::get('/documentation-data-strukturalList', function () {
        return view('pages.datastruktural.list');
    })->name('documentationdata-strukturalList');
    
    Route::get('/documentation-data-strukturalCreate', function () {
        return view('pages.datastruktural.tambahdata');
    })->name('documentationdata-strukturalCreate');
    
    Route::get('/documentation-data-strukturalUpdate', function () {
        return view('pages.datastruktural.update');
    })->name('documentationdata-strukturalUpdate');
    
    Route::get('/documentation-data-strukturalDelete', function () {
        return view('pages.datastruktural.delete');
    })->name('documentationdata-strukturalDelete');
    
    // api staf
    Route::get('/documentation-stafList', function () {
        return view('pages.staf.list');
    })->name('documentationstafList');
    
    Route::get('/documentation-stafCreate', function () {
        return view('pages.staf.create');
    })->name('documentationstafCreate');
    
    Route::get('/documentation-stafUpdate', function () {
        return view('pages.staf.update');
    })->name('documentationstafUpdate');
    
    Route::get('/documentation-stafDelete', function () {
        return view('pages.staf.delete');
    })->name('documentationstafDelete');
    
    // api data pns
    Route::get('/documentation-data-pnsList', function () {
        return view('pages.pns.list');
    })->name('documentationdata-pnsList');
    
    Route::get('/documentation-data-pnsCreate', function () {
        return view('pages.pns.create');
    })->name('documentationdata-pnsCreate');
    
    Route::get('/documentation-data-pnsUpdate', function () {
        return view('pages.pns.update');
    })->name('documentationdata-pnsUpdate');
    
    Route::get('/documentation-data-pnsDelete', function () {
        return view('pages.pns.delete');
    })->name('documentationdata-pnsDelete');
    
    // api pegawai tidak masuk kerja
    Route::get('/documentation-pegawai-tidak-masuk-kerjaList', function () {
        return view('pages.tidak_masuk_kerja.list');
    })->name('documentationpegawai-tidak-masuk-kerjaList');
    
    Route::get('/documentation-pegawai-tidak-masuk-kerjaCreate', function () {
        return view('pages.tidak_masuk_kerja.create');
    })->name('documentationpegawai-tidak-masuk-kerjaCreate');
    
    Route::get('/documentation-pegawai-tidak-masuk-kerjaUpdate', function () {
        return view('pages.tidak_masuk_kerja.update');
    })->name('documentationpegawai-tidak-masuk-kerjaUpdate');
    
    Route::get('/documentation-pegawai-tidak-masuk-kerjaDelete', function () {
        return view('pages.tidak_masuk_kerja.delete');
    })->name('documentationpegawai-tidak-masuk-kerjaDelete');
    
    // api pegawai riwayat pekerjaan
    Route::get('/documentation-pegawai-riwayat-pekerjaanList', function () {
        return view('pages.pegawai_riwayat_pekerjaan.list');
    })->name('documentationpegawai-riwayat-pekerjaanList');
    
    Route::get('/documentation-pegawai-riwayat-pekerjaanCreate', function () {
        return view('pages.pegawai_riwayat_pekerjaan.create');
    })->name('documentationpegawai-riwayat-pekerjaanCreate');
    
    Route::get('/documentation-pegawai-riwayat-pekerjaanUpdate', function () {
        return view('pages.pegawai_riwayat_pekerjaan.update');
    })->name('documentationpegawai-riwayat-pekerjaanUpdate');
    
    Route::get('/documentation-pegawai-riwayat-pekerjaanDelete', function () {
        return view('pages.pegawai_riwayat_pekerjaan.delete');
    })->name('documentationpegawai-riwayat-pekerjaanDelete');
    
    // api pegawai ttd cuti
    Route::get('/documentation-pegawai-ttd-cutiList', function () {
        return view('pages.pegawai_ttd_cuti.list');
    })->name('documentationpegawai-ttd-cutiList');
    
    Route::get('/documentation-pegawai-ttd-cutiCreate', function () {
        return view('pages.pegawai_ttd_cuti.create');
    })->name('documentationpegawai-ttd-cutiCreate');
    
    Route::get('/documentation-pegawai-ttd-cutiUpdate', function () {
        return view('pages.pegawai_ttd_cuti.update');
    })->name('documentationpegawai-ttd-cutiUpdate');
    
    Route::get('/documentation-pegawai-ttd-cutiDelete', function () {
        return view('pages.pegawai_ttd_cuti.delete');
    })->name('documentationpegawai-ttd-cutiDelete');
    
    // api keluarga pegawai
    Route::get('/documentation-keluarga-pegawaiList', function () {
        return view('pages.keluarga_pegawai.list');
    })->name('documentationkeluarga-pegawaiList');
    
    Route::get('/documentation-keluarga-pegawaiCreate', function () {
        return view('pages.keluarga_pegawai.create');
    })->name('documentationkeluarga-pegawaiCreate');
    
    Route::get('/documentation-keluarga-pegawaiUpdate', function () {
        return view('pages.keluarga_pegawai.update');
    })->name('documentationkeluarga-pegawaiUpdate');
    
    Route::get('/documentation-keluarga-pegawaiDelete', function () {
        return view('pages.keluarga_pegawai.delete');
    })->name('documentationkeluarga-pegawaiDelete');
    
    // api pendidikan
    Route::get('/documentation-pegawai-pendidikanList', function () {
        return view('pages.pendidikan.list');
    })->name('documentationpegawai-pendidikanList');
    
    Route::get('/documentation-pegawai-pendidikanCreate', function () {
        return view('pages.pendidikan.create');
    })->name('documentationpegawai-pendidikanCreate');
    
    Route::get('/documentation-pegawai-pendidikanUpdate', function () {
        return view('pages.pendidikan.update');
    })->name('documentationpegawai-pendidikanUpdate');
    
    Route::get('/documentation-pegawai-pendidikanDelete', function () {
        return view('pages.pendidikan.delete');
    })->name('documentationpegawai-pendidikanDelete');
    
    // status
    Route::get('/documentation-Status', function () {
        return view('pages.status.list');
    })->name('documentationStatus');
    
    Route::get('/documentation-StatusCreate', function () {
        return view('pages.status.create');
    })->name('documentationStatusCreate');
    
    Route::get('/documentation-StatusUpdate', function () {
        return view('pages.status.update');
    })->name('documentationStatusUpdate');
    
    Route::get('/documentation-StatusDelete', function () {
        return view('pages.status.delete');
    })->name('documentationStatusDelete');
    
    // pelatihan
    Route::get('/documentationPelatihan', function () {
        return view('pages.pelatihan.list');
    })->name('documentationPelatihanList');
    
    Route::get('/documentationCreate', function () {
        return view('pages.pelatihan.create');
    })->name('documentationCreateCreate');
    
    Route::get('/documentationPelatihanUpdate', function () {
        return view('pages.pelatihan.update');
    })->name('documentationPelatihanUpdate');
    
    Route::get('/documentationPelatihanDelete', function () {
        return view('pages.pelatihan.delete');
    })->name('documentationPelatihanDelete');
    
    // suami istri
    Route::get('/documentationSuamiIstri-list', function () {
        return view('pages.suami_istri.list');
    })->name('documentationSuamiIstri-list');
    
    Route::get('/documentationSuamiIstri-create', function () {
        return view('pages.suami_istri.create');
    })->name('documentationSuamiIstri-create');
    
    
    Route::get('/documentationSuamiIstri-update', function () {
        return view('pages.suami_istri.update');
    })->name('documentationSuamiIstri-update');
    
    
    Route::get('/documentationSuamiIstri-delete', function () {
        return view('pages.suami_istri.delete');
    })->name('documentationSuamiIstri-delete');
    
    // whatsaap
    Route::get('/documentationWhatsaap-send-message', function () {
        return view('pages.whatsaap.sendUser');
    })->name('documentationWhatsaap-send-message');
    
    Route::get('/documentationWhatsaap-send-image', function () {
        return view('pages.whatsaap.sendimg');
    })->name('documentationWhatsaap-send-image');
    
});


require __DIR__.'/auth.php';
