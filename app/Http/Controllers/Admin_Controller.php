<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Admin;
use App\User;
use App\Blog;
use App\Courses;
use App\Course_video;


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

      $users=User::orderBy('created_at','desc')->get();
      $blogs=Blog::orderBy('created_at','desc')->get();
      $courses=Courses::orderBy('created_at','desc')->get();
   		return view('admin.index',compact('users','blogs','courses'));

   	}


    public function logout()
    {
      session_unset($_SESSION['adminTrue']);
      session_destroy();
      return redirect('silverenglish');
    }


    public function status(Request $request)
    {
      
      $user=User::find($request->id);

      if($user->active=='1'){

        $user->active='0';
        $user->save();

      }else{

        $user->active='1';
        $user->save();

      }

      return back();


    }

    public function showUser($id)
    {
        $user=User::find($id);
        return view('admin.user', compact('user'));
    }

    public function users()
    {
        $users=User::all();
        return view('admin.users', compact('users'));
    }

    public function blogs()
    {
        $blogs=Blog::orderBy('created_at','desc')->get();
        return view('admin.blogs', compact('blogs'));
    }

    public function blogShow($id)
    {
        $blog=Blog::find($id);
        return view('admin.blogshow', compact('blog'));
    }

    public function courseStatus(Request $request)
    {
      
      $course=Courses::find($request->id);

      if($course->active=='1'){

        $course->active='0';
        $course->save();

      }else{

        $course->active='1';
        $course->save();

      }

      return back();


    }


    public function courses()
    {
        $courses=Courses::orderBy('created_at','desc')->get();
        return view('admin.courses', compact('courses'));
    }

    public function courseShow($id)
    {
        $course=Courses::find($id);
        $videos=Course_video::where('course_id',$id)->get();
        return view('admin.courseshow', compact('course','videos'));
    }

    public function blogstatus(Request $request)
    {
      
      $blog=Blog::find($request->id);

      if($blog->active=='1'){

        $blog->active='0';
        $blog->save();

      }else{

        $blog->active='1';
        $blog->save();

      }

      return back();


    }

    public function courseWatchVideo($id)
    {   
        $video=Course_video::find($id);
        return view('video',compact('video'));
    }



}
