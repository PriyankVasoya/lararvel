<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;




class UserController extends Controller
{
    function index(){
        // return "hello";
        return view('index');
    }

    function postdata(Request $req){     
        // dd($req->all());
        $rules = array(
            'name' => 'required|unique:users,name',
            'number' => 'required|unique:users,number'
        );

        $validator = Validator::make($req->all(),$rules);
        if($validator->fails()){
            return response()->json([
                'status'=> 400,
                'errors'=>$validator->messages(),
            ]);
        }else{
            $var = new User;
            $var->name = $req->name;
            $var->number = $req->number;
            $var->save();
            return response()->json([
                'status'=> 200,
                'message'=>'Data Saved Successfully',
            ]);
        }
    }

    function listdata(){
        $data = User::all();
        return response()->json([
            'result'=>$data,
        ]);
    }

    function deletedata($id ){
        
        $data = User::find($id);
        $data->delete();
        return response()->json([
            'status'=> 200,
            'message'=>'Data Deleted Successfully',
        ]);
    }

    // function showdata($id){
    //     $data =  User::find($id);
    //     return response()->json([
    //         'data'=> $data,
    //     ]); 
    //  }
    function getUserData(Request $req){
    //    return $req;
        $data =  User::find($req->id);
            return response()->json([
                'data'=> $data,
            ]);
    }
    function editdata(Request $req){
    //    return ($req);
 
        $rules = array(
            'name' => 'required|unique:users,name',
            'number' => 'required|unique:users,number,'.$req->id,
        );

        $validator = Validator::make($req->all(),$rules);
        if($validator->fails()){
            return response()->json([
                'status'=> 400,
                'errors'=>$validator->messages(),
            ]);
        }else{
        $data = User::find($req->id);
        // return $data;
         if($data){
            $data->name=$req->name;
            $data->number = $req->number;
            $data->update();
                return response()->json([
                    'status'=> 200,
                    'message'=>'Data edited Successfully',
                ]);
        }else{
            return response()->json([
                'status'=>404,
                'message'=>'Data not found',
            ]);
        }          
 
        }
    }
}
