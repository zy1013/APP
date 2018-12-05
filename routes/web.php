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
    return view('home');
});



Route::get('/test', function () {
    return view('app.pages.adminhome');
});
//from mainpage execute login action
Route::get('/login', 'UsersController@login');
//jump to forget password page 
Route::get('/forgetpassword', function () {
    return view('forgetpassword');
});

Route::get('register', 'UsersController@register');

//check email exist and legal
Route::post('/checkemail', 'UsersController@checkuseremail');

//send password to email
Route::post('/sendemail','UserController@sendemail');

//get user infomation return the user's infomation
Route::post('userinfo', 'UsersController@userinfo');

//confirm to register user
Route::post('usercreate', 'UsersController@index');

//goto 
Route::get('homedashboardpage','HomeController@index');

//Below is the url for home pages

//CRUD for device
Route::post('setdevice','DeviceController@setdevice');
Route::post('adddevice','DeviceController@adddevice');
Route::post('deletedevice','DeviceController@deletedevice');
Route::post('getdevice','DeviceController@getdevice');

//CRUD for room
Route::post('setroom','roomController@setroom');
Route::post('addroom','roomController@addroom');
Route::post('deleteroom','roomController@deleteroom');
Route::post('getroom','roomController@getroom');

//CRUD for home
Route::post('sethome','homeController@sethome');
Route::post('addhome','homeController@addhome');
Route::post('deletehome','homeController@deletehome');
Route::post('gethome','homeController@gethome');

//CRUD for User
Route::post('setuser','userController@setuser');
Route::post('adduser','userController@adduser');
Route::post('deleteuser','userController@deleteuser');
Route::post('getuser','userController@getuser');
//CRUD for message
Route::post('setmessage','messageController@setmessage');
Route::post('addmessage','messageController@addmessage');
Route::post('deletemessage','messageController@deletemessage');
Route::post('getmessage','messageController@getmessage');
//CRUD for relation
Route::post('setrelation','relationController@setrelation');
Route::post('addrelation','relationController@addrelation');
Route::post('deleterelation','relationController@deleterelation');
Route::post('getrelation','relationController@getrelation');




//below for admin

//admin get message list


