@extends('layouts.app')

@include('commons.newnavbar')

@section('content')

<div class="icon-image">
     <a href="{{route('map.get')}}"><img class="logo2" src="/images/RakuAirBlack.png"></img></a>
</div>

<div class="screen">
    <p><span class="purple-tribe">Purple tribe's map</span></p>
    <p>---------- Screen ----------</p>
</div>

<div class="tribe">
<?php
$i = 0;
$purpleteam = array(
        34 => '34',
        35 => '35',
        36 => '36',
        37 => '37',
        38 => '38',
        39 => '39',
        40 => '40',
        41 => '41',
        42 => '42',
        43 => '43',
        44 => '44',
        45 => '45');
        
 ${"team".$i} = NULL;
$user = \Auth::user();
$userteam = $user->team;

 
for ($i=34; $i<46; $i++){
 ${"team".$i} = App\User::all()->where('team',$i);
 	 ${"sum".$i} = 0;
 	foreach( ${"team".$i} as $feelings){
	${"sum".$i} = ${"sum".$i} + $feelings->feel;
}
     
     if(${"sum".$i}>=7)

	    echo '<p style="width:24%; float:left; height:20%; margin:5px 5px; background-color:#ff8e8e !important" class="veryhot-tribe"">'.$purpleteam[$i].'</p>';
     elseif( 7 > ${"sum".$i} && ${"sum".$i} >= 3)
	     echo '<p style="width:24%; float:left; height:20%; margin:5px 5px; background-color:#f9bdbd !important" class="hot-tribe">'.$purpleteam[$i].'</p>';
     elseif( -3 >= ${"sum".$i} && ${"sum".$i} >= -7)
	     echo '<p style="width:24%; float:left; height:20%; margin:5px 5px; background-color:#bdd2f9 !important" class="cold-tribe">'.$purpleteam[$i].'</p>';
     elseif(${"sum".$i} <= -7)
	     echo '<p style="width:24%; float:left; height:20%; margin:5px 5px; background-color:#8ec6ff !important" class="verycold-tribe">'.$purpleteam[$i].'</p>';
     else
	     echo '<p style="width:24%; float:left; height:20%; margin:5px 5px; background-color:#a8ffda !important" class="com-tribe">'.$purpleteam[$i].'</p>';
    
};

	?>

<div class="mod">　</div>
 <!--色説明-->
   <div class="colorinfo">
        <img class="veryhot" src="/images/veryhot.png"></img> : Very hot
        <img class="hot" src="/images/hot.png"></img> : Hot
        <img class="good" src="/images/good.png"></img> : Comfortable
        <img class="cold" src="/images/cold.png"></img> : Cold
        <img class="verycold" src="/images/verycold.png"></img> : Very cold
   </div>
   
<footer class="col-lg-12 footermaps">
            &copy; 2018 KEMKOW All Rights Reserved.
</footer>


@endsection