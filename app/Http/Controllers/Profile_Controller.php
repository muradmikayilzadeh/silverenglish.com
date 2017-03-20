<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Blog;
use App\Tag;
class Profile_Controller extends Controller
{
    public function myprofile()
    {
    	$userData=User::find($_SESSION['userTrue']);

        $blogs=Blog::where('user_id',$_SESSION['userTrue'])->orderBy('created_at','desc')->get();

        $tags=Tag::all();

    	return view('myprofile',compact('userData','blogs','tags'));
    }



    public function saveChanges(Request $request)
    {
    	$this->validate($request,[
                'name'=>'required',
                'surname'=>'required',
                ]);

    	$user=User::find($_SESSION['userTrue']);

    	$user->name=$request->name;
    	$user->surname=$request->surname;

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
        return back()->with('success','Məlumatlarınız yeniləndi!');
    	
    }



    public function password(Request $request)
    {
    	$this->validate($request,[
                'password'=>'required',
                'confirm'=>'required',
                ]);

    	if($request->password==$request->confirm){
    		
    		$user=User::find($_SESSION['userTrue']);

    		$user->password=md5($request->password);

    		$user->save();

    	}

    	return back()->with('newPassword','Şifrəniz yeniləndi!');
    }

    
}
