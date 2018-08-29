@extends('layouts.app')

@include('commons.newnavbar')

@section('content')
<div class="icon-image">
     <a href="{{route('map.get')}}"><img class="logo2" src="/images/RakuAirBlack.png"></img></a>
</div>

<p class="maptitle">　</p>

<div class="screen">
    <p>----------Screen----------</p>
</div>

<?php
 $red = App\User::all()->where('team','>=','1')->where('team','<=','16');
 $sumred = 0;
 	foreach($red as $feelings){
		$sumred = $sumred + $feelings->feel;
		};
		
 $yellow = App\User::all()->where('team','>=','17')->where('team','<=','32');
 $sumyellow = 0;
 foreach($yellow as $feelings){
		$sumyellow = $sumyellow + $feelings->feel;
 		};
 		
//  $pink = App\User::all()->where('team','>=','22')->where('team','<=','33');
//  $sumpink = 0;
//  foreach($pink as $feelings){
// 		$sumpink = $sumpink + $feelings->feel;
// 		};
		
//  $purple = App\User::all()->where('team','>=','34')->where('team','<=','45');
//  $sumpurple = 0;
//  foreach($purple as $feelings){
// 		$sumpurple = $sumpurple + $feelings->feel;
// 		};
		
$array =array(
 $sumred => '楽市',
 $sumyellow => '楽座'
//  $sumpink => 'C',
//  $sumpurple => 'D'
)
	?>



<div class='map-child2'>
  <div class="maptama">
	@foreach($array as $sum => $tribe)
	@if($sum>=60)
	     <p><span class="blink-veryhot"><?php echo $tribe ?> is Super Hot</span></p>
     @elseif( 30 > $sum && $sum >= 20)
	     <p><span class="blink-hot"><?php echo $tribe ?> is Hot</span></p>
     @elseif( -20 >= $sum && $sum >= -30)
	     <p><span class="blink-cold"><?php echo $tribe ?> is Cold</span></p>
     @elseif($sum <= -30)
	     <p><span class="blink-verycold"><?php echo $tribe ?> is Super Cold</span></p>
     @else
	     <p><?php echo $tribe ?> is Comfortable</p>
     @endif
	 @endforeach
  </div>

  <div class="map-detail">
        <a class="btn-master paper paper-raise-flatten btn-red" href="{{route('red.get')}}">楽市's detail</a>
        <a class="btn-master paper paper-raise-flatten btn-yellow" href="{{route('yellow.get')}}">楽座's detail</a>
        <!--<a class="btn-master paper paper-raise-flatten btn-pink" href="{{route('pink.get')}}">Area <span class="pink-tribe">C</span> detail</a>-->
        <!--<a class="btn-master paper paper-raise-flatten btn-purple" href="{{route('purple.get')}}">Area <span class="purple-tribe">D</span> detail</a>-->

  </div>

<div class="tribe-brother">
<div class="red-tribe-map">
<?php
$i = 0;
$redteam = array(
        1 => 'とんこつ',
        2 => 'アルプスの龍角散',
        3 => 'HOP',
        4 => 'BAMBOO!!',
        5 => 'ぽてさら',
        6 => 'かずのこ',
        7 => 'POCO',
        8 => 'miffy',
        9 => '???(はてなさん)',
        10 => 'LAMBORGHINI',
        11 => '貝',
        12 => 'Mars',
        13 => 'PinkGyoza',
        14 => 'GEYSER',
        15 => '夏',
        16 => '駒込ピペッツ');
        
 ${"team".$i} = NULL;
    for ($i=1; $i<7; $i++){
 ${"team".$i} = App\User::all()->where('team',$i);
 	 ${"sum".$i} = 0;
 	foreach( ${"team".$i} as $feelings){
	${"sum".$i} = ${"sum".$i} + $feelings->feel;
}


     if(${"sum".$i}>=7)
	    echo '<p style="width:15.3%; float:left; height:15%; margin:5px 5px; background-color:#ff8e8e !important" class="veryhot-tribe">'.'</p>';
     elseif( 7 > ${"sum".$i} && ${"sum".$i} >= 3)
	     echo '<p style="width:15.3%; float:left; height:15%; margin:5px 5px; background-color:#f9bdbd !important" class="hot-tribe">'.'</p>';
     elseif( -3 >= ${"sum".$i} && ${"sum".$i} >= -7)
	     echo '<p style="width:15.3%; float:left; height:15%; margin:5px 5px; background-color:#bdd2f9 !important" class="cold-tribe">'.'</p>';
     elseif(${"sum".$i} <= -7)
	     echo '<p style="width:15.3%; float:left; height:15%; margin:5px 5px; background-color:#8ec6ff !important" class="verycold-tribe">'.'</p>';
     else
	     echo '<p style="width:15.3%; float:left; height:15%; margin:5px 5px; background-color:#a8ffda !important" class="com-tribe">'.'</p>';
    
};

