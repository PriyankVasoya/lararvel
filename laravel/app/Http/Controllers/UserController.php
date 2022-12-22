<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tbl_user;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    //
    function show(){
        return view('about');
    }

    function abc($id){
        return $id;
    }

    function peoples($name){
        return view('people',['name'=>$name]);
    }

    function viewLoad(){
        $data = ['a','b','c'];
        return view('forinner',['abc'=>$data]);
    }

    function form(Request $req){

        $req->validate([
            'username'=>'required|max:8',
            'password'=>'required|max:8x`'
         ]);
        return $req->input();
    }

    function index(){
       
        return DB::select("select * from tbl_user") ; //direct db
    }
 
    // function getData(){
    //     return Tbl_user::all(); //model db
    // }

//http cleint 3rd party api

    function index1(){
        $data = Http::get('https://reqres.in/api/users?page=1'); //http client
        return view('tabledata',['tabledata'=>$data['data']]);
    }

//session put pull

    function sessionput(Request $req){
        $data = $req->input('username');
        // return $req->input();

        $req->session()->put('username',$data);
        // echo session('username');
        return redirect('profile');
    }

// flash session

    function flashsession(Request $req){
        $data = $req->input('email');
        $req->session()->flash('email',$data);
        return redirect('flash');
    }

//upload file

    function img(Request $req){
        return $req->file('file')->store('img is here:');      
    }

    //pagination
    function getList(){
        $data= TBl_user::paginate(2);
        return view('getlist',['userdata'=>$data]);
    }

    //add data with database
    function adduserdata(Request $req){
        $Tbl_user= new Tbl_user;
        $Tbl_user-> name=$req->name;
        $Tbl_user-> email=$req->email;
        $Tbl_user-> age=$req->age;
        $Tbl_user-> save();
        return redirect('tableuserdata');
    }

   //delete update data in database 
    function listdata(){
        $data = Tbl_user::all();
        return view('tableuser',['alldata'=>$data]);
    }

    function deletedata($id){
        $data =  Tbl_user::find($id);
        $data->delete();
        // listdata();
        // $data = Tbl_user::all();
        return redirect('tableuserdata');
    }

    function showdata($id){
       $data =  Tbl_user::find($id);
       return view('edit',['data'=>$data]);

    }

    function updatedata(Request $req){
        $data=  Tbl_user::find($req->id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->age = $req->age;
        $data->save();
        return redirect('tableuserdata');
    }
}

