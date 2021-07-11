<?php

use App\Http\Controllers\API\StrukturalController;
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

Route::get('/data-struktural',[StrukturalController::class, 'index']);
Route::post('/datastruktural',[StrukturalController::class, 'store']);
Route::patch('/data-struktural/{id}',[StrukturalController::class, 'update']);
Route::delete('/data-struktural/{id}',[StrukturalController::class, 'destroy']);
