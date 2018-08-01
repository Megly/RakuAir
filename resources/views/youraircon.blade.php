<?php
$user = \Auth::user();
$userteam = $user->team;  
?>

<div class = 'airconbtnparent'>
        <a href="{{ route('manipulation.get')}}">
            Your A/C
             <div class='aircon'>
                @if($userteam == 1 || $userteam == 2 || $userteam == 4)
               <div class="aircon-red">
                         3D</div>
                
                @elseif($userteam == 3 || $userteam == 5 ||  $userteam == 6)
               <div class="aircon-red">
                        3B</div>
        
                @elseif($userteam == 7)
                <div class="aircon-red">
                        3C</div>
                
                @elseif($userteam == 8 || $userteam == 9)
                <div class="aircon-red">
                        3A</div>
                


                @elseif($userteam == 10 || $userteam == 11 || $userteam == 12 || $userteam == 13 || $userteam == 14 || $userteam == 15)        
                <div class="aircon-yellow">
                        2D</div>
                
                @elseif($userteam == 16 || $userteam == 17 || $userteam == 18 || $userteam == 19 || $userteam == 20 || $userteam == 21)
               <div class="aircon-yellow">
                        2C</div>
                        
                        
                
                @elseif($userteam == 22 || $userteam == 23 || $userteam == 24 || $userteam == 25 || $userteam == 26 || $userteam == 27)
               <div class="aircon-pink">
                        2B</div>
                
                @elseif($userteam == 28 || $userteam == 29 || $userteam == 30 || $userteam == 31 || $userteam == 32 || $userteam == 33)
                <div class="aircon-pink">
                        2A</div>
                
       
       
                @elseif($userteam == 34 || $userteam == 35 || $userteam == 38 || $userteam == 39)
                <div class="aircon-purple">
                        1D</div>
                
                @elseif($userteam == 36 || $userteam == 37)
                <div class="aircon-purple">
                        1B</div>
              
                @elseif($userteam == 42 || $userteam == 43)
                <div class="aircon-purple">
                        1C</div>
             
                @elseif($userteam == 40 || $userteam == 41 || $userteam == 44 || $userteam == 45)
                <div class="aircon-purple">
                        1A</div>
                @endif
        </div>
    </a>       
</div>