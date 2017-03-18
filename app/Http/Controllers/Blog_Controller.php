<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Blog;
use App\Tag;
class Blog_Controller extends Controller
{
    public function newBlog(Request $request)
    {
    	$this->validate($request,[
           'title'=>'required',
           'content'=>'required',
           'photo'=>'required',
        ]);

    	$new=new Blog;

    	$new->title=$request->title;
    	$new->content=$request->content;
    	$new->user_id=$_SESSION['userTrue'];

    	if($request->hasFile('photo')){

            $ext=$request->file('photo')->getClientOriginalExtension();

            if($ext=='jpg' || $ext=='png' || $ext=='jpeg' || $ext=='bmp')  {

                $file=$request->file('photo');
                $filename=time().'.'.$file->getClientOriginalExtension();
                $file->move('assets/images/news/postImgs',$filename);
                $path='assets/images/news/postImgs'.$filename;
                $new->img=$path;

            }
           
        }

        $new->active='1';
        $new->tag=$request->tag;
        $new->save();
        return back();

    }
}
