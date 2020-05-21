<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',  'FrontController@index'); 

//Route::get('/contact',  'FrontController@contact'); 

Route::get('/contact-us',  'FrontController@contact')->name('contact');  // name function option when need to change url 

//group method

Route::group(['prefix' => 'admin'], function(){
        Route::get('/create',  'FrontController@contact'); 
        Route::get('/update',  'FrontController@contact'); 
        Route::get('/delete',  'FrontController@contact'); 
        Route::get('/user',  'FrontController@contact'); 
       
});