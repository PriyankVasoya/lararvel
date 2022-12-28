<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use Validator;
class UserController extends Controller
{
    //

    function index(){
        $data['countries'] = Country::get(["name", "id"]);
        return view('countrylist', $data);
    }

    function fetchState(Request $req){
        $data['states'] = State::where("country_id",$req->country_id)
                                 ->get(["name","id"]);  
                                //  print_r($data);
                                 return response()->json($data);
    }

    function fetchCity(Request $req){
        $data['cities'] = City::where("state_id",$req->state_id)
                                ->get(["name","id"]);
                                return response()->json($data);
    }

    function getapidata($id=NULL){
        return $id?State::find($id):State::all();
    }

    function postapidata(Request $req){
        $state = new State;
        $state->name=$req->name;
        $state->country_id=$req->country_id;
        $result=$state->save();
        if($result){
            return ['result'=>'done.'];
        }else{
            return ['result'=>'failed.'];
        }
    }

    function putapidata(Request $req){
        $state = State::find($req->id);
        // return $state;
        $state->name=$req->name;
        $result=$state->save();
        if($result){
            return ['result'=>'done.'];
        }else{
            return ['result'=>'failed.'];
        }
    }

    function deleteapidata($id){
        $state= State::find($id);
        $result= $state->delete();
        if($result){
            return ['result'=>'done.'];
        }else{
            return ['result'=>'failed.'];
        }
    }

    function searchapidata($name=NULL){
        return $name?State::where("name","like","%".$name."%")->get():State::all();
    }

    function datavalidate(Request $req){
        // return $req; 
        $rules = array(
            'country_id' => 'required',
            'name' => 'required | max:4'
        );

        $validator = Validator::make($req->all(),$rules);
        if($validator->fails()){
            return $validator->errors();
        }else{
            $var = new State;
            $var->name = $req->name;
            $var->country_id = $req->country_id;
            $result = $var->save();
            if($result){
                return ["result"=>"data saved"];
            }else{
                return ["result"=>"data not saved"];

            }

        }
    }
}

