<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class Clear1AController extends Controller
{
        public function a1()
    {
     $users = User::all()->where('team','>=','1')->where('team','<=','3');
     foreach($users as $user){
     $user -> feel = 0;
     $user -> save();
         
     };
     
     return view('map');
    }
}
