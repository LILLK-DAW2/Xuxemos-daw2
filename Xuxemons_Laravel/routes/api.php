<?php

use App\Http\Controllers\Log\LogAuth;
use App\Http\Controllers\Log\RegisterAuth;
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
});
