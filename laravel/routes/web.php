<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UserController;

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
    //  echo $name;
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});


// Route::view("about",'/about');
Route::view('contact','/contact');

Route:: get("user",[UserController::class,'show']);
Route:: get("user/{id}",[UserController::class,'abc']);

Route::get("p/{name}", [UserController::class,'peoples']);


// Route:: get ('/{name}', function($name){
//     return view('about', ['name'=> $name]);
// });

// Route:: view('/users',"users");
Route:: view('s',"setting");

Route::get("/forinner", [UserController::class,'viewLoad']);


// Route:: post ('uf',[UserController::class,'form']);
// Route:: view('login',"userform");

//global middleware
// Route:: view('users',"users"); 
// Route::view('noaccess','noaccess');

// group middleware
// Route::view('contact','contact');
// Route::view('noaccess','noaccess');

// Route::group(['middleware'=> ['protectpage']],function(){
//     Route:: view('users',"users"); 
 
// });

// Route middleware
Route::view('contact','contact')->middleware('protectedpage');
Route::view('users','users')->middleware('protectedpage');
Route::view('noaccess','noaccess');

Route::get("/a", [UserController::class,'index']);

Route::get("/data", [UserController::class,'getData']);

Route::get("/thirdparty", [UserController::class,'index1']); //http cleint 3rd party api


// Route::get('/form', function(){
//     return view('form');
// });

// Route:: view('login',"userform");

//session put pull

Route:: view('profile',"profile");

Route::get('/logout', function () {
//  if(session()->has('username'))
//    {
//     session()->pull('username',null);
//    }
//    return redirect('/login');
})->middleware('protectedpage');

Route::get('/login', function () {
    if(session()->has('username'))
      {
        return redirect('/profile');
      }
      return view('userform');
   });

Route:: post ('data1',[UserController::class,'sessionput']);

// flash session

Route::view('flash','flash');
Route::post('flashdata',[UserController::class,'flashsession']);

//upload file
Route::view('upload','upload');
Route::post('uploaded',[UserController::class,'img']);

//pagination
Route::get('list',[UserController::class,'getList']);

//add data with database
Route::view('getuser','adddata');
Route::post('getuser1',[UserController::class,'adduserdata']);

//delete update data in database 
Route::get('tableuserdata',[UserController::class,'listdata']);
Route::get('delete/{id}',[UserController::class,'deletedata']);
Route::get('edit1/{id}',[UserController::class,'showdata']);
Route::post('edit1',[UserController::class,'updatedata']);


