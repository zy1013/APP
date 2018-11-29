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
<<<<<<< HEAD


Route::post('userinfo', 'UsersController@userinfo');
Route::post('usercreate', 'UsersController@index');
Route::get('register', 'UsersController@register');

=======
>>>>>>> 3aa3fb4436daed42ad00f17fe020046db6cae662
