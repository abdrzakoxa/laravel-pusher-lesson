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

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->get('/sender/{id}', function (\App\User $id) {
	return event(new \App\Events\PrivateMessage('Hello every body',$id));
//	return "true";
});


Route::middleware('auth')->get('/recipient', function () {
	return view('recipient');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
