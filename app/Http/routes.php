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


Route::get('/silverenglish', 'Admin_Controller@login');


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
    Route::post('/blog/delete/{id}','Blog_Controller@delete');

    // Comment yazmaq
    Route::post('/newcomment/','Blog_Controller@newComment');

    // Comment silmek 
    Route::post('/deletecomment','Blog_Controller@deleteComment');
    Route::post('/deletereply','Blog_Controller@deleteReply');

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

    // Kursa basla
    Route::get('/start/{id}','Course_Controller@start');

    //Kurs tenzimlemeleri
    Route::get('/courseset/{id}','Course_Controller@courseSet');


        // Istifadeci terefinden yaradilmis kursun descriptionunu deyismek
        Route::post('/course/desc/update/{id}','Course_Controller@courseUpdateDesc');

        // Istifadeci terefinden yaradilmis kursun adini deyismek
        Route::post('/course/name/update/{id}','Course_Controller@courseUpdateName');

        // Istifadeci terefinden yaradilmis kursun qiymetini deyismek
        Route::post('/course/price/update/{id}','Course_Controller@courseUpdatePrice');

        // Istifadeci terefinden yaradilmis kursun seklini deyismek
        Route::post('/course/pic/update/{id}','Course_Controller@courseUpdatePic');

        // Istifadeci terefinden yaradilmis kursa video elave etmek

        Route::post('/course/addvideo/{id}','Course_Controller@courseAddVideo');


        //Video silmek
        Route::post('/deletevideo/{id}','Course_Controller@courseDeleteVideo');



        // Video izlemek
        Route::get('/watchvideo/{id}/{cd}','Course_Controller@courseWatchVideo');

}

// Admin Panel routeleri

Route::post('/admin/checklogin','Admin_Controller@checkLogin');

if(isset($_SESSION['adminTrue'])){

    Route::get('/adminpanel','Admin_Controller@index');

}

