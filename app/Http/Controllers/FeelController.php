<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class FeelController extends Controller
{
    public function store(Request $request)
    {

        $user = \Auth::user();

        $user->feel = $request->feel;

        $user->save();
}

protected $redirectTo = 'HotCold';
}