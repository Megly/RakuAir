@extends('layouts.app')

@include('commons.newnavbar')

@section('content')

<div class="icon-image">
     <a href="{{route('map.get')}}"><img class="logo2" src="/images/RakuAirBlack.png"></img></a>
</div>

<div class="tribe">
<?php
$i = 0;
$purpleteam = array(
        34 => 'Mkpali(ムカパリ)',
        35 => 'Pocket 6',
        36 => 'チームきりんさん',
        37 => 'Koders',
        38 => 'JETS',
        39 => '新鮮グミ',
        40 => 'Medium Rare',
        41 => 'ひよこさん組',
        42 => 'A BANANA',
        43 => 'Noisyy',
        44 => 'Team Kay',
        45 => 'KEMKOW');
 ${"team".$i} = NULL;
for ($i=34; $i<46; $i++){
 ${"team".$i} = App\User::all()->where('team',$i);
 	 ${"sum".$i} = 0;
 	foreach( ${"team".$i} as $feelings){
	${"sum".$i} = ${"sum".$i} + $feelings->feel;
}
     if(${"sum".$i}>=10)
	    echo '<p style="background-color:#ff8e8e !important">'.$purpleteam[$i].' is ☀very hot☀</p>';
     elseif( 10 > ${"sum".$i} && ${"sum".$i} >= 5)
	     echo '<p style="background-color:#f9bdbd !important">'.$purpleteam[$i].' is ☀hot☀</p>';
     elseif( -5 >= ${"sum".$i} && ${"sum".$i} >= -10)
	     echo '<p style="background-color:#bdd2f9 !important">'.$purpleteam[$i].' is ❆cold❆</p>';
     elseif(${"sum".$i} <= -10)
	     echo '<p style="background-color:#8ec6ff !important">'.$purpleteam[$i].' is ❆very cold❆</p>';
     else
	     echo '<p style="background-color:#a8ffda !important">'.$purpleteam[$i].' is comfortable</p>';
    
    
};

	?>

</div>


@endsection