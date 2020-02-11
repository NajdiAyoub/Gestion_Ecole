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
    if (auth()->user() == null) {
        return view('/auth/login');
    } else {
        return view('home');
    }
});


Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/profsHome', 'ProfsHomeController@index')->name('profsHome')->middleware('auth');

Auth::routes();
