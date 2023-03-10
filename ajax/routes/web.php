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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('list',[UserController::class,'index']);
Route::post('state',[UserController::class,'fetchState']);
Route::post('city',[UserController::class,'fetchCity']);

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});