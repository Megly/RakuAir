@extends('layouts.app')

@include('commons.newnavbar')

@section('content')

<div class="icon-image">
     <a href="{{route('map.get')}}"><img class="logo2" src="/images/RakuAirBlack.png"></img></a>
</div>

<div class="screen">
    <p><span class="red-tribe">Area A</span></p>
    <p>　</p>
</div>

<div class="tribe">

<?php
$i = 0;
$redteam = array(
        1 => 'team1',
        2 => 'team2',
        3 => 'team3',
        4 => 'team4',
        5 => 'team5',
        6 => 'team6',
        7 => 'team7',
        8 => 'team8',
        9 => 'team9');

$user = \Auth::user();
$userteam = $user->team;        
 ${"team".$i} = NULL;
    for ($i=1; $i<10; $i++){
 ${"team".$i} = App\User::all()->where('team',$i);
 	 ${"sum".$i} = 0;
 	foreach( ${"team".$i} as $feelings){
	${"sum".$i} = ${"sum".$i} + $feelings->feel;
}


     if(${"sum".$i}>=7)

	    echo '<p style="width:32%; float:left; height:20%; margin:5px 5px; background-color:#ff8e8e !important" class="veryhot-tribe">'.$redteam[$i].'</p>';
     elseif( 7 > ${"sum".$i} && ${"sum".$i} >= 3)
	     echo '<p style="width:32%; float:left; height:20%; margin:5px 5px; background-color:#f9bdbd !important" class="hot-tribe">'.$redteam[$i].'</p>';
     elseif( -3 >= ${"sum".$i} && ${"sum".$i} >= -7)
	     echo '<p style="width:32%; float:left; height:20%; margin:5px 5px; background-color:#bdd2f9 !important" class="cold-tribe">'.$redteam[$i].'</p>';
     elseif(${"sum".$i} <= -7)
	     echo '<p style="width:32%; float:left; height:20%; margin:5px 5px; background-color:#8ec6ff !important" class="verycold-tribe">'.$redteam[$i].'</p>';
     else
	     echo '<p style="width:32%; float:left; height:20%; margin:5px 5px; background-color:#a8ffda !important" class="com-tribe">'.$redteam[$i].'</p>';

    
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