${"team".$i} = NULL;
    for ($i=7; $i<17; $i++){
 ${"team".$i} = App\User::all()->where('team',$i);
 	 ${"sum".$i} = 0;
 	foreach( ${"team".$i} as $feelings){
	${"sum".$i} = ${"sum".$i} + $feelings->feel;
}


     if(${"sum".$i}>=7)
	    echo '<p style="width:18.5%; float:left; height:15%; margin:5px 5px; background-color:#ff8e8e !important" class="veryhot-tribe">'.'</p>';
     elseif( 7 > ${"sum".$i} && ${"sum".$i} >= 3)
	     echo '<p style="width:18.5%; float:left; height:15%; margin:5px 5px; background-color:#f9bdbd !important" class="hot-tribe">'.'</p>';
     elseif( -3 >= ${"sum".$i} && ${"sum".$i} >= -7)
	     echo '<p style="width:18.5%; float:left; height:15%; margin:5px 5px; background-color:#bdd2f9 !important" class="cold-tribe">'.'</p>';
     elseif(${"sum".$i} <= -7)
	     echo '<p style="width:18.5%; float:left; height:15%; margin:5px 5px; background-color:#8ec6ff !important" class="verycold-tribe">'.'</p>';
     else
	     echo '<p style="width:18.5%; float:left; height:15%; margin:5px 5px; background-color:#a8ffda !important" class="com-tribe">'.'</p>';
    
};
?>
</div>


<div class="yellow-tribe-map">
<?php
$i = 0;
$yellowteam = array(
        17 => 'OneBridge',
        18 => 'TAN-SHAN-SHUI',
        19 => 'SKOKTY',
        20 => 'WONDA',
        21 => 'Harmonin',
        22 => 'Mexico',
        23 => "Ocean's 6",
        24 => 'Karats',
        25 => 'ぺんぎん',
        26 => 'TeamJ',
        27 => 'Vingt-Sept',
        28 => '万衆一心',
        29 => 'コアラのMARCH',
        30 => 'ちーむすまいる',
        31 => 'KADOCCO',
        32 => 'JETSTREAM');
        
 ${"team".$i} = NULL;
 for ($i=17; $i<21; $i++){
 ${"team".$i} = App\User::all()->where('team',$i);
 	 ${"sum".$i} = 0;
 	foreach( ${"team".$i} as $feelings){
	${"sum".$i} = ${"sum".$i} + $feelings->feel;
}

     if(${"sum".$i}>=7)
	    echo '<p style="width:23.6%; float:left; height:15%; margin:5px 5px; background-color:#ff8e8e !important" class="veryhot-tribe">'.'</p>';
     elseif( 7 > ${"sum".$i} && ${"sum".$i} >= 3)
	     echo '<p style="width:23.6%; float:left; height:15%; margin:5px 5px; background-color:#f9bdbd !important" class="hot-tribe">'.'</p>';
     elseif( -3 >= ${"sum".$i} && ${"sum".$i} >= -7)
	     echo '<p style="width:23.6%; float:left; height:15%; margin:5px 5px; background-color:#bdd2f9 !important" class="cold-tribe">'.'</p>';
     elseif(${"sum".$i} <= -7)
	     echo '<p style="width:23.6%; float:left; height:15%; margin:5px 5px; background-color:#8ec6ff !important" class="verycold-tribe">'.'</p>';
     else
	     echo '<p style="width:23.6%; float:left; height:15%; margin:5px 5px; background-color:#a8ffda !important" class="com-tribe">'.'</p>';
};

${"team".$i} = NULL;
 for ($i=21; $i<33; $i++){
 ${"team".$i} = App\User::all()->where('team',$i);
 	 ${"sum".$i} = 0;
 	foreach( ${"team".$i} as $feelings){
	${"sum".$i} = ${"sum".$i} + $feelings->feel;
}

     if(${"sum".$i}>=7)
	    echo '<p style="width:15.3%; float:left; height:15%; margin:5px 5px; background-color:#ff8e8e !important" class="veryhot-tribe">'.'</p>';
     elseif( 7 > ${"sum".$i} && ${"sum".$i} >= 3)
	     echo '<p style="width:15.3%; float:left; height:15%; margin:5px 5px; background-color:#f9bdbd !important" class="hot-tribe">'.'</p>';
     elseif( -3 >= ${"sum".$i} && ${"sum".$i} >= -7)
	     echo '<p style="width:15.3%; float:left; height:15%; margin:5px 5px; background-color:#bdd2f9 !important" class="cold-tribe">'.'</p>';
     elseif(${"sum".$i} <= -7)
	     echo '<p style="width:15.3%; float:left; height:15%; margin:5px 5px; background-color:#8ec6ff !important" class="verycold-tribe">'.'</p>';
     else
	     echo '<p style="width:15.3%; float:left; height:15%; margin:5px 5px; background-color:#a8ffda !important" class="com-tribe">'.'</p>';
};
?>
</div>


</div>
</div>

    <!--色説明-->
   <div class="colorinfo">
        <img class="veryhot" src="/images/veryhot.png"></img> : Very hot
        <img class="hot" src="/images/hot.png"></img> : Hot
        <img class="good" src="/images/good.png"></img> : Comfortable
        <img class="cold" src="/images/cold.png"></img> : Cold
        <img class="verycold" src="/images/verycold.png"></img> : Very cold
   </div>

</div>


<footer class="col-lg-12 footermap">
            &copy; 2018 KEMKOW All Rights Reserved.
    </footer>
@endsection
