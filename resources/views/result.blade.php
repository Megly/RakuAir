@extends('layouts.app')

@section('content')
<?php 
	// $result = DB::table('users') ->sum('feel');
	// $hot = DB::table('users') ->where('feel','>=','0') ->sum('feel');
	// $hotcount = DB::table('users') ->where('feel','>=','0') ->count('feel');
	$hot2 = App\User::all()->where('feel','>','0'); //テーブルのfeelカラムを配列として取得
	$sumhot = 0;
 	foreach($hot2 as $feelings){
		$sumhot = $sumhot + $feelings->feel;
	}
	$counthot = 0;
	foreach($hot2 as $feelings2){
		$counthot = $counthot + 1 ;
	}
	
	
	$com1 = App\User::all()->where('feel','==','0'); //テーブルのfeelカラムを配列として取得
    $countcom = 0;
	foreach($com1 as $feelings2){
		$countcom = $countcom + 1 ;
	}

	// $cold = DB::table('users') ->where('feel','<=','0') ->sum('feel');
  	// $coldcount = DB::table('users') ->where('feel','<=','0') ->count('feel');
	$cold2 = App\User::all()->where('feel','<','0');
	$sumcold = 0;
	foreach($cold2 as $feelings4){
		$sumcold = $sumcold + $feelings4->feel;
	}
	$countcold = 0;
	foreach($cold2 as $feelings2){
		$countcold = $countcold + 1 ;
	}
	


 $girlhot = App\User::all()->where('sex','1')->where('feel','>','0');
 $countgirlhot = 0;
 	foreach($girlhot as $feelings5){
 		$countgirlhot = $countgirlhot + 1 ;}
 $girlcold = App\User::all()->where('sex','1')->where('feel','<','0');
 $countgirlcold = 0;
 	foreach($girlcold as $feelings6){
 		$countgirlcold = $countgirlcold + 1 ;		
 	}
 	
 	$comgirl = App\User::all()->where('sex','1')->where('feel','0'); //テーブルのfeelカラムを配列として取得
    $countcomgirl = 0;
	foreach($comgirl as $feelings7){
		$countcomgirl = $countcomgirl + 1 ;}
		

 $boyhot = App\User::all()->where('sex','0')->where('feel','>','0');
 $countboyhot = 0;
 	foreach($boyhot as $feelings8){
 		$countboyhot = $countboyhot + 1 ;}
 $boycold = App\User::all()->where('sex','0')->where('feel','<','0');
 $countboycold = 0;
 	foreach($boycold as $feelings9){
 		$countboycold = $countboycold + 1 ;		
	}
	
$comboy = App\User::all()->where('sex','0')->where('feel','0'); //テーブルのfeelカラムを配列として取得
    $countcomboy = 0;
	foreach($comboy as $feelings10){
		$countcomboy = $countcomboy + 1 ;}

?>

@include('layouts.piegraph')

@include('layouts.boypiegraph')

@include('layouts.girlpiegraph')

@include('commons.newnavbar')

@endsection