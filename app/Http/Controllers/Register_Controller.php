<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class Register_Controller extends Controller
{
    public function save(Request $request)
    {


    	$this->validate($request,[
                'name'=>'required',
                'surname'=>'required',
                'email'=>'required',
                'password'=>'required',
                'avatar'=>'required',

                ]);

    	$new=new User();

    	$new->email=$request->email;
    	$new->password=md5($request->password);
    	$new->name=$request->name;
    	$new->surname=$request->surname;

    	if($request->hasFile('avatar')){
            $file=$request->file('avatar');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $file->move('assets/images/avatars',$filename);
            $path='assets/images/avatars/'.$filename;
            $new->avatar=$path;
        }

    	$new->active='1';

    	$new->save();


    }
}
