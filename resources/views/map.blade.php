@extends('layouts.app')

@include('commons.newnavbar')

@section('content')
<div class="icon-image">
     <a href="{{route('map.get')}}"><img class="logo2" src="/images/RakuAirBlack.png"></img></a>
</div>

<div class="map-detail">
        <p>{!! link_to_route('red.get', 'Red tribe detail') !!}</p>
	    <p>{!! link_to_route('yellow.get', 'Yellow tribe detail') !!}</p>
	    <p>{!! link_to_route('pink.get', 'Pink tribe detail') !!}</p> 
	    <p>{!! link_to_route('purple.get', 'Purple tribe detail') !!}</p>
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
 $sumred => 'red',
 $sumyellow => 'yellow',
 $sumpink => 'pink',
 $sumpurple => 'purple')
	?>



	<div class='map-child'>

	@foreach($array as $sum => $tribe)
	@if($sum>=60)
	     <p style="background-color:#ff8e8e !important"><?php echo $tribe ?> is ☀☀<p>
     @elseif( 60 > $sum && $sum >= 20)
	     <p style="background-color:#f9bdbd !important"><?php echo $tribe ?> is ☀</p>
     @elseif( -20 >= $sum && $sum >= -60)
	     <p style="background-color:#bdd2f9 !important"><?php echo $tribe ?> is ❆</p>
     @elseif($sum <= -60)
	     <p style="background-color:#8ec6ff !important"><?php echo $tribe ?> is ❆</p>
     @else
	     <p style="background-color:#03eb89 !important"><?php echo $tribe ?> is OK</p>
     @endif
	    
	    @endforeach
	
</div>
<!--<div class="map-detaile">-->
<!--        <p>{!! link_to_route('red.get', 'Red tribe datails') !!}</p>-->
<!--	    <p>{!! link_to_route('yellow.get', 'Yellow tribe datails') !!}</p>-->
<!--	    <p>{!! link_to_route('pink.get', 'Pink tribe datails') !!}</p> -->
<!--	    <p>{!! link_to_route('purple.get', 'Purple tribe datails') !!}</p>-->
<!--</div>	    -->
	    
@endsection