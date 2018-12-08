<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests;




use Input;
class UsersController extends Controller
{
   public function setdevice()
   {
        
        $rname = $_POST['rname'];

        // DB::table('user')->where('did', '=', $did)->update();
        DB::update('update room set rname=?where did = ?', [$rname,$rid]);
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
}
