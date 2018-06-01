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

Route::get('gallery',[
    'as'=>'gallery',
    'uses'=>'PagesController@gallery'
]);

Route::get('contact',[
    'as'=>'contact',
    'uses'=>'PagesController@contact'
]);

Route::get('services',[
    'as'=>'services',
    'uses'=>'PagesController@services'
]);

Route::get('pic',[
    'as'=>'pic',
    'uses'=>'PagesController@pic'
]);

Route::get('reading',[
    'as'=>'reading',
    'uses'=>'PagesController@reading'
]);
