<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function update()
    {
        $user = \Auth::user();
        if ($user->sex==0){
            if ($user->size==0){
                $user->feel= -6;
                $user->save();
            }
            elseif ($user->size==1){
                $user->feel = -4;
                $user->save();            
            }
            else{
                $user->feel= -2;
                $user->save();                 
            }
        }
        else{
            if ($user->size==0){
                $user->feel = -5;
                $user->save();
            }
            elseif ($user->size==1){
                $user->feel = -3;
                $user->save();            
            }
            else{
                $user->feel = -1;
                $user->save();                 
            }
        }
        
        
        if($user->team >= 1 && $user->team <=9 ){
            return view('teammaps.red');
        }
        elseif($user->team >= 10 && $user->team <= 21){
            return view('teammaps.yellow');
        }
        elseif($user->team >= 22 && $user->team <= 33){
            return view('teammaps.pink');
        }
        elseif($user->team >= 34 && $user->team <= 45){
            return view('teammaps.purple');
        }
        
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
