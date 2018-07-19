@extends('layouts.app')

@include('commons.newnavbar')

@section('content')

<div class="icon-image">
     <a href="{{route('map.get')}}"><img class="logo2" src="/images/RakuAirBlack.png"></img></a>
</div>

<div class="tribe">
<?php
$i = 0;
$yellowteam = array(
        10 => 'Eternal Dragon',
        11 => '卍Olive卍',
        12 => 'なだ万',
        13 => 'kara-age',
        14 => 'Porsche',
        15 => 'TERAKOYA',
        16 => 'Y. Nature',
        17 => 'Amigos',
        18 => 'Letian panda',
        19 => 'Avengers',
        20 => 'CodeWars',
        21 => 'Pandanity');
 ${"team".$i} = NULL;
for ($i=10; $i<22; $i++){
 ${"team".$i} = App\User::all()->where('team',$i);
 	 ${"sum".$i} = 0;
 	foreach( ${"team".$i} as $feelings){
	${"sum".$i} = ${"sum".$i} + $feelings->feel;
}
     if(${"sum".$i}>=10)
	    echo '<p style="background-color:#ff8e8e !important">'.$yellowteam[$i].' is ☀very hot☀</p>';
     elseif( 10 > ${"sum".$i} && ${"sum".$i} >= 5)
	     echo '<p style="background-color:#f9bdbd !important">'.$yellowteam[$i].' is ☀hot☀</p>';
     elseif( -5 >= ${"sum".$i} && ${"sum".$i} >= -10)
	     echo '<p style="background-color:#bdd2f9 !important">'.$yellowteam[$i].' is ❆cold❆</p>';
     elseif(${"sum".$i} <= -10)
	     echo '<p style="background-color:#8ec6ff !important">'.$yellowteam[$i].' is ❆very cold❆</p>';
     else
	     echo '<p style="background-color:#a8ffda !important">'.$yellowteam[$i].' is comfortable</p>';
    
};

	?>


</div>

@endsection