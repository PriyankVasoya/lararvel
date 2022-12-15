<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
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

    return view('hello');
});


route::get('user',[Usercontroller::class,'show']);
// route::get('about/{name}',[Usercontroller::class,'loadview']);
route::get('about/',[Usercontroller::class,'loadview1']);


// route :: view('about','/about');
route :: view('contact','/contact');
route :: view('users','/users');

