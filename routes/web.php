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

Route::get('/home/test/test1', function () {
    echo "this is test1!";
});

Route::get('/home/test/test1', function () {
    echo "your id is " . $_GET['id'];
});

Route::get('/home/test/test2','TestController@show');

Route::get('/home/test/test3','houtai\TestController@getTest');

Route::get('/home/test/test4','qiantai\TestController@show');