<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ClearController extends Controller
{
 // 楽市のエアコン、１から１６まで
    public function a1()
    {
     $users1 = User::all()->where('team','1');
     $users2 = User::all()->where('team','7');
     foreach($users1 as $user){
     $user -> feel = 0;
     $user -> save();
     };
     foreach($users2 as $user){
     $user -> feel = 0;
     $user -> save();
     };
     return view('map');
    }
    
    public function b1()
    {
     $users = User::all()->where('team','12');
     foreach($users as $user){
     $user -> feel = 0;
     $user -> save();
     };
     return view('map');
    }
    
    public function c2()
    {
     $users1 = User::all()->where('team','>=','2')->where('team','<=','4');
     $users2 = User::all()->where('team','>=','8')->where('team','<=','10');
     $users = [$users1,$users2];
     foreach($users as $a){
     foreach($a as $user){
     $user -> feel = 0;
     $user -> save();
     };};
     return view('map');
    }
    
    public function d2()
    {
     $users1 = User::all()->where('team','>=','13')->where('team','<=','15');
     foreach($users as $user){
     $user -> feel = 0;
     $user -> save();
     };
     return view('map');
    }
    
    public function a2()
    {
     $users1 = User::all()->where('team','>=','5')->where('team','<=','6');
     $users2 = User::all()->where('team','11');
     $users3 = User::all()->where('team','21');
     $users = [$users1,$users2,$users3];
     foreach($users as $a){
     foreach($a as $user){
     $user -> feel = 0;
     $user -> save();
     };};
     return view('map');
    }
    
    public function b2()
    {
     $users1 = User::all()->where('team','16');
     $users2 = User::all()->where('team','27');
     foreach($users1 as $user){
     $user -> feel = 0;
     $user -> save();
     };
     foreach($users2 as $user){
     $user -> feel = 0;
     $user -> save();
     };
     return view('map');
    }
    
    
    // 楽座のエアコン１７から３２
    public function a3()
    {
     $users1 = User::all()->where('team','>=','17')->where('team','<=','19');
     $users2 = User::all()->where('team','>=','22')->where('team','<=','24');
     $users = [$users1,$users2];
     foreach($users as $a){
     foreach($a as $user){
     $user -> feel = 0;
     $user -> save();
     };};
     return view('map');
    }
    
    public function b3()
    {
     $users = User::all()->where('team','>=','28')->where('team','<=','30');
     foreach($users as $user){
     $user -> feel = 0;
     $user -> save();
     };
     return view('map');
    }
    
    public function c3()
    {
     $users1 = User::all()->where('team','20');
     $users2 = User::all()->where('team','>=','25')->where('team','<=','26');
     $users = [$users1,$users2];
     foreach($users as $a){
     foreach($a as $user){
     $user -> feel = 0;
     $user -> save();
     };};
     return view('map');
    }
    
    public function d3()
    {
     $users = User::all()->where('team','>=','31')->where('team','<=','32');
     foreach($users as $user){
     $user -> feel = 0;
     $user -> save();
     };
     return view('map');
    }
}
