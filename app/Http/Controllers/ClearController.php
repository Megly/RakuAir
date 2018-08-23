<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ClearController extends Controller
{
 // Area3のエアコン
    public function d3()
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
    
    public function b3()
    {
     $users1 = User::all()->where('team','3');
     $users2 = User::all()->where('team','>=','5')->where('team','<=','6');
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
    
    public function c3()
    {
     $users = User::all()->where('team','7');
     foreach($users as $user){
     $user -> feel = 0;
     $user -> save();
     };
     return view('map');
    }
    
    public function a3()
    {
     $users = User::all()->where('team','>=','8')->where('team','<=','9');
     foreach($users as $user){
     $user -> feel = 0;
     $user -> save();
     };
     return view('map');
    }
    
    // Area2のエアコン
    public function d2()
    {
     $users = User::all()->where('team','>=','10')->where('team','<=','15');
     foreach($users as $user){
     $user -> feel = 0;
     $user -> save();
     };
     return view('map');
    }
    
    public function c2()
    {
     $users = User::all()->where('team','>=','16')->where('team','<=','21');
     foreach($users as $user){
     $user -> feel = 0;
     $user -> save();
     };
     return view('map');
    }
    
    public function b2()
    {
     $users = User::all()->where('team','>=','22')->where('team','<=','27');
     foreach($users as $user){
     $user -> feel = 0;
     $user -> save();
     };
     return view('map');
    }
    
    public function a2()
    {
     $users = User::all()->where('team','>=','28')->where('team','<=','33');
     foreach($users as $user){
     $user -> feel = 0;
     $user -> save();
     };
     return view('map');
    }
    
    // Area1のエアコン
    public function d1()
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
    
    public function b1()
    {
     $users = User::all()->where('team','>=','36')->where('team','<=','37');
     foreach($users as $user){
     $user -> feel = 0;
     $user -> save();
     };
     return view('map');
    }
    
    public function c1()
    {
     $users = User::all()->where('team','>=','42')->where('team','<=','43');
     foreach($users as $user){
     $user -> feel = 0;
     $user -> save();
     };
     return view('map');
    }
    
    public function a1()
    {
     $users1 = User::all()->where('team','>=','40')->where('team','<=','41');
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
