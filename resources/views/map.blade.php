@extends('layouts.app')

@include('commons.newnavbar')

@section('content')
<div class="icon-image">
     <a href="{{route('map.get')}}"><img class="logo2" src="/images/RakuAirBlack.png"></img></a>
</div>

<div class="map-detail">
        <a class="btn-master btn-jedi btn-red" href="{{route('red.get')}}"><span class="red-tribe">Red</span> tribe's map</a>
        <a class="btn-master btn-jedi btn-yellow" href="{{route('yellow.get')}}"><span class="yellow-tribe">Yellow</span> tribe's map</a>
        <a class="btn-master btn-jedi btn-pink" href="{{route('pink.get')}}"><span class="pink-tribe">Pink</span> tribe's map</a>
        <a class="btn-master btn-jedi btn-purple" href="{{route('purple.get')}}"><span class="purple-tribe">Purple</span> tribe's map</a>
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

	@foreach($array as $sum => $tribe)
	@if($sum>=60)
	     <p style="background-color:#ff8e8e !important"><span class="blink-veryhot"><?php echo $tribe ?> is ☀very hot!☀</span></p>
     @elseif( 60 > $sum && $sum >= 20)
	     <p style="background-color:#f9bdbd !important"><span class="blink-hot"><?php echo $tribe ?> is hot☀</span></p>
     @elseif( -20 >= $sum && $sum >= -60)
	     <p style="background-color:#bdd2f9 !important"><?php echo $tribe ?> is ❆</p>
     @elseif($sum <= -60)
	     <p style="background-color:#8ec6ff !important"><?php echo $tribe ?> is ❆</p>
     @else
	     <p style="background-color:#a8ffda !important"><?php echo $tribe ?> is OK</p>
     @endif
	    
	    @endforeach
	
</div>
@endsection