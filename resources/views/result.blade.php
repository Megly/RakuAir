@extends('layouts.app')

@include('commons.navbar')

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
	

	// $cold = DB::table('users') ->where('feel','<=','0') ->sum('feel');
  	// $coldcount = DB::table('users') ->where('feel','<=','0') ->count('feel');
	$cold2 = App\User::all()->where('feel','<','0');
	$sumcold = 0;
	foreach($cold2 as $feelings){
		$sumcold = $sumcold + $feelings->feel;
	}
	$countcold = 0;
	foreach($cold2 as $feelings2){
		$countcold = $countcold + 1 ;
	}
	$gap = $sumhot + $sumcold;

	
// if($gap>=20){
// 	    echo 'Recommended temperature:22℃';
//     	}elseif($gap <= -20){
// 	    echo 'Recommended temperature:26℃';
//     	}else{
// 	    echo 'ええ感';s
// 	    }
$hot3 = App\User::all()->where('feel','>','0')->('team','>=','1')->('team','<=','10'); //テーブルのfeelカラムを配列として取得
	$sumhotred = 0;
 	foreach($hot3 as $feelings){
		$sumhot3 = $sumhot3 + $feelings->feel;
	}
 
$cold3 = App\User::all()->where('feel','<','0')->('team','>=','1')->('team','<=','10');
$sumcoldred = 0;
	foreach($cold3 as $feelings3){
		$sumcoldred = $sumcoldred + $feelings->feel;
		$gap = $sumhot + $sumcold;
	}
	
	
	}
	
?>   




@include('layouts.piegraph')

<!--@include('layouts.bargraph')-->



@endsection