@extends('layouts.app')

@include('commons.newnavbar')

@section('content')

<div class="icon-image">
     <a href="{{route('map.get')}}"><img class="logo2" src="/images/RakuAirBlack.png"></img></a>
</div>

<div class="tribe">
<?php
$i = 0;
$pinkteam = array (
        22 => 'Daichi+no+Megumi',
        23 => 'YAKITOMATO',
        24 => 'HRM',
        25 => 'SAKEty (酒ティー)',
        26 => 'Kiwami Pudding',
        27 => '御富士も梅雨',
        28 => 'Team One',
        29 => 'Team Sekaikan',
        30 => 'JIAOZI',
        31 => 'TK Kingdom',
        32 => 'Jasmine',
        33 => 'いいとも');
        
 ${"team".$i} = NULL;
 
for ($i=22; $i<34; $i++){
 ${"team".$i} = App\User::all()->where('team',$i);
 	 ${"sum".$i} = 0;
 	foreach( ${"team".$i} as $feelings){
	${"sum".$i} = ${"sum".$i} + $feelings->feel;
}
     if(${"sum".$i}>=10)
	    echo '<p style="background-color:#ff8e8e !important">'.$pinkteam[$i].' is ☀very hot☀</p>';
     elseif( 10 > ${"sum".$i} && ${"sum".$i} >= 5)
	     echo '<p style="background-color:#f9bdbd !important">'.$pinkteam[$i].' is ☀hot☀</p>';
     elseif( -5 >= ${"sum".$i} && ${"sum".$i} >= -10)
	     echo '<p style="background-color:#bdd2f9 !important">'.$pinkteam[$i].' is ❆cold❆</p>';
     elseif(${"sum".$i} <= -10)
	     echo '<p style="background-color:#8ec6ff !important">'.$pinkteam[$i].' is ❆very cold❆</p>';
     else
	     echo '<p style="background-color:#a8ffda !important">'.$pinkteam[$i].' is comfortable</p>';
    
    
};

	?>



</div>

@endsection