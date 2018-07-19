<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'password', 'team', 'sex', 'size','feel'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function hot($userID){
        $user = App\User::find($userID);
        $user->feel = +1;
        $user->save();
        
    }

    public function cold($userID){
        $user = App\User::find($userID);
        $user->feel = -1;
        $user->save();
    }
    
    public function clear1a(){
     $user = User::all()->where('team','>=','1')->where('team','<=','3');
     $user -> feel = 0;
     $user -> update();
    }
    
    
}
