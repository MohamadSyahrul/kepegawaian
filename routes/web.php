<?php

use App\Http\Controllers\API\KecamatanController;
use App\Http\Controllers\API\KotaController;
use App\Http\Controllers\API\ProvinsiController;
use App\Http\Controllers\TelegramController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Route::get('/updated-activity',[TelegramController::class, 'updatedActivity']);


// Route::get('/',  [TelegramController::class, 'sendMessage']);
// Route::post('/send-message', [TelegramController::class, 'storeMessage']);
// Route::post('/store-photo', [TelegramController::class, 'storePhoto']);

Route::get('/apiProv', [ProvinsiController::class, 'insertApiProv']);
Route::get('/apiKot', [KotaController::class, 'insertApiKot']);
Route::get('/apiKec', [KecamatanController::class, 'insertApiKec']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
