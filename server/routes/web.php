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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('message/hello', 'MessageController@hello');
//Route::get('message/{msg}','MessageController@show');
//Route::get('message/{name}/{msg}', 'MessageController@show');
Route::get('calcs/{num1}/{operator}/{num2}', 'calcs@show');

