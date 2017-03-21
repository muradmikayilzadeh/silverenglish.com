<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Blog;

class IndexPage_Controller extends Controller
{


    public function index()
    {
    	$blogs=Blog::orderBy('created_at','desc')->get();

        return view('index', compact('blogs'));
    }


}
