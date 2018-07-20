@extends('layouts.app')

@include('commons.newnavbar')

@section('content')

<div class="icon-image">
     <a href="{{route('map.get')}}"><img class="logo2" src="/images/RakuAirBlack.png"></img></a>
</div>

<div class="screen">
    <p><span class="pink-tribe">Pink tribe's map</span></p>
    <p>---------- Screen ----------</p>
</div>

<div class="tribe">
<?php
$i = 0;
$pinkteam = array (
        22 => 'Daichi+no+Megumi',
        23 => 'SAKEty (酒ティー)',
        24 => 'Team One',
        25 => 'TK Kingdom',
        26 => 'YAKITOMATO',
        27 => 'Kiwami Pudding',
        28 => 'Team Sekaikan',
        29 => 'Jasmine',
        30 => 'HRM',
        31 => '御富士も梅雨',
        32 => 'JIAOZI',
        33 => 'いいとも');
        
 ${"team".$i} = NULL;
 
for ($i=22; $i<34; $i++){
 ${"team".$i} = App\User::all()->where('team',$i);
 	 ${"sum".$i} = 0;
 	foreach( ${"team".$i} as $feelings){
	${"sum".$i} = ${"sum".$i} + $feelings->feel;
}

     if(${"sum".$i}>=10)
	    echo '<p style="width:24%; float:left; height:20%; margin:5px 5px; background-color:#ff8e8e !important" class="veryhot-tribe">'.$pinkteam[$i].'</p>';
     elseif( 10 > ${"sum".$i} && ${"sum".$i} >= 5)
	     echo '<p style="width:24%; float:left; height:20%; margin:5px 5px; background-color:#f9bdbd !important" class="hot-tribe">'.$pinkteam[$i].'</p>';
     elseif( -5 >= ${"sum".$i} && ${"sum".$i} >= -10)
	     echo '<p style="width:24%; float:left; height:20%; margin:5px 5px; background-color:#bdd2f9 !important" class="cold-tribe">'.$pinkteam[$i].'</p>';
     elseif(${"sum".$i} <= -10)
	     echo '<p style="width:24%; float:left; height:20%; margin:5px 5px; background-color:#8ec6ff !important" class="verycold-tribe">'.$pinkteam[$i].'</p>';
     else
	     echo '<p style="width:24%; float:left; height:20%; margin:5px 5px; background-color:#a8ffda !important" class="com-tribe">'.$pinkteam[$i].'</p>';
    
    
};

	?>
</div>

    <!--色説明-->
   <div class="tribecolor">
        <img class="veryhot" src="/images/veryhot.png"></img>:very hot
        <img class="hot" src="/images/hot.png"></img> :hot
        <img class="good" src="/images/good.png"></img> :comfortable
        <img class="cold" src="/images/cold.png"></img> :cold
        <img class="verycold" src="/images/verycold.png"></img> :very cold
   </div>

@endsection