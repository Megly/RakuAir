@extends('layouts.app')

@include('commons.navbar')

@section('content')


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
	     <p class="col-xs-3 col-sm-3 col-md-3" style="background-color:#ff8e8e  !important"><?php echo $tribe ?> is hot</p>
     @elseif( 60 > $sum && $sum >= 20)
	     <p class="col-xs-3 col-sm-3 col-md-3" style="background-color:#f9bdbd !important"><?php echo $tribe ?> is hot</p>
     @elseif( -20 >= $sum && $sum >= -60){
	     <p class="col-xs-3 col-sm-3 col-md-3" style="background-color:#bdd2f9 !important"><?php echo $tribe ?> is cold</p>
     @elseif($sum <= -60){
	     <p class="col-xs-3 col-sm-3 col-md-3" style="background-color:#8ec6ff !important"><?php echo $tribe ?> is cold</p>
     @else
	     <p class="col-xs-3 col-sm-3 col-md-3" style="background-color:#f7fff7 !important"><?php echo $tribe ?> is comfortable</p>
     @endif
	    
	    @endforeach
	
</div>
@endsection