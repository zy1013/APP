<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests;




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
        // $email = $_POST['email'];
        // $firstname = $_POST['firstname'];
        // $lastname = $_POST['lastname'];
        // $password = $_POST['password'];
        // // $count = DB::table('user')->count();
        // // $count = DB::select('select count(*) from users where uemail = ?', [1]);
        // $count = DB::table('user')->where('uemail', '=', $email)->get()->count();
        // if($count>0)
        // {
        //     $message = 'Your email has already been registered!';
        // }
        // else {
        //      $insert_bool = DB::table('user')->insert(['uemail' => $email, 'ufirstname' => $firstname,'ulastname' => $lastname,'upassword' => $password]);
        //     $message = 'Register succeeded!';
        // }
        $message='message is: ';
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

      



        return view('app.pages.test',['message'=>$message]);
    }

}
