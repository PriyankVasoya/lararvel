<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tbl_user;

class TblUserController extends Controller
{
    function loginuser(Request $req){

// return $req->all();
        $email=$req->input('email');
        $password=$req->input('password');
        $data = TBl_user::where(['email'=>$email,'password'=>$password])->get();
        if(count($data)>0){
            $req->session()->put('user', $data);
            
            // return  $req;
            return redirect('dashboard');
        }else{
           $req->session()->put('loginError', 'Your email or password may be wrong! Please try again.');
            return redirect('/');

        }

    }

        function logoutdata(Request $req){
            //  $req->session()->flush('user');
            //  Session::forget('key');
            //  return 'dfg';
            //  return redirect('/');
            $req->session()->flush();

        //     if($req-session()->has('user')){
        //         $req->session()->forget('user');
        //   return 'gfhfgh';
        //         }
            }

}
