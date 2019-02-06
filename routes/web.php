<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




// Front End

Route::get('/', function () {
    return view('Front.pages.index');
    // return view('Front.layouts.master');
});


// Back End
Route::get('/admin', function () {
    return view('Back.dashboard');
    // return view('Back.layouts/master');
   
});

Route::get('/admin/post/create','PostController@create')->name('post.create');

