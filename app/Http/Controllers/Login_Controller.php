<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class Login_Controller extends Controller
{
   	
   	public function login(Request $request)
   	{	

   		$this->validate($request,[
                'email'=>'required',
                'password'=>'required',
                ]);

   		$email=$request->email;
   		$password=$request->password;

   		$result=User::where([['email',$email],['password',md5($password)]])->first();


   		if($result!=null){
   			if($result->active!=0){
          $_SESSION['userTrue']=TRUE;
   				return redirect('/');
   			}
   		}else{
   			return back();
   		}

   	}


    public function logout()
    {
      session_unset($_SESSION['userTrue']);
      session_destroy();
      return redirect('/login');
    }

}
