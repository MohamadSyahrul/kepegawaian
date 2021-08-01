<?php

use App\Http\Controllers\API\KecamatanController;
use App\Http\Controllers\API\KotaController;
use App\Http\Controllers\API\ProvinsiController;
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

Route::get('/insertProv', [ProvinsiController::class, 'insertApiProv']);
Route::get('/insertKot', [KotaController::class, 'insertApiKot']);
Route::get('/insertKec', [KecamatanController::class, 'insertApiKec']);


