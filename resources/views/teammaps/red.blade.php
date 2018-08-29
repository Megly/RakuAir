@extends('layouts.app')

@include('commons.newnavbar')

@section('content')

<div class="icon-image">
     <a href="{{route('map.get')}}"><img class="logo2" src="/images/RakuAirBlack.png"></img></a>
</div>

<div class="screen">
    <p><span class="red-tribe">楽市</span></p>
    <p>　</p>
</div>

<div class="tribe">

<?php
$i = 0;
$redteam = array(
        1 => 'とんこつ',
        2 => 'BAMBOO!!',
        3 => 'POCO',
        4 => 'LAMBORGHINI',
        5 => 'PinkGyoza',
        6 => '駒込ピペッツ',
        7 => 'アルプスの龍角散',
        8 => 'ぽてさら',
        9 => 'miffy',
        10 => '貝',
        11 => 'GEYSER',
        12 => 'HOP',
        13 => 'かずのこ',
        14 => '???(はてなさん)',
        15 => 'Mars',
        16 => '夏');

$user = \Auth::user();
$userteam = $user->team;        
 ${"team".$i} = NULL;
    for ($i=1; $i<7; $i++){
 ${"team".$i} = App\User::all()->where('team',$i);
 	 ${"sum".$i} = 0;
 	foreach( ${"team".$i} as $feelings){
	${"sum".$i} = ${"sum".$i} + $feelings->feel;
}


     if(${"sum".$i}>=7)

	    echo '<p style="width:15.8%; float:left; height:20%; margin:5px 5px; background-color:#ff8e8e !important" class="veryhot-tribe">'.$redteam[$i].'</p>';
     elseif( 7 > ${"sum".$i} && ${"sum".$i} >= 3)
	     echo '<p style="width:15.8%; float:left; height:20%; margin:5px 5px; background-color:#f9bdbd !important" class="hot-tribe">'.$redteam[$i].'</p>';
     elseif( -3 >= ${"sum".$i} && ${"sum".$i} >= -7)
	     echo '<p style="width:15.8%; float:left; height:20%; margin:5px 5px; background-color:#bdd2f9 !important" class="cold-tribe">'.$redteam[$i].'</p>';
     elseif(${"sum".$i} <= -7)
	     echo '<p style="width:15.8%; float:left; height:20%; margin:5px 5px; background-color:#8ec6ff !important" class="verycold-tribe">'.$redteam[$i].'</p>';
     else
	     echo '<p style="width:15.8%; float:left; height:20%; margin:5px 5px; background-color:#a8ffda !important" class="com-tribe">'.$redteam[$i].'</p>';

    
};

$user = \Auth::user();
$userteam = $user->team;        
 ${"team".$i} = NULL;
    for ($i=7; $i<17; $i++){
 ${"team".$i} = App\User::all()->where('team',$i);
 	 ${"sum".$i} = 0;
 	foreach( ${"team".$i} as $feelings){
	${"sum".$i} = ${"sum".$i} + $feelings->feel;
}


     if(${"sum".$i}>=7)

	    echo '<p style="width:19%; float:left; height:20%; margin:5px 5px; background-color:#ff8e8e !important" class="veryhot-tribe">'.$redteam[$i].'</p>';
     elseif( 7 > ${"sum".$i} && ${"sum".$i} >= 3)
	     echo '<p style="width:19%; float:left; height:20%; margin:5px 5px; background-color:#f9bdbd !important" class="hot-tribe">'.$redteam[$i].'</p>';
     elseif( -3 >= ${"sum".$i} && ${"sum".$i} >= -7)
	     echo '<p style="width:19%; float:left; height:20%; margin:5px 5px; background-color:#bdd2f9 !important" class="cold-tribe">'.$redteam[$i].'</p>';
     elseif(${"sum".$i} <= -7)
	     echo '<p style="width:19%; float:left; height:20%; margin:5px 5px; background-color:#8ec6ff !important" class="verycold-tribe">'.$redteam[$i].'</p>';
     else
	     echo '<p style="width:19%; float:left; height:20%; margin:5px 5px; background-color:#a8ffda !important" class="com-tribe">'.$redteam[$i].'</p>';

    
};
?>

</div>

        
        

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