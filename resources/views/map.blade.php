@extends('layouts.app')

@include('commons.newnavbar')

@section('content')
<div class="icon-image">
     <a href="{{route('map.get')}}"><img class="logo2" src="/images/RakuAirBlack.png"></img></a>
</div>


<?php
 $red = App\User::all()->where('team','>','0')->where('team','<','10');
 $sumred = 0;
 	foreach($red as $feelings){
		$sumred = $sumred + $feelings->feel;
		};
		
 $yellow = App\User::all()->where('team','>','9')->where('team','<','22');
 $sumyellow = 0;
 foreach($yellow as $feelings){
		$sumyellow = $sumyellow + $feelings->feel;
		};
 $pink = App\User::all()->where('team','>','21')->where('team','<','34');
 $sumpink = 0;
 foreach($pink as $feelings){
		$sumpink = $sumpink + $feelings->feel;
		};
 $purple = App\User::all()->where('team','>','33')->where('team','<','46');
 $sumpurple = 0;
 foreach($purple as $feelings){
		$sumpurple = $sumpurple + $feelings->feel;
		};
		
$array =array(
 $sumred => 'Red',
 $sumyellow => 'Yellow',
 $sumpink => 'Pink',
 $sumpurple => 'Purple')
	?>



<div class='map-child2'>
<div class="maptama">
	@foreach($array as $sum => $tribe)
	@if($sum>=60)
	     <p><span class="blink-veryhot"><?php echo $tribe ?> is Really Hot</span></p>
     @elseif( 60 > $sum && $sum >= 20)
	     <p><span class="blink-hot"><?php echo $tribe ?> is Hot</span></p>
     @elseif( -20 >= $sum && $sum >= -60)
	     <p><span class="blink-cold"><?php echo $tribe ?> is Cold</span></p>
     @elseif($sum <= -60)
	     <p><span class="blink-veryhot"><?php echo $tribe ?> is Cold</span></p>
     @else
	     <p><?php echo $tribe ?> is Comfortable</p>
     @endif
	    
	    @endforeach
</div>
<div class="map-detail">
        <a class="btn-master btn-jedi btn-red" href="{{route('red.get')}}"><span class="red-tribe">Red</span> tribe's map</a>
        <a class="btn-master btn-jedi btn-yellow" href="{{route('yellow.get')}}"><span class="yellow-tribe">Yellow</span> tribe's map</a>
        <a class="btn-master btn-jedi btn-pink" href="{{route('pink.get')}}"><span class="pink-tribe">Pink</span> tribe's map</a>
        <a class="btn-master btn-jedi btn-purple" href="{{route('purple.get')}}"><span class="purple-tribe">Purple</span> tribe's map</a>
</div>

<div class="tribe-brother">
<div class="red-tribe-map">
<?php
$i = 0;
$redteam = array(
        1 => 'youはたまご',
        2 => 'Ra Ra Ra RIZAP',
        3 => 'Siésta',
        4 => 'BoB',
        5 => 'ぽなるけみり',
        6 => 'Kolkata (カルカッタ)',
        7 => 'Fortune',
        8 => 'The U.K',
        9 => 'TWICE');
        
 ${"team".$i} = NULL;
    for ($i=1; $i<10; $i++){
 ${"team".$i} = App\User::all()->where('team',$i);
 	 ${"sum".$i} = 0;
 	foreach( ${"team".$i} as $feelings){
	${"sum".$i} = ${"sum".$i} + $feelings->feel;
}


     if(${"sum".$i}>=10)
	    echo '<p style="width:29.8%; float:left; height:20%; margin:5px 5px; background-color:#ff8e8e !important" class="veryhot-tribe">'.'</p>';
     elseif( 10 > ${"sum".$i} && ${"sum".$i} >= 5)
	     echo '<p style="width:29.8%; float:left; height:20%; margin:5px 5px; background-color:#f9bdbd !important" class="hot-tribe">'.'</p>';
     elseif( -5 >= ${"sum".$i} && ${"sum".$i} >= -10)
	     echo '<p style="width:29.8%; float:left; height:20%; margin:5px 5px; background-color:#bdd2f9 !important" class="cold-tribe">'.'</p>';
     elseif(${"sum".$i} <= -10)
	     echo '<p style="width:29.8%; float:left; height:20%; margin:5px 5px; background-color:#8ec6ff !important" class="verycold-tribe">'.'</p>';
     else
	     echo '<p style="width:29.8%; float:left; height:20%; margin:5px 5px; background-color:#a8ffda !important" class="com-tribe">'.'</p>';
    
};
?>
</div>


