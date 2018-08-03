@extends('layouts.app')

@include('commons.newnavbar')

@section('content')

<div class="icon-image">
     <a href="{{route('map.get')}}"><img class="logo2" src="/images/RakuAirBlack.png"></img></a>
</div>

<div class="screen">
    <p><span class="yellow-tribe">Area B</span></p>
    <p>　</p>
</div>

<div class="tribe">

<?php
$i = 0;
$yellowteam = array(
        10 => 'team10',
        11 => 'team11',
        12 => 'team12',
        13 => 'team13',
        14 => 'team14',
        15 => 'team15',
        16 => 'team16',
        17 => 'team17',
        18 => 'team18',
        19 => 'team19',
        20 => 'team20',
        21 => 'team21');

$user = \Auth::user();
$userteam = $user->team;

 ${"team".$i} = NULL;
for ($i=10; $i<22; $i++){
 ${"team".$i} = App\User::all()->where('team',$i);
 	 ${"sum".$i} = 0;
 	foreach( ${"team".$i} as $feelings){
	${"sum".$i} = ${"sum".$i} + $feelings->feel;
}

     if(${"sum".$i}>=7)

	    echo '<p style="width:24%; float:left; height:20%; margin:5px 5px; background-color:#ff8e8e !important" class="veryhot-tribe">'.$yellowteam[$i].'</p>';
     elseif( 7 > ${"sum".$i} && ${"sum".$i} >= 3)
	     echo '<p style="width:24%; float:left; height:20%; margin:5px 5px; background-color:#f9bdbd !important" class="hot-tribe">'.$yellowteam[$i].'</p>';
     elseif( -3 >= ${"sum".$i} && ${"sum".$i} >= -7)
	     echo '<p style="width:24%; float:left; height:20%; margin:5px 5px; background-color:#bdd2f9 !important" class="cold-tribe">'.$yellowteam[$i].'</p>';
     elseif(${"sum".$i} <= -7)
	     echo '<p style="width:24%; float:left; height:20%; margin:5px 5px; background-color:#8ec6ff !important" class="verycold-tribe">'.$yellowteam[$i].'</p>';
     else
	     echo '<p style="width:24%; float:left; height:20%; margin:5px 5px; background-color:#a8ffda !important" class="com-tribe">'.$yellowteam[$i].'</p>';

    
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