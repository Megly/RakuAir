@extends('layouts.app')

@include('commons.newnavbar')

@section('content')
<div class="icon-image">
     <a href="{{route('map.get')}}"><img class="logo2" src="/images/RakuAirBlack.png"></img></a>
</div>

<p class="maptitle">　</p>

<div class="screen">
    <p>Floor Map</p>
</div>

<?php
 $red = App\User::all()->where('team','>=','1')->where('team','<=','9');
 $sumred = 0;
 	foreach($red as $feelings){
		$sumred = $sumred + $feelings->feel;
		};
		
 $yellow = App\User::all()->where('team','>=','10')->where('team','<=','21');
 $sumyellow = 0;
 foreach($yellow as $feelings){
		$sumyellow = $sumyellow + $feelings->feel;
		};
		
 $pink = App\User::all()->where('team','>=','22')->where('team','<=','33');
 $sumpink = 0;
 foreach($pink as $feelings){
		$sumpink = $sumpink + $feelings->feel;
		};
		
 $purple = App\User::all()->where('team','>=','34')->where('team','<=','45');
 $sumpurple = 0;
 foreach($purple as $feelings){
		$sumpurple = $sumpurple + $feelings->feel;
		};
		
$array =array(
 $sumred => 'A',
 $sumyellow => 'B',
 $sumpink => 'C',
 $sumpurple => 'D')
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
        <a class="btn-master paper paper-raise-flatten btn-red" href="{{route('red.get')}}">Area <span class="red-tribe">A</span> detail</a>
        <a class="btn-master paper paper-raise-flatten btn-yellow" href="{{route('yellow.get')}}">Area <span class="yellow-tribe">B</span> detail</a>
        <a class="btn-master paper paper-raise-flatten btn-pink" href="{{route('pink.get')}}">Area <span class="pink-tribe">C</span> detail</a>
        <a class="btn-master paper paper-raise-flatten btn-purple" href="{{route('purple.get')}}">Area <span class="purple-tribe">D</span> detail</a>

  </div>

<div class="tribe-brother">
<div class="red-tribe-map">
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
        
 ${"team".$i} = NULL;
    for ($i=1; $i<10; $i++){
 ${"team".$i} = App\User::all()->where('team',$i);
 	 ${"sum".$i} = 0;
 	foreach( ${"team".$i} as $feelings){
	${"sum".$i} = ${"sum".$i} + $feelings->feel;
}


     if(${"sum".$i}>=7)
	    echo '<p style="width:29.8%; float:left; height:15%; margin:5px 5px; background-color:#ff8e8e !important" class="veryhot-tribe">'.'</p>';
     elseif( 7 > ${"sum".$i} && ${"sum".$i} >= 3)
	     echo '<p style="width:29.8%; float:left; height:15%; margin:5px 5px; background-color:#f9bdbd !important" class="hot-tribe">'.'</p>';
     elseif( -3 >= ${"sum".$i} && ${"sum".$i} >= -7)
	     echo '<p style="width:29.8%; float:left; height:15%; margin:5px 5px; background-color:#bdd2f9 !important" class="cold-tribe">'.'</p>';
     elseif(${"sum".$i} <= -7)
	     echo '<p style="width:29.8%; float:left; height:15%; margin:5px 5px; background-color:#8ec6ff !important" class="verycold-tribe">'.'</p>';
     else
	     echo '<p style="width:29.8%; float:left; height:15%; margin:5px 5px; background-color:#a8ffda !important" class="com-tribe">'.'</p>';
    
};
?>
</div>


<div class="yellow-tribe-map">
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
        
 ${"team".$i} = NULL;
for ($i=10; $i<22; $i++){
 ${"team".$i} = App\User::all()->where('team',$i);
 	 ${"sum".$i} = 0;
 	foreach( ${"team".$i} as $feelings){
	${"sum".$i} = ${"sum".$i} + $feelings->feel;
}

     if(${"sum".$i}>=7)
	    echo '<p style="width:21.7%; float:left; height:15%; margin:5px 5px; background-color:#ff8e8e !important" class="veryhot-tribe">'.'</p>';
     elseif( 7 > ${"sum".$i} && ${"sum".$i} >= 3)
	     echo '<p style="width:21.7%; float:left; height:15%; margin:5px 5px; background-color:#f9bdbd !important" class="hot-tribe">'.'</p>';
     elseif( -3 >= ${"sum".$i} && ${"sum".$i} >= -7)
	     echo '<p style="width:21.7%; float:left; height:15%; margin:5px 5px; background-color:#bdd2f9 !important" class="cold-tribe">'.'</p>';
     elseif(${"sum".$i} <= -7)
	     echo '<p style="width:21.7%; float:left; height:15%; margin:5px 5px; background-color:#8ec6ff !important" class="verycold-tribe">'.'</p>';
     else
	     echo '<p style="width:21.7%; float:left; height:15%; margin:5px 5px; background-color:#a8ffda !important" class="com-tribe">'.'</p>';
};
?>
</div>

