<?php
$user = \Auth::user();
$userteam = $user->team;  
?>

<div class = 'airconbtnparent'>
        <a href="{{ route('manipulation.get')}}">
            Your air conditioner is
             <div class='aircon'>
                @if($userteam == 1 ||   $userteam == 2 || $userteam == 4)
               
                         1A
                
                @elseif($userteam == 7)
            
                        1B
        
                @elseif($userteam == 3)
                
                        2A
                
                @elseif($userteam == 5 ||  $userteam == 6 || $userteam == 8 || $userteam == 9)
                
                        2B
                
                
                
               
                @elseif($userteam == 10 ||   $userteam == 11 || $userteam == 14 || $userteam == 15 )        
                
                        2A
                
                @elseif($userteam == 18 ||   $userteam == 19)
               
                        2B
                
                @elseif($userteam == 12 ||   $userteam == 13 || $userteam == 16 || $userteam == 17 )
               
                        2C
                
                @elseif($userteam == 20 ||   $userteam == 21)
                
                        2D
                
                
                 
                @elseif($userteam == 22 ||   $userteam == 26)
            
                        2C
         
                @elseif($userteam == 30)
               
                        2D
                
                @elseif($userteam == 23 || $userteam == 24 || $userteam == 25 || $userteam == 27 || $userteam == 28 || $userteam == 29)
               
                        3A
               
                @elseif($userteam == 31 || $userteam == 32 || $userteam == 33)
               
                        3B
               
                
                
                @elseif($userteam == 34 ||   $userteam == 35 || $userteam == 38 || $userteam == 39 )
               
                        4A
                
                @elseif($userteam == 42 || $userteam == 43)
            
                        4B
              
                @elseif($userteam == 36 ||  $userteam == 37 || $userteam == 41)
            
                        4C
             
                @elseif($userteam == 40 ||  $userteam == 44 || $userteam == 45)
               
                        4D
                @endif
        </div>
    </a>       
</div>