<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Blog;
use App\Tag;
use App\Comments;
class Blog_Controller extends Controller
{

    public function index()
    {
        $blogs=Blog::orderBy('created_at','desc')->get();

        return view('posts', compact('blogs'));
    }


    public function show($id)
    {
        $blog=Blog::find($id);
        $user=User::find($blog->user_id);
        $tag=Tag::find($blog->tag);
        $comments=Comments::where('post_id',$id)->get();
        return view('post',compact('blog','user','tag','comments'));
    }

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
                $file->move('assets/images/news/postImgs/',$filename);
                $path='assets/images/news/postImgs/'.$filename;
                $new->img=$path;

            }
           
        }

        $new->active='1';
        $new->tag=$request->tag;
        $new->save();
        return back()->with('newBlog','Məqaləniz dərc olundu!');

    }

    public function delete($id)
    {
        $blog=Blog::find($id);

        $blog->active='0';

        $blog->save();
        return back();
        
    }

}
