<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Courses;
use App\User_course;
use App\Course_video;
use App\User;
use App\Tag;

class Course_Controller extends Controller
{
    
    public function index()
    {
    	
    	$courses=Courses::all();

    	return view('courses',compact('courses'));

    }

    public function newCourse(Request $request)
    {
    	
    	$this->validate($request,[
           'name'=>'required',
           'description'=>'required',
           'skill'=>'required',
           'language'=>'required',
           'img'=>'required',
           'price'=>'required',

        ]);

    	$new=new Courses;

    	$new->name=$request->name;
    	$new->description=$request->description;
    	$new->instructor=$_SESSION['userTrue'];
    	$new->skill=$request->skill;
    	$new->language=$request->language;

    	if($request->hasFile('img')){

            $ext=$request->file('img')->getClientOriginalExtension();

            if($ext=='jpg' || $ext=='png' || $ext=='jpeg' || $ext=='bmp')  {

                $file=$request->file('img');
                $filename=time().'.'.$file->getClientOriginalExtension();
                $file->move('assets/images/courses/',$filename);
                $path='assets/images/courses/'.$filename;
                $new->img=$path;

            }
           
        }

        $new->price=$request->price;

        $new->certificate=$request->certificate;

        $new->active='0';

        $new->save();

        mkdir('assets/videos/'.$new->id,0777,true);

        return back()->with('course','Kursunuz qeydə alındı! Müəyyən yoxlamadan sonra kursunuz əlavə ediləcək!');

    }

    public function course($id)
    {
    	$course=Courses::find($id);

        $students=User_course::where('course_id',$id)->get();

        $ins=User::find($course->instructor);

        $tags=Tag::all();

        if($course->active!='1'){
            return view('course',compact('course','students','ins','tags'));
        }else{
            return back();
        }
    }


    public function start($id)
    {

       $course=User_course::where([['course_id',$id],['user_id',$_SESSION['userTrue']]])->first();

       if(is_null($course)){

            $new=new User_course;

            $new->course_id=$id;
            $new->user_id=$_SESSION['userTrue'];
            $new->save();

            return back();

       }else{
            return back();
       }
    }

    // Course Settings islemleri
    public function courseSet($id)
    {
        $course=Courses::find($id);

        $students=User_course::where('course_id',$id)->get();

        $ins=User::find($course->instructor);

        $tags=Tag::all();

        if($course->active!='1'){
            return view('coursesettings',compact('course','students','ins','tags'));
        }else{
            return back();
        }
    }


    // Update description

    public function courseUpdateDesc(Request $request,$id)
    {
        $course=Courses::find($id);

        $course->description=$request->description;

        $course->save();

        return back();
    }

    // Update name

    public function courseUpdateName(Request $request,$id)
    {
        $course=Courses::find($id);

        $course->name=$request->name;

        $course->save();

        return back();
    }

     // Update Price

    public function courseUpdatePrice(Request $request,$id)
    {
        $course=Courses::find($id);

        $course->price=$request->price;

        $course->save();

        return back();
    }

    // Update Picture

    public function courseUpdatePic(Request $request,$id)
    {
        $course=Courses::find($id);

        if($request->hasFile('img')){

            $ext=$request->file('img')->getClientOriginalExtension();

            if($ext=='jpg' || $ext=='png' || $ext=='jpeg' || $ext=='bmp')  {

                $file=$request->file('img');
                $filename=time().'.'.$file->getClientOriginalExtension();
                $file->move('assets/images/courses/',$filename);
                $path='assets/images/courses/'.$filename;
                $course->img=$path;

            }
           
        }

        $course->save();

        return back();
    }


    // Upload Video

    public function courseAddVideo(Request $request, $id)
    {
        
        $new=new Course_video;

        $new->course_id=$id;

        if($request->hasFile('video')){

            $ext=$request->file('video')->getClientOriginalExtension();

            if($ext=='mp4')  {

                $file=$request->file('video');
                $filename=time().'.'.$file->getClientOriginalExtension();
                $file->move('assets/videos/'.$id,$filename);
                $path='assets/videos/'.$id.'/'.$filename;
                $new->src=$path;

            }
           
        }

        $new->save();

        return back();

    }

}
