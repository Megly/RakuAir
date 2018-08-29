<?php
$user = \Auth::user();
$userteam = $user->team;  
?>

<div class = 'airconbtnparent'>
        <a href="{{ route('manipulation.get')}}">
            Your A/C
             <div class='aircon'>
                @if($userteam == 1 || $userteam == 7)
               <div class="aircon-red">
                         1A</div>
                
                @elseif($userteam == 12)
               <div class="aircon-red">
                        1B</div>
        
                @elseif($userteam == 2 || $userteam == 3 || $userteam == 4 || $userteam == 8 || $userteam == 9)
                <div class="aircon-red">
                        1C</div>
                
                @elseif($userteam == 10 || $userteam == 13 || $userteam == 14 || $userteam == 15)
                <div class="aircon-red">
                        1D</div>
                        
                        
                
                @elseif($userteam == 5 || $userteam == 6 || $userteam == 11 || $userteam == 21)
                <div class="aircon-yellow">
                        2A</div>
                
                @elseif($userteam == 16 || $userteam == 27)
                <div class="aircon-yellow">
                        2B</div>


       
                @elseif($userteam == 17 || $userteam == 18 || $userteam == 19 || $userteam == 22 || $userteam == 23 || $userteam == 24)
                <div class="aircon-purple">
                        3A</div>
                
                @elseif($userteam == 28 || $userteam == 29 || $userteam == 30)
                <div class="aircon-purple">
                        3B</div>
              
                @elseif($userteam == 20 || $userteam == 25 || $userteam == 26)
                <div class="aircon-purple">
                        3C</div>
             
                @elseif($userteam == 31)
                <div class="aircon-purple">
                        3D</div>
                @endif
        </div>
    </a>       
</div>