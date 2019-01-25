<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests;


use Cookie;

use Input;
class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // $_POST['username']
        // $email = Request::get('email');
        // $firstname = Request::get('firstname');
        // $lastname = Request::get('lastname');
        // $password = Request::get('password');
        $message=123;
        $count=456;
        // return view('app.test',['message'=>$count])->cookie('name','values',60);

        $value = 'text/html;charset=utf-8';
        return response(view('app.test',['message'=>123]),200)->header('Content-Type',$value)
        ->withCookie('site','LaravelAcademy.org');


        $email = $_POST['email'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $password = $_POST['password'];
        $count = DB::table('user')->count();
        // $count = DB::select('select count(*) from users where uemail = ?', [1]);
        $count = DB::table('user')->where('uemail', '=', $email)->get()->count();
        // if($count>0)
        // {
        //     $message = 'Your email has already been registered!';
        // }
        // else {
             $insert_bool = DB::table('user')->insert(['uemail' => $email, 'ufirstname' => $firstname,'ulastname' => $lastname,'upassword' => $password]);
        //     $message = 'Register succeeded!';
        // }
        $message='message is: ';
        $email;



        session(['test' => 'testvalue']);
        session(['timestamp' => date("h:i:sa")]);

        $email = "zhoyennn@gmail.com";
        $password = '123456';
        session(['timestamp' => date("h:i:sa")]);
        $users = DB::table('user')->get();
        $thisuser;
        foreach ($users as $user) {
            if($user->uid==session('uid'))
            {
                $thisuser=$user;
                $message.='exits!';
            }
        }
        
        $message.='session is : '.session('uid');

      



        return view('app.test',['message'=>$count])->cookie('name','values',60);
    }

    public function dev()
    {
        
        $message = array('message' => $messageContent,'flag'=>$flag);
        $message = json_encode($message);
        // if($flag==2)
        //     if($type==1)return view('app.pages.Administrator dashboard',['users'=>$users]);
        //     else
        //     return view('app.pages.HomePage',['users'=>$users]);
        // if($flag==1)
        //     return view('app.pages.ErrorPage',['message'=>"Your password is wrong!"]);
        // if($flag==0)
        //     return view('app.pages.ErrorPage',['message'=>"This email doesn\'t exist"]);
        return $message;
    }

}
