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
		
 $array = [$sumred,$sumyellow,$sumpink,$sumpurple]
		?>
		

		
		<div class='map-child'>
		
		@foreach($array as $sum)
		@if($sum>=60)
	     <p style="background-color:#ff8e8e !important">hot</p>
    	@elseif( 60 > $sum && $sum >= 20)
	     <p style="background-color:#f9bdbd !important">hot</p>
    	@elseif( -20 >= $sum && $sum >= -60){
	     <p style="background-color:#bdd2f9 !important">cold</p>
    	@elseif($sum <= -60){
	     <p style="background-color:#8ec6ff !important">cold</p>
    	@else
	     <p clss = map-child style="background-color:#f7fff7 !important">comfortable</p>
    	@endif
	    
	    @endforeach
	    
	
		
	</div>
	

@endsection