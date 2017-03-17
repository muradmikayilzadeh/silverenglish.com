<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

session_start();

// -----------------Web appin sehifeleri
Route::get('/', function () {
    return view('index');
});


Route::get('/courses', function () {
    if(isset($_SESSION['userTrue'])){
    	return view('courses');
    }else{
    	return redirect('/login');
    }
});


Route::get('/course', function () {
    if(isset($_SESSION['userTrue'])){
    	return view('course');
    }else{
    	return redirect('/login');
    }
});



Route::get('/blog', function () {
    if(isset($_SESSION['userTrue'])){
    	return view('post');
    }else{
    	return redirect('/login');
    }
});

Route::get('/bloghome', function () {
    if(isset($_SESSION['userTrue'])){
    	return view('posts');
    }else{
    	return redirect('/login');
    }
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/register', function () {
    return view('register');
});


// Login emeliyyatlari-----------------------

Route::post('login/check','Login_Controller@login');
Route::get('logout','Login_Controller@logout');

// Register emeliyyatlari--------------------
Route::post('register/save','Register_Controller@save');



