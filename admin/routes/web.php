<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TblUserController;
use App\Http\Controllers\Formdatacontroller;


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

Route::get('/signup', function () {
    return view('signup');
});


Route::group(['middleware'=>'web'], function(){
    Route::get('/', function () {
        return view('signin');
    });
Route::post('/login',[TblUserController::class,'loginuser']);
Route::view('dashboard', 'index');

});

Route::post('logout',[TblUserController::class,'logoutdata']);
Route::view('data','data');
Route::view('form','form');
Route::post('formdata',[Formdatacontroller::class,'userdata']);
Route::get('userlist',[Formdatacontroller::class,'listdata']);
Route::get('view/{id}',[Formdatacontroller::class,'viewdata']);
Route::post('view',[Formdatacontroller::class,'editdata']);
Route::get('delete/{id}',[Formdatacontroller::class,'deletedata']);
Route::get('userview/{id}', [Formdatacontroller::class,'userview']);



