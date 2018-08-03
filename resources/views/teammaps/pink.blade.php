@extends('layouts.app')

@include('commons.newnavbar')

@section('content')

<div class="icon-image">
     <a href="{{route('map.get')}}"><img class="logo2" src="/images/RakuAirBlack.png"></img></a>
</div>

<div class="screen">
    <p><span class="pink-tribe">Area C</span></p>
    <p>　</p>
</div>

<div class="tribe">
<?php
$i = 0;
$pinkteam = array (
        22 => 'team22',
        23 => 'team23',
        24 => 'team24',
        25 => 'team25',
        26 => 'team26',
        27 => 'team27',
        28 => 'team28',
        29 => 'team29',
        30 => 'team30',
        31 => 'team31',
        32 => 'team32',
        33 => 'team33');

$user = \Auth::user();
$userteam = $user->team;        
 ${"team".$i} = NULL;
 
for ($i=22; $i<34; $i++){
 ${"team".$i} = App\User::all()->where('team',$i);
 	 ${"sum".$i} = 0;
 	foreach( ${"team".$i} as $feelings){
	${"sum".$i} = ${"sum".$i} + $feelings->feel;
}

     if(${"sum".$i}>=7)

	    echo '<p style="width:24%; float:left; height:20%; margin:5px 5px; background-color:#ff8e8e !important" class="veryhot-tribe">'.$pinkteam[$i].'</p>';
     elseif( 7 > ${"sum".$i} && ${"sum".$i} >= 3)
	     echo '<p style="width:24%; float:left; height:20%; margin:5px 5px; background-color:#f9bdbd !important" class="hot-tribe">'.$pinkteam[$i].'</p>';
     elseif( -3 >= ${"sum".$i} && ${"sum".$i} >= -7)
	     echo '<p style="width:24%; float:left; height:20%; margin:5px 5px; background-color:#bdd2f9 !important" class="cold-tribe">'.$pinkteam[$i].'</p>';
     elseif(${"sum".$i} <= -7)
	     echo '<p style="width:24%; float:left; height:20%; margin:5px 5px; background-color:#8ec6ff !important" class="verycold-tribe">'.$pinkteam[$i].'</p>';
     else
	     echo '<p style="width:24%; float:left; height:20%; margin:5px 5px; background-color:#a8ffda !important" class="com-tribe">'.$pinkteam[$i].'</p>';
    
    
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