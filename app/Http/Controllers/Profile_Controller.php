<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\blogs;

class Profile_Controller extends Controller
{
    public function myprofile()
    {
    	$userData=User::find($_SESSION['userTrue']);

    	return view('myprofile',compact('userData'));
    }

    public function saveChanges(Request $request)
    {


    	$this->validate($request,[
                'name'=>'required',
                'surname'=>'required',
                // 'password'=>'required',
                'avatar'=>'required',

                ]);

    	$user=User::find($_SESSION['userTrue']);

    	$user->name=$request->name;
    	$user->surname=$request->surname;
    	// $user->password=md5($request->password);

    	if($request->hasFile('avatar')){

            $ext=$request->file('avatar')->getClientOriginalExtension();

            if($ext=='jpg' || $ext=='png' || $ext=='jpeg' || $ext=='bmp')  {

                $file=$request->file('avatar');
                $filename=time().'.'.$file->getClientOriginalExtension();
                $file->move('assets/images/avatars',$filename);
                $path='assets/images/avatars/'.$filename;
                $user->avatar=$path;

            }
           
        }

        $user->save();
        return back();


    	
    }
}
