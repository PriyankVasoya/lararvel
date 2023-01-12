<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\formdata;
use App\Models\Tbl_product;

use Illuminate\Support\Facades\Validator;


class Formdatacontroller extends Controller
{
    function userdata(Request $req){

        $rules = array(
            'name' => 'required',
            'email' => 'required|email|unique:formdatas,email',
            'number' => 'required|string|max:10|unique:formdatas,number',
            'dob' => 'required',
            'image'=>'required'

        );
        $validator = Validator::make($req->all(),$rules);
        if($validator->fails()){
            return back()->withErrors($validator->errors())->withInput();

            // return $validator->errors();
            //    return view('form',$validator->errors());
        }else{
            // $imageName = time().'.'.$req->image->getClientOriginalExtension();
            // $req->image->move(public_path('fotoupload'), $imageName);
            
                $image = $req->file('image');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/resources/images');
                $image->move($destinationPath, $name);
                // $this->save();
                // $fileName = null;
              
                //     $file = request()->file('image');
                //     $fileName = time().".". $file->getClientOriginalExtension();
                //     $file->move('images/', $fileName);    

        $data = new formdata;
        $data->name = $req->name;
        $data->email = $req->email;
        $data->number = $req->number;
        $data->dob = $req->dob;
        $data->img =$name;
        $data->save();     
        return redirect('userlist');

        // dd($req);
        }
    }

    // if ($request->hasFile('input_img')) {
    //     $image = $request->file('input_img');
    //     $name = time().'.'.$image->getClientOriginalExtension();
    //     $destinationPath = public_path('/images');
    //     $image->move($destinationPath, $name);
    //     $this->save();

    //     return back()->with('success','Image Upload successfully');
    // }
    function listdata(){
        $data = formdata::all();
        return view('listing',['userdata'=>$data]);
    }

    function viewdata($id){
        $data = formdata::find(base64_decode($id));
        return view('view',['data' => $data]);
    }

    function editdata(Request $req){
        $rules = array(
            'name' => 'required',
            'email' => 'required|email|unique:formdatas,email,' .$req->id,
            'number' => 'required|string|unique:formdatas,number,' .$req->id,
            'dob' => 'required',
            'image'=>'required'

        );
        $validator = Validator::make($req->all(),$rules);
        if($validator->fails()){
            return back()->withErrors($validator->errors())->withInput();

            // return $validator->errors();
            //    return view('form',$validator->errors());
        }else{

        $image = $req->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/resources/images');
        $image->move($destinationPath, $name);

        $data = formdata::find($req->id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->number = $req->number;
        $data->dob = $req->dob;
        $data->img =$name;
        $data->update();
        return redirect('userlist');
        }
    }
     
    function deletedata($id){
        $data = formdata::find(base64_decode($id));
        $data->delete();
        return redirect('userlist');
        
    }

    function userview($id){
         $data = formdata::find(base64_decode($id));
         $product = Tbl_product::where('user_id',(base64_decode($id)))->get(['p_name']);
        return view('userview',['user' => $data ,'product'=>$product] ); 
    }
}