<div class="yellow-tribe-map">
<?php
$i = 0;
$yellowteam = array(
        10 => 'Eternal Dragon',
        11 => 'kara-age',
        12 => 'Y. Nature',
        13 => 'Avengers',
        14 => '卍Olive卍',
        15 => 'Porsche',
        16 => 'Amigos',
        17 => 'CodeWars',
        18 => 'なだ万',
        19 => 'TERAKOYA',
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
	    echo '<p style="width:21.7%; float:left; height:20%; margin:5px 5px; background-color:#ff8e8e !important" class="veryhot-tribe">'.'</p>';
     elseif( 10 > ${"sum".$i} && ${"sum".$i} >= 5)
	     echo '<p style="width:21.7%; float:left; height:20%; margin:5px 5px; background-color:#f9bdbd !important" class="hot-tribe">'.'</p>';
     elseif( -5 >= ${"sum".$i} && ${"sum".$i} >= -10)
	     echo '<p style="width:21.7%; float:left; height:20%; margin:5px 5px; background-color:#bdd2f9 !important" class="cold-tribe">'.'</p>';
     elseif(${"sum".$i} <= -10)
	     echo '<p style="width:21.7%; float:left; height:20%; margin:5px 5px; background-color:#8ec6ff !important" class="verycold-tribe">'.'</p>';
     else
	     echo '<p style="width:21.7%; float:left; height:20%; margin:5px 5px; background-color:#a8ffda !important" class="com-tribe">'.'</p>';
};
?>
</div>

<div class="pink-tribe-map">
<?php
$i = 0;
$pinkteam = array (
        22 => 'Daichi+no+Megumi',
        23 => 'SAKEty (酒ティー)',
        24 => 'Team One',
        25 => 'TK Kingdom',
        26 => 'YAKITOMATO',
        27 => 'Kiwami Pudding',
        28 => 'Team Sekaikan',
        29 => 'Jasmine',
        30 => 'HRM',
        31 => '御富士も梅雨',
        32 => 'JIAOZI',
        33 => 'いいとも');
        
 ${"team".$i} = NULL;
 
for ($i=22; $i<34; $i++){
 ${"team".$i} = App\User::all()->where('team',$i);
 	 ${"sum".$i} = 0;
 	foreach( ${"team".$i} as $feelings){
	${"sum".$i} = ${"sum".$i} + $feelings->feel;
}

     if(${"sum".$i}>=10)
	    echo '<p style="width:21.7%; float:left; height:20%; margin:5px 5px; background-color:#ff8e8e !important" class="veryhot-tribe">'.'</p>';
     elseif( 10 > ${"sum".$i} && ${"sum".$i} >= 5)
	     echo '<p style="width:21.7%; float:left; height:20%; margin:5px 5px; background-color:#f9bdbd !important" class="hot-tribe">'.'</p>';
     elseif( -5 >= ${"sum".$i} && ${"sum".$i} >= -10)
	     echo '<p style="width:21.7%; float:left; height:20%; margin:5px 5px; background-color:#bdd2f9 !important" class="cold-tribe">'.'</p>';
     elseif(${"sum".$i} <= -10)
	     echo '<p style="width:21.7%; float:left; height:20%; margin:5px 5px; background-color:#8ec6ff !important" class="verycold-tribe">'.'</p>';
     else
	     echo '<p style="width:21.7%; float:left; height:20%; margin:5px 5px; background-color:#a8ffda !important" class="com-tribe">'.'</p>';
    
    
};

	?>
</div>

<div class="purple-tribe-map">
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
	    echo '<p style="width:21.6%; float:left; height:20%; margin:5px 5px; background-color:#ff8e8e !important" class="veryhot-tribe"">'.'</p>';
     elseif( 10 > ${"sum".$i} && ${"sum".$i} >= 5)
	     echo '<p style="width:21.6%; float:left; height:20%; margin:5px 5px; background-color:#f9bdbd !important" class="hot-tribe">'.'</p>';
     elseif( -5 >= ${"sum".$i} && ${"sum".$i} >= -10)
	     echo '<p style="width:21.6%; float:left; height:20%; margin:5px 5px; background-color:#bdd2f9 !important" class="cold-tribe">'.'</p>';
     elseif(${"sum".$i} <= -10)
	     echo '<p style="width:21.6%; float:left; height:20%; margin:5px 5px; background-color:#8ec6ff !important" class="verycold-tribe">'.'</p>';
     else
	     echo '<p style="width:21.6%; float:left; height:20%; margin:5px 5px; background-color:#a8ffda !important" class="com-tribe">'.'</p>';
    
};

	?>
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

<footer class="col-lg-12 footermap">
            &copy; 2018 KEMKOW All Rights Reserved.
    </footer>
@endsection