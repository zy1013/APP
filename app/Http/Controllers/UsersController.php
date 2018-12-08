<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests;




use Input;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $_POST['username']
        // $email = Request::get('email');
        // $firstname = Request::get('firstname');
        // $lastname = Request::get('lastname');
        // $password = Request::get('password');
        $email = $_POST['email'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $password = $_POST['password'];
        // $count = DB::table('user')->count();
        // $count = DB::select('select count(*) from users where uemail = ?', [1]);
        $count = DB::table('user')->where('uemail', '=', $email)->get()->count();
        if($count>0)
        {
            $message = 'Your email has already been registered!';
        }
        else {
             $insert_bool = DB::table('user')->insert(['uemail' => $email, 'ufirstname' => $firstname,'ulastname' => $lastname,'upassword' => $password,'utype' => 0]);
            $message = 'Register succeeded!';
        }

        return view('app.pages.HomePage',['message' => $message]);
    }

    /**
     * Show the page for register.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        //
        session(['timestamp' => date("h:i:sa")]);
        $count = DB::table('user')->count();
        $users = DB::table('user')->get();
        $count = 'this is';
        foreach ($users as $user) {
            $count = $count . " " . $user->uid;
        }


        return view('login.register',['number' => $count,'users'=>$users]);
    }


    public function confirmlogin()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        session(['timestamp' => date("h:i:sa")]);
        $flag = 0;
        $type=0;
        $users = DB::table('user')->get();

        foreach ($users as $user) {
            if($user->uemail==$email)
            {
                $flag=1;//user exist
                if($password==$user->upassword)
                {
                    $type=$user->utype;
                    $uid=$user->uid;
                    session(['uid' => $uid]);
                    $flag=2;
               }
            }
            

        }
        if($flag==2)
            if($type==1)return view('app.pages.Administrator dashboard',['users'=>$users]);
            else
            return view('app.pages.HomePage',['users'=>$users]);
        if($flag==1)
            return view('app.pages.ErrorPage',['message'=>"Your password is wrong!"]);
        if($flag==0)
            return view('app.pages.ErrorPage',['message'=>"This email doesn\'t exist"]);

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userinfo()
    {
        $email = $_POST['email'];
        $count = DB::table('user')->where('uemail', '=', $email)->get()->count();
        if($count>0)
        {
            $message = 'Your email has already been registered!';
        }
        else {
             
            $message = 'You can use this email to register!';
        }
        return $message;
    }

    public function login(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');



        return view('homeregisted',['email' => $email,'password' => $password]);

    }

    public function account()
    {
        $users = DB::table('user')->get();
        $thisuser;
        foreach ($users as $user) {
            if($user->uid==session('uid'))
            {
                $thisuser=$user;
               
            } 
        }


        return view('app.pages.Account',['user'=>$thisuser]);
    }

}
