<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests;




use Input;
class UsersController extends Controller
{
    //set a device status all with one url 
    //and is for single device
   public function setdevice()
   {
        $email = $_POST['email'];
        $dname = $_POST['dname'];
        $did = $_POST['did'];
        $dfunction = $_POST['dfunction'];
        $dvalue = $_POST['dvalue'];
        $dalias = $_POST['dalias'];

        // DB::table('user')->where('did', '=', $did)->update();
        DB::update('update device set dalias=?,dfunction=?,dvalue=? where did = ?', [$dalias,$dfunction,$dvalue,$did]);
        // DB::update('update student set age = ? where name = ?',[20,'sean']);
        return 'update '.$dalias.' complete';

   }

   public function getdevice()
   {
        $devices = DB::table('device')->get(); 
        return $devices;
   }

   public function adddevice()
   {
        $dname = $_POST['dname'];
        
        
        $dfunction = 0;
        $dvalue = 0;
        $rid = $_POST['rid'];

        DB::table('device')->insert(['dname' => $dname,'dfunction' => $dfunction,'dvalue' => $dvalue,'dbelonging' => $rid]);
        return 'add succeeded!';
   }

   public function deletedevice()
   {
        $did = $_POST['did'];
        $deleted = DB::delete('delete from device where did = ?',[$did]);
        return 'add succeeded!';
   }

   

}
