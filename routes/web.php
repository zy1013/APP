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
    return view('app.pages.Main');
});


Route::get('setdevice','DeviceController@setdevice');



//from mainpage execute login action
Route::get('/login',function () {
    return view('app.pages.Login');
});



Route::post('/confirmlogin','UsersController@confirmlogin');
//jump to forget password page 
Route::get('/forgetpassword', function () {
    return view('app.pages.Forget Password');
});

Route::get('/register', function () {
    return view('app.pages.Register');
});
Route::post('/confirmregister','UsersController@index');
Route::post('/userinfo','UsersController@userinfo');

Route::get('/account', 'UsersController@account');

Route::get('/message', function () {
    return view('app.pages.UserMessage');
});



Route::get('/home', function () {
    return view('app.pages.HomePage');
});

Route::get('/modifypassword', function () {
    return view('app.pages.Modify Password');
});

Route::get('/newmessage', function () {
    return view('app.pages.New Message');
});

Route::get('/confirmmodifypassword', 'UsersController@modifypassword');

Route::get('/room', function () {
    return view('app.pages.Room');
});

Route::get('/adddevice', function () {
    return view('app.pages.Add Device');
});

Route::get('/addhome', function () {
    return view('app.pages.Add Home');
});

Route::get('/device', function () {
    return view('app.pages.Device');
});

Route::get('/editdevice', function () {
    return view('app.pages.Edit Device');
});

Route::get('/log', function () {
    return view('app.pages.Log');
});

Route::get('/newmessage', function () {
    return view('app.pages.New Message');
});

Route::get('/newrequest', function () {
    return view('app.pages.New Request');
});

Route::get('/request', function () {
    return view('app.pages.Request');
});

Route::get('/homelist', function () {
    return view('app.pages.Homelist');
});

Route::get('/adminmessage', function () {
    return view('app.pages.Manage messages');
});

Route::get('/adminrequest', function () {
    return view('app.pages.Manage requests');
});

Route::get('/adminsinglemessage', function () {
    return view('app.pages.Message');
});

Route::get('/adminrequest', function () {
    return view('app.pages.Manage requests');
});

Route::get('/viewrequest', function () {
    return view('app.pages.View request');
});

Route::get('/adminprofile', function () {
    return view('app.pages.Administrator profile');
});


Route::get('/changepassword', function () {
    return view('app.pages.Change password');
});

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

Route::get('test', 'TestController@index');



//below for admin

//admin get message list


