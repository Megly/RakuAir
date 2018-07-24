<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ClearController extends Controller
{
    public function a1()
    {
     $users1 = User::all()->where('team','4');
     $users2 = User::all()->where('team','>=','1')->where('team','<=','2');
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
     $users = User::all()->where('team','7');
     foreach($users as $user){
     $user -> feel = 0;
     $user -> save();
     };
     return view('map');
    }
    
    public function a2()
    {
     $users1 = User::all()->where('team','3');
     $users2 = User::all()->where('team','>=','10')->where('team','<=','11');
     $users3 = User::all()->where('team','>=','14')->where('team','<=','15');
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
     $users1 = User::all()->where('team','>=','5')->where('team','<=','6');
     $users2 = User::all()->where('team','>=','8')->where('team','<=','9');
     $users3 = User::all()->where('team','>=','18')->where('team','<=','19');
     $users = [$users1,$users2,$users3];
     foreach($users as $a){
     foreach($a as $user){
     $user -> feel = 0;
     $user -> save();
     };};
     return view('map');
    }
    
    public function c2()
    {
     $users1 = User::all()->where('team','>=','12')->where('team','<=','13');
     $users2 = User::all()->where('team','>=','16')->where('team','<=','17');
     $users3 = User::all()->where('team','22');
     $users4 = User::all()->where('team','26');
     $users = [$users1,$users2,$users3,$users4];
     foreach($users as $a){
     foreach($a as $user){
     $user -> feel = 0;
     $user -> save();
     };};
     return view('map');
    }
    
    public function d2()
    {
     $users1 = User::all()->where('team','>=','20')->where('team','<=','21');
     $users2 = User::all()->where('team','30');
     $users = [$users1,$users2];
     foreach($users as $a){
     foreach($a as $user){
     $user -> feel = 0;
     $user -> save();
     };};
     return view('map');
    }
    
    public function a3()
    {
     $users1 = User::all()->where('team','>=','23')->where('team','<=','25');
     $users2 = User::all()->where('team','>=','27')->where('team','<=','29');
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
     $users = User::all()->where('team','>=','31')->where('team','<=','33');
     foreach($users as $user){
     $user -> feel = 0;
     $user -> save();
     };
     return view('map');
    }
    
    public function a4()
    {
     $users1 = User::all()->where('team','>=','34')->where('team','<=','35');
     $users2 = User::all()->where('team','>=','38')->where('team','<=','39');
     $users = [$users1,$users2];
     foreach($users as $a){
     foreach($a as $user){
     $user -> feel = 0;
     $user -> save();
     };};
     return view('map');
    }
    
    public function b4()
    {
     $users = User::all()->where('team','>=','42')->where('team','<=','43');
     foreach($users as $user){
     $user -> feel = 0;
     $user -> save();
     };
     return view('map');
    }    
    
    public function c4()
    {
     $users1 = User::all()->where('team','>=','36')->where('team','<=','37');
     $users2 = User::all()->where('team','>=','41');
     $users = [$users1,$users2];
     foreach($users as $a){
     foreach($a as $user){
     $user -> feel = 0;
     $user -> save();
     };};
     return view('map');
    }
    
    public function d4()
    {
     $users1 = User::all()->where('team','>=','40');
     $users2 = User::all()->where('team','>=','44')->where('team','<=','45');
     $users = [$users1,$users2];
     foreach($users as $a){
     foreach($a as $user){
     $user -> feel = 0;
     $user -> save();
     };};
     return view('map');
    }
    
}
