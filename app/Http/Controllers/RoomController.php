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
             $insert_bool = DB::table('user')->insert(['uemail' => $email, 'ufirstname' => $firstname,'ulastname' => $lastname,'upassword' => $password]);
            $message = 'Register succeeded!';
        }

        return view('login.registerresult',['message' => $message]);
    }

    /**
     * Show the page for register.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        //
        $count = DB::table('user')->count();



        return view('login.register',['number' => $count]);
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



        return view('homeregisted');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
