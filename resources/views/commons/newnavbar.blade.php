<?php
$user = \Auth::user();
$userteam = $user->team;  
?>

<div class="cp_cont">
    <div class="cp_offcm01">
            <input type="checkbox" id="cp_toggle01">
            <label for="cp_toggle01"></label>
        <div class="cp_menu">
        <ul>
            
             <li>
                <a href="{{ route('feel.get')}}">
                <span class="nav-text iconpos3">Your feeling</span>
                    <span class = "feelings"><?php
                    $you = Auth::user()->feel;
                    if ($you>0) {
                        echo "<img class='hot' src='images/hoticon2.png'></img>";}
                    elseif ($you==0) {
                        echo "<img class='hot' src='images/thumbup.png'></img>";}
                    else {
                        echo "<img class='hot' src='images/coldicon2.png'></img>";}
                    ?>
                </span>
                </a>
            </li>
            
            <li>
                <a href="{{ route('introduction.get')}}">
                   <i class="fa fa-info-circle fa-2x"></i>
                   <span class="nav-text iconpos"> About</span>
                </a>
            </li> 
            
            <li>
                <a href="{{ route('manipulation.get')}}">
                   <i class="fa fa-book fa-2x"></i>
                   <span class="nav-text iconpos"> How to</span>
                </a>
            </li> 
            
            
            <li>
                <a href="{{ route('feel.get')}}">
                   <i class="fa fa-heart fa-2x"></i>
                   <span class="nav-text iconpos"> Feel</span>
                </a>
            </li>
            
            <li>
                <a href="{{ route('result.get')}}">
                    <i class="fa fa-bar-chart-o fa-2x" style="font-size:26px"></i>
                    <span class="nav-text iconpos2"> Graph</span>
                </a>
            </li>
                
            <li>
                <a href="{{ route('map.get')}}">
                    <i class="fa fa-map-marker fa-2x" style="font-size:35px"></i>
                    <span class="nav-text iconpos"> Map</span>
                </a>
            </li>
            
            
            <li><div class='airconnn'>
                    @include('youraircon')
            </div>
            </li>
            
             <li>
                <a href="{{ route('logout.get')}}">
                    <i class="fa fa-power-off fa-2x"></i>
                    <span class="nav-text iconpos"> Logout</span>

                </a>
            </li>
            
             <li>
            <span class="nav-text">
                    @include('reset')
            </span>
            </li>
            
        </ul>
        </div>
    </div>
</div>

