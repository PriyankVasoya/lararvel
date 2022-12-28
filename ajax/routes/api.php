<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('getapi/{id?}',[UserController::class,'getapidata']);

Route::post('postapi',[UserController::class,'postapidata']);

Route::put('putapi',[UserController::class,'putapidata']);

Route::delete('deleteapi/{id}',[UserController::class,'deleteapidata']);

Route::get('search/{name?}',[UserController::class,'searchapidata']);

Route::post('validate',[UserController::class,'datavalidate']);





