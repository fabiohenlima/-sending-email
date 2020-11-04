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

Route::get('/emailTrigger','Email\EmailTriggerController@index')->name('email.index');
Route::get('/emailtrigger/disparity','Email\EmailTriggerController@disparity')->name('disparity');