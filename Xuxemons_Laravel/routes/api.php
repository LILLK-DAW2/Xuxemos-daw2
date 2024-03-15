<?php

use App\Http\Controllers\ChuchesUserController;
use App\Http\Controllers\InventarioXuxemonsController;
use App\Http\Controllers\Log\LogAuth;
use App\Http\Controllers\Log\RegisterAuth;
use App\Http\Controllers\xuxemonsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('cors')->group(function (){
    Route::post('login',[LogAuth::class,'login']);
    Route::post('register',[RegisterAuth::class,'register']);

    Route::get('xuxemonsIndex',[XuxemonsController::class,'index']);
    Route::post('xuxemonsCreate',[XuxemonsController::class,'store']);
    Route::delete('xuxemonsDelete',[XuxemonsController::class,'destroy']);
    Route::post('xuxemonsUpdate',[XuxemonsController::class,'update']);
    Route::post('xuxemonFind',[XuxemonsController::class,'findXuxemon']);

    Route::get('inventarioXuxemonsIndex',[InventarioXuxemonsController::class ,'index']);
    Route::post('inventarioXuxemonsCreate',[InventarioXuxemonsController::class,'store']);
    Route::post('inventarioDebug',[InventarioXuxemonsController::class,'debug']);
    Route::get('xuxemonsUserIndex',[InventarioXuxemonsController::class ,'indexXuxemonsUsu']);

    Route::post('chuchesUserDebug',[ChuchesUserController::class,'debug']);
    Route::get('chuchesUserIndex',[ChuchesUserController::class ,'indexChuchesUsu']);


});
