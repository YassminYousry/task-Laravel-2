<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class userController extends Controller
{

    public function create(){  
        return view('register');
    }

    public function store(Request $request){
    $data = $this->validate($request , [

       "name"        => "required|string",
       "email"       => "required|email", 
       "password"    => "required|min:6",
       "address"       => "required",
       "gender"       => "required",
       "linkedIn"       => "required|url",
       "image"       => "required",   //|image
       ]);

       
    //    $image = time().'.'.$request->image->extension();  
    //    $request->image->storeAs('image', $image);

      $data['password'] = bcrypt($data['password']);
      $op = student::create($data);

      if($op){
        $message = 'Raw Inserted';
      }else{
        $message = 'Error';
      }

      session()->flash('Message',$message);

      return redirect(url('/student'));
  }   


  public function index(){

    $data = student::orderBy('id','desc')->get();
    return view('index',["raw" => $data ]);
      //  session()->put('Message','List Data');
 }

  
  public function edit($id){
      //$data = student::where('id',$id)->get();

      $data = student::find($id);

     return view('edit',['data' => $data]);
  }


  public function update(Requset $request){

    $data = $this->validate($request,[
        "name"        => "required|string",
        "email"       => "required|email", 
        "password"    => "required|min:6",
        "address"     => "required",
        "gender"      => "required",
        "linkedIn"    => "required|url",
        "image"       => "required",   //|image
    ]);

    $op = student::where('id',$request->id)->update($data);
    
    if($op){
        $message ="Raw Updated";
    }else{
        $message = "Error Try Again";
    }

    session()->flash('Message',$message);
    return redirect(url('/student'));
  }


public function delete($id){
 
    $op = student::where('id',$id)->delete();
    if($op){
        $message = "Raw Removed";
    }else{
        $message = "Error";
    }
    session()->flash('Message',$message);
    return redirect(url('/student'));

}
 
}
