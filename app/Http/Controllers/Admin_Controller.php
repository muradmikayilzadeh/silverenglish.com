<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Admin;

class Admin_Controller extends Controller
{
    public function login()
    {
    	return view('admin.login');
    }

    public function checkLogin(Request $request)
    {
    	
    	$this->validate($request,[
        	'email'=>'required',
        	'password'=>'required',
        ]);

    	$email=$request->email;
   		$password=$request->password;

   		$result=Admin::where([['email',$email],['password',md5($password)]])->first();


   		if($result!=null){

   			$_SESSION['adminTrue']=$result->id;
   			return redirect('/adminpanel');

   		}else{

   			return back();

   		}

   	}




   	public function index()
   	{
   		return view('admin.index');
   	}


}
