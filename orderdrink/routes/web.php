<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes(['verify' => true]);
// Admin
Route::group(['namespace'=>'Admin'],function (){
    Route::group(['prefix'=>'admin'],function () {
    	Route::get('/home', 'HomeController@index')->name('home');
		Route::resource('about','Aboutcontroller');
		Route::delete('about_delete', 'AboutController@destroy')->name('about_delete');
    });
});

//Client
Route::group(['namespace'=>'Client','prefix'=>'/'],function (){
    	Route::get('/home', 'HomeController@index');
});