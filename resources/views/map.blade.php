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
		?>
		
		
	<div class='map-child'>
		
		@if($sumred>=60)
	     <p style="background-color:#ff8e8e !important">hot</p>
    	@elseif( 60 > $sumred && $sumred >= 20)
	     <p style="background-color:#f9bdbd !important">hot</p>
    	@elseif( -20 >= $sumred && $sumred >= -60)
	     <p style="background-color:#bdd2f9 !important">cold</p>
    	@elseif($sumred <= -60)
	     <p style="background-color:#8ec6ff !important">cold</p>
    	
    	@else
	     <p clss = map-child style="background-color:#f7fff7 !important">comfortable</p>
	    
	    @endif
	    
	    
	    	
		@if($sumyellow>=60)
	     <p style="background-color:#ff8e8e !important">hot</p>
    	@elseif( 60 > $sumyellow && $sumyellow >= 20)
	     <p style="background-color:#f9bdbd !important">hot</p>
    	@elseif( -20 >= $sumyellow && $sumyellow >= -60)
	     <p style="background-color:#bdd2f9 !important">cold</p>
   		@elseif($sumyellow <= -60)
	     <p style="background-color:#8ec6ff !important">cold</p>
    	@else
	     <p style="background-color:#f7fff7 !important">comfortable</p>
	    
	    @endif
	   
	   
	@if($sumpink>=60)
	     <p style="background-color:#ff8e8e !important">hot</p>
    	@elseif( 60 > $sumpink && $sumpink >= 20)
	     <p style="background-color:#f9bdbd !important">hot</p>
    	@elseif( -20 >= $sumpink && $sumpink >= -60)
	     <p style="background-color:#bdd2f9 !important">cold</p>
    	@elseif($sumpink <= -60)
	     <p style="background-color:#8ec6ff !important">cold</p>
    	@else
	     <p style="background-color:#f7fff7 !important">comfortable</p>
	    
	    @endif
	    
	    
	 @if($sumpurple>=60)
	     <p style="background-color:#ff8e8e !important">hot</p>
    	@elseif( 60 > $sumpurple && $sumpurple >= 20)
	     <p style="background-color:#f9bdbd !important">hot</p>
    	@elseif( -20 >= $sumpurple && $sumpurple >= -60)
	     <p style="background-color:#bdd2f9 !important">cold</p>
    	@elseif($sumpurple <= -60)
	     <p style="background-color:#8ec6ff !important">cold</p>
    	@else
	     <p style="background-color:#f7fff7 !important">comfortable</p>
	    
	    @endif
	    
		
	</div>
@endsection