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

Route::get('/', function () {
    return view('welcome');
});
Route::get('login', function(){
	return view('login');
});

Route::get('index', function(){
	return view('index');
});
Route::get('page-transitions', function(){
	return view('page-transitions');
});
Route::get('login1', function(){
	return view('login1');
});
Route::get('signup', function(){
	return view('signup');
});
Route::get('homepage', function(){
	return view('homepage');
});

Route::get('showratting', function(){
	return view('showratting');
});


