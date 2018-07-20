<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ClearController extends Controller
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
    
    public function b1()
    {
     $users = User::all()->where('team','4');
     foreach($users as $user){
     $user -> feel = 0;
     $user -> save();
     };
     return view('map');
    }
    
    public function a2()
    {
     $users1 = User::all()->where('team','=','5');
     $users2 = User::all()->where('team','>=','10')->where('team','<=','12');
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
    
    public function b2()
    {
     $users1 = User::all()->where('team','>=','6')->where('team','<=','9');
     foreach($users1 as $user){
     $user -> feel = 0;
     $user -> save();
     };
     $users2 = User::all()->where('team','>=','13')->where('team','<=','15');
     foreach($users2 as $user){
     $user -> feel = 0;
     $user -> save();
     };     
     return view('map');
    }
    
    public function c2()
    {
     $users1 = User::all()->where('team','>=','16')->where('team','<=','18');
     foreach($users1 as $user){
     $user -> feel = 0;
     $user -> save();
     };
     $users2 = User::all()->where('team','22');
     foreach($users2 as $user){
     $user -> feel = 0;
     $user -> save();
     };
     return view('map');
    }
    
    public function d2()
    {
     $users1 = User::all()->where('team','>=','19')->where('team','<=','21');
     foreach($users1 as $user){
     $user -> feel = 0;
     $user -> save();
     };
     $users2 = User::all()->where('team','>=','23')->where('team','<=','24');
     foreach($users2 as $user){
     $user -> feel = 0;
     $user -> save();
     };
     return view('map');
    }
    
    public function a3()
    {
     $users = User::all()->where('team','>=','25')->where('team','<=','28');
     foreach($users as $user){
     $user -> feel = 0;
     $user -> save();
     };
     return view('map');
    }    

    public function b3()
    {
     $users = User::all()->where('team','>=','29')->where('team','<=','33');
     foreach($users as $user){
     $user -> feel = 0;
     $user -> save();
     };
     return view('map');
    }
    
    public function a4()
    {
     $users = User::all()->where('team','>=','34')->where('team','<=','37');
     foreach($users as $user){
     $user -> feel = 0;
     $user -> save();
     };
     return view('map');
    }
    
    public function b4()
    {
     $users = User::all()->where('team','>=','38')->where('team','<=','39');
     foreach($users as $user){
     $user -> feel = 0;
     $user -> save();
     };
     return view('map');
    }    
    
    public function c4()
    {
     $users = User::all()->where('team','>=','40')->where('team','<=','42');
     foreach($users as $user){
     $user -> feel = 0;
     $user -> save();
     };
     return view('map');
    }
    
    public function d4()
    {
     $users = User::all()->where('team','>=','43')->where('team','<=','44');
     foreach($users as $user){
     $user -> feel = 0;
     $user -> save();
     };
     return view('map');
    }
    
    public function g4()
    {
     $users = User::all()->where('team','=','45');
     foreach($users as $user){
     $user -> feel = 0;
     $user -> save();
     };
     return view('map');
    }
}
