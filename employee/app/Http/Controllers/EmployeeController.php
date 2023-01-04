<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    function form(){
        return view('employeedata');
    }

    function adddata(Request $req){
     
        $rules = array(
            'name' => 'required|unique:employees,name',
            'email' => 'required|unique:employees,email',
            'date' => 'required',
            'exp_lang' => 'required',
            'salary' => 'required',
        );

        $validator = Validator::make($req->all(),$rules);
        if($validator->fails()){
            return response()->json([
                'status'=> 400,
                'errors'=>$validator->messages(),    
            ]);
        }else{
            $data = new Employee;
            $data->name = $req->name;
            $data->email = $req->email;
            $data->date_of_birth = $req->date;
            $data->exper_lang = $req->exp_lang;
            $data->salary = $req->salary;
            $data->save();
            $req->session()->flash('success',$data->name);

            return response()->json([
                     'status'=>200,
                     'message'=>'Data Saved Successfully',
                     'data' => $data
            ]);
    
        }    
    }

    function listdata(){
        $data = employee::orderBy('id', 'DESC')->get();
        // return $data;
        return response()->json([
            'result'=>$data,
        ]);
    }

    function deletedata($id){
        $data = employee::find($id);
        $data->delete();
        return response()->json([
            'status' =>200,
            'message' => 'data deleted successfully'
        ]);
    }

    function getUserData(Request $req){
        //    return $req;
            $data =  employee::find($req->id);
            // return $data;
                return response()->json([
                    'data'=> $data,
                ]);
        }

    function updateData(Request $req){
        $rules = array(
            'name' => 'required|unique:employees,name',
            'email' => 'required|unique:employees,email',
            'date' => 'required',
            'exp_lang' => 'required',
            'salary' => 'required',
        );

        $validator = Validator::make($req->all(),$rules);
        if($validator->fails()){
            return response()->json([
                'status'=> 400,
                'errors'=>$validator->messages(),    
            ]);
        }else{
            $data = Employee::find($req->id);
            // return $data;
            if($data){

                $data->name = $req->name;
                $data->email = $req->email;
                $data->date_of_birth = $req->date;
                $data->exper_lang = $req->exp_lang;
                $data->salary = $req->salary;
                $data->update();
                $req->session()->flash('update',$data->name);

                // $req->session()->flash('success',$data->name);
    
                return response()->json([
                         'status'=>200,
                         'message'=>'Data Saved Successfully',
                         'data' => $data
                ]);
            }else{
                return response()->json([
                    'status' =>404,
                    'message'=>'Data not found',
                ]);

            }
    
        }    
    }
}