<div class="pink-tribe-map">
<?php
$i = 0;
$pinkteam = array (
        22 => 'team22',
        23 => 'team23',
        24 => 'team24',
        25 => 'team25',
        26 => 'team26',
        27 => 'team27',
        28 => 'team28',
        29 => 'team29',
        30 => 'team30',
        31 => 'team31',
        32 => 'team32',
        33 => 'team33');
        
 ${"team".$i} = NULL;
 
for ($i=22; $i<34; $i++){
 ${"team".$i} = App\User::all()->where('team',$i);
 	 ${"sum".$i} = 0;
 	foreach( ${"team".$i} as $feelings){
	${"sum".$i} = ${"sum".$i} + $feelings->feel;
}

     if(${"sum".$i}>=7)
	    echo '<p style="width:21.7%; float:left; height:15%; margin:5px 5px; background-color:#ff8e8e !important" class="veryhot-tribe">'.'</p>';
     elseif( 7 > ${"sum".$i} && ${"sum".$i} >= 3)
	     echo '<p style="width:21.7%; float:left; height:15%; margin:5px 5px; background-color:#f9bdbd !important" class="hot-tribe">'.'</p>';
     elseif( -3 >= ${"sum".$i} && ${"sum".$i} >= -7)
	     echo '<p style="width:21.7%; float:left; height:15%; margin:5px 5px; background-color:#bdd2f9 !important" class="cold-tribe">'.'</p>';
     elseif(${"sum".$i} <= -7)
	     echo '<p style="width:21.7%; float:left; height:15%; margin:5px 5px; background-color:#8ec6ff !important" class="verycold-tribe">'.'</p>';
     else
	     echo '<p style="width:21.7%; float:left; height:15%; margin:5px 5px; background-color:#a8ffda !important" class="com-tribe">'.'</p>';
    
    
};

	?>
</div>

<div class="purple-tribe-map">
<?php
$i = 0;
$purpleteam = array(
        34 => 'team34',
        35 => 'team35',
        36 => 'team36',
        37 => 'team37',
        38 => 'team38',
        39 => 'team39',
        40 => 'team40',
        41 => 'team41',
        42 => 'team42',
        43 => 'team43',
        44 => 'team44',
        45 => 'team45');
        
 ${"team".$i} = NULL;
 
for ($i=34; $i<46; $i++){
 ${"team".$i} = App\User::all()->where('team',$i);
 	 ${"sum".$i} = 0;
 	foreach( ${"team".$i} as $feelings){
	${"sum".$i} = ${"sum".$i} + $feelings->feel;
}
     
     if(${"sum".$i}>=7)
	    echo '<p style="width:21.6%; float:left; height:15%; margin:5px 5px; background-color:#ff8e8e !important" class="veryhot-tribe"">'.'</p>';
     elseif( 7 > ${"sum".$i} && ${"sum".$i} >= 3)
	     echo '<p style="width:21.6%; float:left; height:15%; margin:5px 5px; background-color:#f9bdbd !important" class="hot-tribe">'.'</p>';
     elseif( -3 >= ${"sum".$i} && ${"sum".$i} >= -7)
	     echo '<p style="width:21.6%; float:left; height:15%; margin:5px 5px; background-color:#bdd2f9 !important" class="cold-tribe">'.'</p>';
     elseif(${"sum".$i} <= -7)
	     echo '<p style="width:21.6%; float:left; height:15%; margin:5px 5px; background-color:#8ec6ff !important" class="verycold-tribe">'.'</p>';
     else
	     echo '<p style="width:21.6%; float:left; height:15%; margin:5px 5px; background-color:#a8ffda !important" class="com-tribe">'.'</p>';
    
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

</div>


<footer class="col-lg-12 footermap">
            &copy; 2018 KEMKOW All Rights Reserved.
    </footer>
@endsection