@extends('layouts.app')
@include('commons.newnavbar')
@section('content')

<div class="icon-image">
     <a href="{{route('map.get')}}"><img class="logo2" src="/images/RakuAirBlack.png"></img></a>
</div>
<div class="grah">
	<?php 
// 全体のHOTなひと
	$hot2 = App\User::all()->where('feel','>','0');
	$sumhot = 0;
 	foreach($hot2 as $feelings){
		$sumhot = $sumhot + $feelings->feel;
	}
	$counthot = 0;
	foreach($hot2 as $feelings2){
		$counthot = $counthot + 1 ;
	}
	
	
	$com1 = App\User::all()->where('feel','==','0');
    $countcom = 0;
	foreach($com1 as $feelings2){
		$countcom = $countcom + 1 ;
	}

// 全体のCOLDな人
	$cold2 = App\User::all()->where('feel','<','0');
	$sumcold = 0;
	foreach($cold2 as $feelings4){
		$sumcold = $sumcold + $feelings4->feel;
	}
	$countcold = 0;
	foreach($cold2 as $feelings2){
		$countcold = $countcold + 1 ;
	}
	

// 女性のなかのHOTな人
	$girlhot = App\User::all()->where('sex','1')->where('feel','>','0');
	$countgirlhot = 0;
 	foreach($girlhot as $feelings5){
 		$countgirlhot = $countgirlhot + 1 ;}
	$girlcold = App\User::all()->where('sex','1')->where('feel','<','0');
	$countgirlcold = 0;
 	foreach($girlcold as $feelings6){
 		$countgirlcold = $countgirlcold + 1 ;		
 	}
 	
 	$comgirl = App\User::all()->where('sex','1')->where('feel','0'); 
    $countcomgirl = 0;
	foreach($comgirl as $feelings7){
		$countcomgirl = $countcomgirl + 1 ;}
		
	// 男性の中のCOLDなひと
	$boyhot = App\User::all()->where('sex','0')->where('feel','>','0');
	 $countboyhot = 0;
 	foreach($boyhot as $feelings8){
 		$countboyhot = $countboyhot + 1 ;}
	$boycold = App\User::all()->where('sex','0')->where('feel','<','0');
	$countboycold = 0;
 	foreach($boycold as $feelings9){
 		$countboycold = $countboycold + 1 ;		
	}
	
	$comboy = App\User::all()->where('sex','0')->where('feel','0'); 
    $countcomboy = 0;
	foreach($comboy as $feelings10){
		$countcomboy = $countcomboy + 1 ;}
	
//RED 
	$redhot = App\User::all()->where('team','>=','1')->where('team','<=','9')->where('feel','>','0');
	 $countredhot = 0;
 	foreach($redhot as $feelings){
 		$countredhot = $countredhot + 1 ;}
	$redcold = App\User::all()->where('team','>=','1')->where('team','<=','9')->where('feel','<','0');
	$countredcold = 0;
 	foreach($redcold as $feelings){
 		$countredcold = $countredcold + 1 ;		
	}
	
	$comred = App\User::all()->where('team','>=','1')->where('team','<=','9')->where('feel','0');
    $countcomred = 0;
	foreach($comred as $feelings){
		$countcomred = $countcomred + 1 ;}
	
// yellow
	$yellowhot = App\User::all()->where('team','>=','10')->where('team','<=','21')->where('feel','>','0');
	 $countyellowhot = 0;
 	foreach($yellowhot as $feelings11){
 		$countyellowhot = $countyellowhot + 1 ;}
	$yellowcold = App\User::all()->where('team','>=','10')->where('team','<=','21')->where('feel','<','0');
	$countyellowcold = 0;
 	foreach($yellowcold as $feelings11){
 		$countyellowcold = $countyellowcold + 1 ;		
	}
	
	$comyellow = App\User::all()->where('team','>=','10')->where('team','<=','21')->where('feel','0');
    $countcomyellow = 0;
	foreach($comyellow as $feelings11){
		$countcomyellow = $countcomyellow + 1 ;}
//pink
	$pinkhot = App\User::all()->where('team','>=','22')->where('team','<=','33')->where('feel','>','0');
	 $countpinkhot = 0;
 	foreach($pinkhot as $feelings12){
 		$countpinkhot = $countpinkhot + 1 ;}
	$pinkcold = App\User::all()->where('team','>=','22')->where('team','<=','33')->where('feel','<','0');
	$countpinkcold = 0;
 	foreach($pinkcold as $feelings12){
 		$countpinkcold = $countpinkcold + 1 ;		
	}
	
	$compink = App\User::all()->where('team','>=','22')->where('team','<=','33')->where('feel','0');
    $countcompink = 0;
	foreach($compink as $feelings12){
		$countcompink = $countcompink + 1 ;}
