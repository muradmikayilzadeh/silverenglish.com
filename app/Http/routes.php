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
Route::get('/','IndexPage_Controller@index');




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


if(isset($_SESSION['userTrue'])){

    // myprofile-------------------------
    Route::get('/myprofile', 'Profile_Controller@myprofile');


    // MyProfilede tenzimlemeler

    Route::post('/myprofile/save', 'Profile_Controller@saveChanges');
    Route::post('/myprofile/changepassword', 'Profile_Controller@password');


    // Meqale Derc etmek
    Route::post('/blog/save', 'Blog_Controller@newBlog');





    // Bloghome----------------------------
    Route::get('/bloghome','Blog_Controller@index');

    // Blog--------------------------------
    Route::get('/blog/{id}','Blog_Controller@show');
    Route::get('/blog/delete/{id}','Blog_Controller@delete');

    // Comment yazmaq
    Route::post('/newcomment/','Blog_Controller@newComment');

    // Comment silmek 
    Route::get('/deletecomment/{id}','Blog_Controller@deleteComment');

    // Reply Comment yazmaq
    Route::post('/newreply','Blog_Controller@newReply');


    // Bloglarda tag sistemi
    // Tag sehifeleri
    Route::get('/tag/{id}','Blog_Controller@tagBlog');
    

    // Search sistemi
    Route::get('/search/','Blog_Controller@search');



    // Myprofilede kurs tenzimlemeleri
    // Kurs yaratmaq 
    Route::post('/savecourse','Course_Controller@newCourse');

    // Kurslar sehifesi
    Route::get('/courses','Course_Controller@index');
    Route::get('/course/{id}','Course_Controller@course');    

}







