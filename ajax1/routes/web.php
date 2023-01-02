<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('index',[UserController::class, 'index']);
Route::post('index1',[UserController::class, 'postdata'])->name('index1');
Route::get('list',[UserController::class, 'listdata']);
Route::post('delete/{id}',[UserController::class, 'deletedata']);
Route::post('show',[UserController::class, 'getUserData']);
Route::post('edit',[UserController::class, 'editdata']);




