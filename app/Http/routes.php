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


// -----------------Web appin sehifeleri
Route::get('/', function () {
    return view('index');
});


Route::get('/courses', function () {
    return view('courses');
});


Route::get('/course', function () {
    return view('course');
});



Route::get('/post', function () {
    return view('post');
});

Route::get('/posts', function () {
    return view('posts');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/register', function () {
    return view('register');
});


// Login emeliyyatlari-----------------------

Route::post('login/check','Login_Controller@login');

// Register emeliyyatlari--------------------
Route::post('register/save','Register_Controller@save');

