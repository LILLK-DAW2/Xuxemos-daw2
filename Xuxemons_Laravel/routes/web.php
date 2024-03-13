<?php

use App\Http\Controllers\InventarioXuxemonsController;
use App\Http\Controllers\Log\LogAuth;
use App\Http\Controllers\Log\RegisterAuth;
use App\Http\Controllers\xuxemonsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
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
});


