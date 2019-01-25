<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests;




use Input;

class HomesController extends Controller
{
  public function homeIndex()
  {//Return all device-related data of this user. 
    //read present status.
    $uid = session('uid');
    $userState = session('login');
    if($userState==1)
    {
      //return message; your account already online. something.
    }
    elseif($userState==2)
    {
      //return message; your account permanently disabled.
    }
    else
    {
      //normally continue;
    }
    $hid;//permanent value of home's id.
    $hname;//permanent value of home's name.
    $home;//permanent value of home;
    $room;
    $homes = array();//store all the home data related to this account;
    $rooms = array();//store all the room data;
    $devices = array();//store all the device data;

    $tempdevices = array();
    $tempdevice = array();
    $temprooms = array();
    $temphomes = array();
    $temproom = array();
    $temphome = array();

    $myhome = DB::table('home')->where('uid', $uid)->get();//the homes belongs to this account;

    $hids = DB::table('homeuser')->where('uid', $uid)->get();//the homes contains this user but not host;

    foreach ($hids as $homedata) {
    //get each home id. 

    $home = DB::table('home')->where('hid', $homedata->hid)->first();//get the home data.
    // array_push($homes,$home->hid,$home->hname);//save home data into $homes.
      $rooms = DB::table('room')->where('hid', $homedata->hid)->get();//get rooms data belongs to this home.
      foreach ($rooms as $roomdata) {//get the rooms data
        $devices = DB::table('device')->where('rid', $roomdata->rid)->get();//get devices belong to this room
        foreach ($devices as $devicedata) {//build a array of devices.
          array_push($tempdevice,$devicedata->did, $devicedata->dname,$devicedata->dalias,$devicedata->dtype, $devicedata->dstatus, $devicedata->dfunction, $devicedata->dvalue,$devicedata->rid);
          array_push($tempdevices, $tempdevice);
          $tempdevice = array();

        }

        array_push($temproom, $roomdata->rid, $roomdata->rname,$tempdevices);
        $tempdevices = array();
        array_push($temprooms, $temproom);
        $temproom = array();

      }
      array_push($temphome, $home->hid,$home->hname,$temprooms);
      array_push($temphomes, $temphome);
      $temphome = array();
    }



    // $homes = DB::table('home')->where('name', 'John')->get();//the homes contains this user;
    // $rooms = DB::table('room')->where('name', 'John')->get();//the rooms belongs to the home;
    // $devices = BD::table('device')->where('name', 'John')->get();// the devices belongs to the rooms;


    $myHome;
    $guestHome;
    $userHomes;
    $HomeRooms;
    $RoomDevices;
    return view('homepage',['alertmessage'=>"This email doesn\'t exist",'data'=>$temphomes]);


  }

  public function adddevicepage()
  {
    $uid = session('uid');
    $home = DB::table('home')->where('uid',$uid)->get()->first();
    $hid = $home->hid;
    $rooms = DB::table('room')->where('hid',$hid)->get();
    return view("adddevice",['uid'=>$uid,'data'=>$rooms]);
  }

  public function roompage()
  {
    $uid = session('uid');
    $home = DB::table('home')->where('uid',$uid)->get()->first();
    $hid = $home->hid;
    $rooms = DB::table('room')->where('hid',$hid)->get();
    return view("room",['uid'=>$uid,'data'=>$rooms]);

  }

    public function devicepage()
  {
    $uid = session('uid');
    $devices = array();
    $home = DB::table('home')->where('uid',$uid)->get()->first();
    $hid = $home->hid;
    $rooms = DB::table('room')->where('hid',$hid)->get();
    $devicelist = DB::table('device')->get();
    $tempdevice;
    foreach($rooms as $room)
    {
      foreach($devicelist as $device)
      {
        if($device->rid == $room->rid)
          // $tempdevice = DB::table('device')->where('did',$device->did)->first();
          array_push($devices, DB::table('device')->where('did',$device->did)->first());
      }
     
    }
    return view("device",['uid'=>$uid,'data'=>$devices,'rooms'=>$rooms]);

  }

  public function insertdevice()
  {
    $uid = session('uid');
    $dname = $_POST['dname'];
    $dtype = $_POST['dtype'];
    $rid = $_POST['rid'];
    DB::table('device')->insert(['dname' => $dname,'dalias' => $dname,'dtype'=>$dtype,'rid'=> $rid,'dstatus'=>1,'dvalue'=>1,'dfunction'=>1]);

    return 1;
  }

  public function inserthome()
  {
    $uid = session('uid');
    $dname = $_POST['homename'];
    DB::table('home')->insert(['hname' => $dname,'uid'=>$uid]);
    return 111;
  }

  public function addroom()
  {
    $uid = $_POST['uid'];
    $roomname = $_POST['roomname'];
    $home = DB::table('home')->where('uid',$uid)->get()->first();

    $insert_bool = DB::table('room')->insert(['rname' => $roomname,'hid'=>$home->hid]);
    return 1;
  }
  public function switch()
  {
    $device = DB::table('device')->where('did', $_POST['did'])->first();
    $flag = 1;
    $dstatus = $_POST['dstatus'];


    if($dstatus == 1)
      $dstatus = 2 ;
    else if($dstatus == 2)
      $dstatus = 1 ;
    else{

    }


    DB::table('device')
            ->where('did', $_POST['did'])
            ->update(['dstatus' => $dstatus,'dfunction'=>$_POST['dfunction'],'dvalue'=>$_POST['dvalue']]);

    $device = DB::table('device')->where('did', $_POST['did'])->first();

    $messageContent = 'changed!';
    $message = array('message' => $messageContent,'flag'=>$flag,'status'=>$dstatus,'dname'=>$device->dname);
    $message = json_encode($message);
    return $message;

  }



   
}
