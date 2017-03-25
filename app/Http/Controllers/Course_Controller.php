<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Courses;
use App\User_course;
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

}
