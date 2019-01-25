<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Mail\Me;
use Illuminate\Support\Facades\Cookie;
use Input;
use Mail;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request)
    {
        
        //Cookie::queue('test', 'Hello, Laravel', 10);
        //$message = $request->cookie('lastVisit');
        Cookie::queue('lastVisit', date('l jS \of F Y h:i:s A'), 10);//time stamp
        //Cookie::queue('uid', '', 10);
        //Cookie::queue('state', '1', 10);
        $userState = $request->cookie('state');//to check if user has logined.

        $uid = $request->cookie('uid');//get permanent uid.
        // $message = $request->cookie('laravel_session');//get permanent uid. 
        $browser = getbrowser();
        $message = 'your browser: '.$browser['browser'].' Version: '.$browser['version'];

        return view('index',['message' => $message, 'login'=> $userState]);
    }

    /**
     * Check the input email, return code representing if it's already exist.
     *
     * @return plain text
     */


    public function checkEmail(Request $request)
    {
        $result;
        $email = $_POST['uemail'];
        $count = DB::table('user')->where('uemail', '=', $email)->get()->count();
        if($count!=0)
            $result = 0;
        else
        {
            $result=1;
        }

        return $result;
    }

    /* Check input validation and save the user information in database. Send confirm email for activate account. User state code: 0 not activated, 1 normal, 2 admin, 3 blacklist.
     */
    public function confirmregister(Request $request)
    {
        //initialize user data.
        $createtime = time();
        $state = 0;
        $secret =md5(time() . mt_rand(1,1000000));//encryped code for further activation.
        $email = $_POST['email'];
        $email = strtolower($email);//to lower 
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $password = $_POST['password'];
        $uid = DB::table('user')->where('uemail', $email)->value('uid');
        //check data valication;
        //insert data
        if($uid!=0)
        {
            time();
        }
        else
        {
            $insert_bool = DB::table('user')->insert(['uemail' => $email, 'ufirstname' => $firstname,'ulastname' => $lastname,'upassword' => $password,'utype' => 0, 'usecret' => $secret]);
        }
        $uid = DB::table('user')->where('uemail', $email)->value('uid');
        $userState = $request->cookie('state');
        $to = $email;
        $subject = "Test mail"; 
        $url='http://localhost/activate/'.$uid.'/'.$secret;
        $message = "Welcome! The activate link is below. ".$url;
        $from = "zhoyennn@gmail.com";
        $headers = "From: $from";
        mail($to,$subject,$message,$headers);

        // session(['timestamp' => date("h:i:sa")]);
        // $count = DB::table('user')->count();
        // $users = DB::table('user')->get();
        // $count = 'this is';
        // foreach ($users as $user) {
        //     $count = $count . " " . $user->uid;
        // }

        return view('index1',['message' => $message, 'login'=> $userState]);
    }

    public function activate($uid,$secret)
    {//not yet
        $user = DB::table('user')->where('uid', $uid)->value('usecret');
        $message='System error!';
        if($user==$secret)
            $message='Your account activated successful!';
        else
        {
            $message='no,the uid'.$uid.' and his secret is: '.$user;
        }
        return $message;
    }

    public function activateAccount()
    {//not yet

    }
    public function resetPassword()
    {//not yet

    }
    public function confirmLogin()
    {//change user login state
        //receive incoming data and initialize temperate variable. 
        $email = $_POST['email'];
        $password = $_POST['password'];
        session(['timestamp' => date("h:i:sa")]);//save login time stamp.
        $flag = 0;//Determine what page this method return. 

        $type=0;
        //check user exist. If exist get user data. 
        $users = DB::table('user')->get();
        foreach ($users as $user) {
            if($user->uemail==$email)
            {
                $flag=1;//user exist
                if($password==$user->upassword)
                {
                    $type=$user->utype;//check if is admin.
                    $uid=$user->uid;
                    session(['uid' => $uid]);
                    session(['uname' => $user->ufirstname.$user->ulastname]);
                    // $value = session('key');//session operation
                    // $value = session('key', 'default');
                    // session(['key' => 'value']);

                    $flag = 2;//password correct.
               }
            }
        }
        $messageContent;//Prepare message content.

        
        if($type = 0)
        {//this account is not activated.
            $messageContent = 'Your email does not exist!';
            $message = array('message' => $messageContent,'flag'=>$flag);
            $message = json_encode($message);
            return $message;
        }
        else if ($type = 1) {//this is normal account
            
        }
        else
        {//this is administrator account.
            
        }
        //Change user login status.
        session(['lastlogin' => time()]);
        session(['login' => 1]);
        //Return message. Differ by validation.
        
        if($flag==0)
        {
            $messageContent = 'Your email does not exist!';
        }
        elseif ($flag==1) {
            $messageContent = 'Your password is not right!';
        }
        else
        {
            $messageContent = 'Login successfully!';
        }
        $message = array('message' => $messageContent,'flag'=>$flag,'type'=>$type);
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

function sendmail(){
        $to = "zhou.yuan.work@gmail.com";
        $subject = "Test mail";
        $message = "Hello! This is a simple email message.";
        $from = "zhoyennn@gmail.com";
        $headers = "From: $from";
        mail($to,$subject,$message,$headers);
        echo "Mail Sent.";
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


    public function logout(Request $request)    
    {



        return view('/',['email' => $email,'password' => $password]);

    }

    public function accountpage()
    {
        $users = DB::table('user')->get();
        $thisuser;
        foreach ($users as $user) {
            if($user->uid==session('uid'))
            {
                $thisuser=$user;
               
            } 
        }


        return view('account',['user'=>$thisuser,'uid' =>session('uid')]);
    }


    public function addmessage()
    {
        $content = $_POST['content'];
        $uid = $_POST['uid'];
        $sender = DB::table('user')->get();
        $insert_bool = DB::table('message')->insert(['mcontent' => $content,'msender'=>$uid,'msenddate'=>date("Y-m-d H:i:s", time()),'mreceiver'=>1031]);
        $result = DB::table('message')->get()->count();
        return $result;
    }

    public function adminpage()
    {
        $users = DB::table('user')->get();
        return view('admin',['user'=>$users]);
    }


    public function updateaccount()
    {
        $uid = $_POST['uid'];
        $ufirstname = $_POST['ufirstname'];
        $ulastname = $_POST['ulastname'];
        $result=DB::table('user')
            ->where('uid', $uid)
            ->update(['ufirstname' => $ufirstname,'ulastname' => $ulastname]);

        return $result;
    }

    public function message()
    {
        $uid = session('uid');
        $messages = DB::table('message')->where('mreceiver', $uid)->orWhere('msender', $uid)->get();
        return view('message',['data'=>$messages,'uid'=>$uid]);
    }

    public function getMessage()
    {
        $uid = session('uid');

        $messages = DB::table('message')->where('mreceiver', $uid)->get();

        return $messages;
    
    }

}
    function getbrowser() {
        global $_SERVER;
        $agent  = $_SERVER['HTTP_USER_AGENT'];
        $browser  = '';
        $browser_ver  = '';
 
        if (preg_match('/OmniWeb\/(v*)([^\s|;]+)/i', $agent, $regs)) {
            $browser  = 'OmniWeb';
            $browser_ver   = $regs[2];
        }
 
        if (preg_match('/Netscape([\d]*)\/([^\s]+)/i', $agent, $regs)) {
            $browser  = 'Netscape';
            $browser_ver   = $regs[2];
        }
 
        if (preg_match('/safari\/([^\s]+)/i', $agent, $regs)) {
            $browser  = 'Safari';
            $browser_ver   = $regs[1];
        }
 
        if (preg_match('/MSIE\s([^\s|;]+)/i', $agent, $regs)) {
            $browser  = 'Internet Explorer';
            $browser_ver   = $regs[1];
        }
 
        if (preg_match('/Opera[\s|\/]([^\s]+)/i', $agent, $regs)) {
            $browser  = 'Opera';
            $browser_ver   = $regs[1];
        }
 
        if (preg_match('/NetCaptor\s([^\s|;]+)/i', $agent, $regs)) {
            $browser  = '(Internet Explorer ' .$browser_ver. ') NetCaptor';
            $browser_ver   = $regs[1];
        }
 
        if (preg_match('/Maxthon/i', $agent, $regs)) {
            $browser  = '(Internet Explorer ' .$browser_ver. ') Maxthon';
            $browser_ver   = '';
        }
        if (preg_match('/360SE/i', $agent, $regs)) {
            $browser       = '(Internet Explorer ' .$browser_ver. ') 360SE';
            $browser_ver   = '';
        }
        if (preg_match('/SE 2.x/i', $agent, $regs)) {
            $browser       = '(Internet Explorer ' .$browser_ver. ') 搜狗';
            $browser_ver   = '';
        }
 
        if (preg_match('/FireFox\/([^\s]+)/i', $agent, $regs)) {
            $browser  = 'FireFox';
            $browser_ver   = $regs[1];
        }
 
        if (preg_match('/Lynx\/([^\s]+)/i', $agent, $regs)) {
            $browser  = 'Lynx';
            $browser_ver   = $regs[1];
        }
 
        if(preg_match('/Chrome\/([^\s]+)/i', $agent, $regs)){
            $browser  = 'Chrome';
            $browser_ver   = $regs[1];
 
        }
 
        if ($browser != '') {
            return ['browser'=>$browser,'version'=>$browser_ver];
        } else {
            return ['browser'=>'unknow browser','version'=>'unknow browser version'];
        }
    }