// purple
	$purplehot = App\User::all()->where('team','>=','34')->where('team','<=','45')->where('feel','>','0');
	 $countpurplehot = 0;
 	foreach($purplehot as $feelings13){
 		$countpurplehot = $countpurplehot + 1 ;}
	$purplecold = App\User::all()->where('team','>=','34')->where('team','<=','45')->where('feel','<','0');
	$countpurplecold = 0;
 	foreach($purplecold as $feelings13){
 		$countpurplecold = $countpurplecold + 1 ;		
	}
	
	$compurple = App\User::all()->where('team','>=','34')->where('team','<=','45')->where('feel','0');
    $countcompurple = 0;
	foreach($compurple as $feelings13){
		$countcompurple = $countcomred + 1 ;}
		
// atsugari
$dhot = App\User::all()->where('size','0')->where('feel','>','0');
	 $countdhot = 0;
 	foreach($dhot as $feelings13){
 		$countdhot = $countdhot + 1 ;}
	$dcold = App\User::all()->where('size','0')->where('team','<','0');
	$countdcold = 0;
 	foreach($dcold as $feelings13){
 		$countdcold = $countdcold + 1 ;		
	}
	$comd = App\User::all()->where('size','0')->where('feel','0');
    $countcomd = 0;
	foreach($comd as $feelings13){
		$countcomd = $countcomd + 1 ;}
		
// samugari
$shot = App\User::all()->where('size','2')->where('feel','>','0');
	 $countshot = 0;
 	foreach($shot as $feelings13){
 		$countshot = $countshot + 1 ;}
	$scold = App\User::all()->where('size','2')->where('feel','<','0');
	$countscold = 0;
 	foreach($scold as $feelings13){
 		$countscold = $countscold + 1 ;		
	}
	$coms = App\User::all()->where('size','2')->where('feel','0');
    $countcoms = 0;
	foreach($coms as $feelings13){
		$countcoms = $countcoms + 1 ;}
		
// nomal
$nhot = App\User::all()->where('size','1')->where('feel','>','0');
	 $countnhot = 0;
 	foreach($nhot as $feelings13){
 		$countnhot = $countnhot + 1 ;}
	$ncold = App\User::all()->where('size','1')->where('feel','<','0');
	$countncold = 0;
 	foreach($ncold as $feelings13){
 		$countncold = $countncold + 1 ;		
	}
	
	$comn = App\User::all()->where('size','1')->where('feel','0');
    $countcomn = 0;
	foreach($comn as $feelings13){
		$countcomn = $countcomn + 1 ;}

//男性の登録タイプ
$hotmen = App\User::all()->where('sex','0')->where('size','0');
	 $counthotmen = 0;
 	foreach($hotmen as $feelings13){
 		$counthotmen = $counthotmen + 1 ;}
	$coldmen = App\User::all()->where('sex','0')->where('size','2');
	$countcoldmen = 0;
 	foreach($coldmen as $feelings13){
 		$countcoldmen = $countcoldmen + 1 ;		
	}
	
	$commen = App\User::all()->where('sex','0')->where('size','1');
    $countcommen = 0;
	foreach($commen as $feelings13){
		$countcommen = $countcommen + 1 ;}
		
// 女性の登録タイプ
$hotgirl = App\User::all()->where('sex','1')->where('size','0');
	 $counthotgirl = 0;
 	foreach($hotgirl as $feelings13){
 		$counthotgirl = $counthotgirl + 1 ;}
	$coldgirl = App\User::all()->where('sex','1')->where('size','2');
	$countcoldgirl = 0;
 	foreach($coldgirl as $feelings13){
 		$countcoldgirl = $countcoldgirl + 1 ;		
	}
	
	$comgirl = App\User::all()->where('sex','1')->where('size','1');
	foreach($comgirl as $feelings13){
		$countcomgirl = $countcomgirl + 1 ;}
	?>
	</div>

@include('grah.piegraph')

@include('grah.boypiegraph')

@include('grah.girlpiegraph')

@include('grah.redpiegraph')

@include('grah.pinkpiegraph')

@include('grah.yellowpiegraph')

@include('grah.purplepiegraph')

@include('grah.atsupiegraph')

@include('grah.nompiegraph')

@include('grah.sampiegraph')

@include('grah.hotmenpiegraph')

@include('grah.hotgirlpiegraph')

@endsection