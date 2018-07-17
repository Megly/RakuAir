@extends('layouts.app')

@include('commons.navbar')

@section('content')


<?php
 $youegg = App\User::all()->where('team','1');
 $sum1 = 0;
 	foreach($redyouegg as $feelings){
		$sum1 = $sum1 + $feelings->feel;
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
	     <p style="background-color:#ff8e8e !important"><?php echo $tribe ?> is hot</p>
     @elseif( 60 > $sum && $sum >= 20)
	     <p style="background-color:#f9bdbd !important"><?php echo $tribe ?> is hot</p>
     @elseif( -20 >= $sum && $sum >= -60){
	     <p style="background-color:#bdd2f9 !important"><?php echo $tribe ?> is cold</p>
     @elseif($sum <= -60){
	     <p style="background-color:#8ec6ff !important"><?php echo $tribe ?> is cold</p>
     @else
	     <p style="background-color:#f7fff7 !important"><?php echo $tribe ?> is comfortable</p>
     @endif
	    
	    @endforeach
	
</div>
@endsection