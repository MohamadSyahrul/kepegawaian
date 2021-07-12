<?php

use App\Http\Controllers\API\StaffController;
use App\Http\Controllers\API\StrukturalController;
use App\Http\Controllers\API\UnitController;
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

// data Struktural
Route::get('/data-struktural',[StrukturalController::class, 'index']);
Route::post('/datastruktural',[StrukturalController::class, 'store']);
Route::patch('/data-struktural/{id}',[StrukturalController::class, 'update']);
Route::delete('/data-struktural/{id}',[StrukturalController::class, 'destroy']);

// unit
Route::get('/get-unit',[UnitController::class, 'index']);
Route::post('/create-unit',[UnitController::class, 'store']);
Route::patch('/update-unit/{id}',[UnitController::class, 'update']);
Route::delete('/delete-unit/{id}',[UnitController::class, 'destroy']);

// staf
Route::get('/get-staf',[StaffController::class, 'index']);
Route::post('/create-staf',[StaffController::class, 'store']);
Route::post('/update-staf/{id}',[StaffController::class, 'update']);
Route::delete('/delete-staf/{id}',[StaffController::class, 'destroy']);

