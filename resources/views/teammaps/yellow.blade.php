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
        11 => 'kara-age',
        12 => '卍Olive卍',
        13 => 'Porsche',
        14 => 'なだ万',
        15 => 'TERAKOYA',
        16 => 'Y. Nature',
        17 => 'Avengers',
        18 => 'Amigos',
        19 => 'CodeWars',
        20 => 'Letian panda',
        21 => 'Pandanity');
 ${"team".$i} = NULL;
for ($i=10; $i<22; $i++){
 ${"team".$i} = App\User::all()->where('team',$i);
 	 ${"sum".$i} = 0;
 	foreach( ${"team".$i} as $feelings){
	${"sum".$i} = ${"sum".$i} + $feelings->feel;
}
     if(${"sum".$i}>=10)
	    echo '<p style="background-color:#ff8e8e !important">'.$yellowteam[$i].' is ☀very hot☀　2℃下げましょう</p>';
     elseif( 10 > ${"sum".$i} && ${"sum".$i} >= 5)
	     echo '<p style="background-color:#f9bdbd !important">'.$yellowteam[$i].' is ☀hot☀　1℃下げましょう</p>';
     elseif( -5 >= ${"sum".$i} && ${"sum".$i} >= -10)
	     echo '<p style="background-color:#bdd2f9 !important">'.$yellowteam[$i].' is ❆cold❆　1℃上げましょう</p>';
     elseif(${"sum".$i} <= -10)
	     echo '<p style="background-color:#8ec6ff !important">'.$yellowteam[$i].' is ❆very cold❆　2℃上げましょう</p>';
     else
	     echo '<p style="background-color:#a8ffda !important">'.$yellowteam[$i].' is comfortable</p>';
    
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