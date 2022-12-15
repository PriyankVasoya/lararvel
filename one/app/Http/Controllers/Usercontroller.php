<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    
    function show(){
        return "Hello How Are You ?";
    }


    // function loadview($name){
    //     return view('about',['name'=>$name]);
    // }

    function loadview1(){
        $data = ['a','b','c'];
        return view('users',['users'=>$data]);
    }
}


