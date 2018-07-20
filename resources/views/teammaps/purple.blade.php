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
        34 => 'Mkpali(ムカパリ)',
        35 => 'Koders',
        36 => 'Medium Rare',
        37 => 'Noisyy',
        38 => 'Pocket 6',
        39 => 'JETS',
        40 => 'ひよこさん組',
        41 => 'Team Kay',
        42 => 'チームきりんさん',
        43 => '新鮮グミ',
        44 => 'A BANANA',
        45 => 'KEMKOW');
        
 ${"team".$i} = NULL;
 
for ($i=34; $i<46; $i++){
 ${"team".$i} = App\User::all()->where('team',$i);
 	 ${"sum".$i} = 0;
 	foreach( ${"team".$i} as $feelings){
	${"sum".$i} = ${"sum".$i} + $feelings->feel;
}
     
     if(${"sum".$i}>=10)
	    echo '<p style="width:24%; float:left; height:20%; margin:5px 5px; background-color:#ff8e8e !important" class="veryhot-tribe"">'.$purpleteam[$i].'</p>';
     elseif( 10 > ${"sum".$i} && ${"sum".$i} >= 5)
	     echo '<p style="width:24%; float:left; height:20%; margin:5px 5px; background-color:#f9bdbd !important" class="hot-tribe">'.$purpleteam[$i].'</p>';
     elseif( -5 >= ${"sum".$i} && ${"sum".$i} >= -10)
	     echo '<p style="width:24%; float:left; height:20%; margin:5px 5px; background-color:#bdd2f9 !important" class="cold-tribe">'.$purpleteam[$i].'</p>';
     elseif(${"sum".$i} <= -10)
	     echo '<p style="width:24%; float:left; height:20%; margin:5px 5px; background-color:#8ec6ff !important" class="verycold-tribe">'.$purpleteam[$i].'</p>';
     else
	     echo '<p style="width:24%; float:left; height:20%; margin:5px 5px; background-color:#a8ffda !important" class="com-tribe">'.$purpleteam[$i].'</p>';
    
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