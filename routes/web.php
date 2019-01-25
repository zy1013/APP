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


/*
|--------------------------------------------------------------------------
| Route templates
|--------------------------------------------------------------------------
|plain direct
|Route::get('/url', function () {
|    return view('viewName');
|});
|——————————————————
|Use Controller(get)
|——————————————————
|Route::get('/test', 'TestController@methodName');
|
|————————————————————
|Use Controller(post)
|————————————————————
|Route::post('/test', 'TestController@methodName');
|
*/

Route::get('/layout', function () {
    return view('layout.dashboard');
});
Route::get('/testlayout', function () {
    return view('index1');
});
// Route::get('test', function () {
//     return view('app.pages.Main');
// });

//Test demos' functionalities. 
Route::get('/test', 'TestController@index');

/*
|--------------------------------------------------------------------------
| Main pages
|--------------------------------------------------------------------------
| About this page:
|   Provide register, login, password retrieve and other unlogin services.
|    
|
*/
Route::post('/devdata','TestController@dev');//To login page.

Route::post('/logout','UsersController@logout');//To login page.


Route::get('/', 'UsersController@index');
//Front page for both registered  and unregistered account.done.

Route::get('/login',function () {
    return view('login');
});//To login page.

Route::post('/confirmlogin','UsersController@confirmLogin');//To login page.

Route::post('/addmessage','UsersController@addmessage');//To login page.

Route::post('/updateaccount','UsersController@updateaccount');//To login page.


Route::post('/addroom','HomesController@addroom');//To login page.


Route::get('/register', function () {
//Register page. Not check visitor login status.
    return view('register');
});//To register page.

Route::get('/account', 'UsersController@accountpage');

Route::get('/modifypassword', function () {
    return view('modifypassword');
});

Route::get('/message', 'UsersController@message');

Route::post('/insertdevice', 'HomesController@insertdevice');


Route::get('/request', function () {
    return view('request');
});

Route::get('/room','HomesController@roompage');

Route::get('/adddevice','HomesController@adddevicepage');

Route::post('/inserthome','HomesController@inserthome');

Route::get('/admin', 'UsersController@adminpage');

Route::get('/managechat', 'UsersController@message');

Route::get('/adminprofile', function () {
    return view('adminprofile');
});

Route::get('/device','HomesController@devicepage');

Route::get('/newrequest', function () {
    return view('newrequest');
});

Route::get('/adminchangepassword', function () {
    return view('adminchangepassword');
});

Route::get('/managerequest', function () {
    return view('managerequest');
});

Route::get('/homelist', function () {
    return view('homelist');
});
Route::get('/addhome', function () {
    return view('addhome');
});



Route::get('/activate/{uid}/{secret}','UsersController@activate');//To activate the account

Route::post('/switch/{uid}','HomesController@switch');//To activate the account

Route::post('/checkemail', 'UsersController@checkEmail');

Route::get('/forgetpassword', function () {
//Front page for both registered  and unregistered account.
    return view('forgetPassword');
});//to forgetpassword page.

Route::post('/confirmregister', 'UsersController@confirmregister');

Route::get('/sendmail', 'UsersController@sendmail');


Route::get('/homepage',function () {
    return view('homepage');
});//To login page.
//root page.
// Route::get('/','HomeController@home');

//login page.
// Route::post();

//register page.





//retrieve password page.


/*
|--------------------------------------------------------------------------
| Home pages
|--------------------------------------------------------------------------
| About this page:
|   Nav: | Homepage
|        | Account_____My account
|        |        |____Modify password
|        |        |____Request
|        | Home________(User-defined Home name)  
|        |     |_______Room   
|        |     |_______Device
|        | Homelist
*/
//Click Homepage
Route::get('/home','HomesController@homeIndex');
/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
| 1.Here users can manipulate every device's available function.
|   For A/C, you can change the mode and the number of temperature.
|   For Light, you can turn it on and off.
|   For 
*/




//My account
//Modify password
//My home
//Room
//Device
//Homelist


















// Route::get('setdevice','DeviceController@setdevice');



// //from mainpage execute login action
// Route::get('/login',function () {
//     return view('app.pages.Login');
// });



// Route::post('/confirmlogin','UsersController@confirmlogin');
// //jump to forget password page 
// Route::get('/forgetpassword', function () {
//     return view('app.pages.Forget Password');
// });

// Route::post('/confirmregister','UsersController@confirmregister');
// Route::post('/userinfo','UsersController@userinfo');

// Route::get('/account', 'UsersController@account');

// Route::get('/message', function () {
//     return view('app.pages.UserMessage');
// });
// Í

// //send password to email
// Route::post('/sendemail','UserController@sendemail');

// //get user infomation return the user's infomation
// Route::post('userinfo', 'UsersController@userinfo');

// //confirm to register user
// Route::post('usercreate', 'UsersController@index');