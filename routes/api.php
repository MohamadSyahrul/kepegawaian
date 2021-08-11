<?php

use App\Http\Controllers\API\Auth\AuthController;
use App\Http\Controllers\API\DatapnsController;
use App\Http\Controllers\API\DatastrukturalController;
use App\Http\Controllers\API\KeluargapegawaiController;
use App\Http\Controllers\API\PegawaiController;
use App\Http\Controllers\API\PegawaipelatihanController;
use App\Http\Controllers\API\PegawaipendidikanController;
use App\Http\Controllers\API\PegawairiwayatpekerjaanController;
use App\Http\Controllers\API\PegawaistatusController;
use App\Http\Controllers\API\PegawaisuamiistriController;
use App\Http\Controllers\API\PegawaitidakmasukkerjaController;
use App\Http\Controllers\API\PegawaittdcutiController;
use App\Http\Controllers\API\StaffController;
use App\Http\Controllers\API\StrukturalController;
use App\Http\Controllers\API\UnitController;
use App\Http\Controllers\TelegramController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register',[AuthController::class, 'register']);
Route::post('login',[AuthController::class, 'login']);
Route::post('logout',[AuthController::class, 'logout']);

// Route::post('send',[TelegramController::class, 'send']);
Route::get('/checkUserBot', [TelegramController::class, 'updatedActivity']);
Route::post('/send-messageToUser', [TelegramController::class, 'storeMessageToUser']);
Route::post('/send-messageChannel', [TelegramController::class, 'storeMessageChannel']);


Route::group(['prefix' => 'kepegawaian'], function () {
    Route::group(['middleware' => 'auth:api'], function () {
        // data Struktural
        Route::resource('/data-struktural',StrukturalController::class);

        // unit
        Route::resource('/unit',UnitController::class);

        // staf
        Route::resource('/staf', StaffController::class);

        // data pns
        Route::resource('data-pns', DatapnsController::class);

        // pegawai tidak Masuk Kerja
        Route::resource('pegawai-tidak-masuk-kerja', PegawaitidakmasukkerjaController::class);

        // Pegawai riwayat pekerjaan
        Route::resource('pegawai-riwayat-pekerjaan', PegawairiwayatpekerjaanController::class);

        // Data Struktural
        // Route::resource('data-struktural', DatastrukturalController::class);
        // pegawai Status
        Route::resource('pegawai-status', PegawaistatusController::class);
        // pegawai pelatihan
        Route::resource('pegawai-pelatihan', PegawaipelatihanController::class);
        // pegawai pendidikan
        Route::resource('pegawai-pendidikan', PegawaipendidikanController::class);
        // keluarga pegawai
        Route::resource('keluarga-pegawai', KeluargapegawaiController::class);
        // pegawai suami istri
        Route::resource('pegawai-suamiIstri', PegawaisuamiistriController::class);
        // pegawai ttd cuti
        Route::resource('pegawai-ttd-cuti', PegawaittdcutiController::class);
        // pegawai
        Route::resource('pegawai', PegawaiController::class);
    });
});