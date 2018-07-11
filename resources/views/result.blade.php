@extends('layouts.app')

@section('content')
<h1><?php 
	$result = DB::table('users') ->sum('feel');
	$hot = DB::table('users') ->where('feel','>=','0') ->sum('feel');
	$cold = DB::table('users') ->where('feel','<=','0') ->sum('feel');
    $hotcount = DB::table('users') ->where('feel','>=','0') ->count('feel');
	$coldcount = DB::table('users') ->where('feel','<=','0') ->count('feel');
	$gap = $hot + $cold;
	
if($gap>=20){
	    echo 'Recommended temperature:22℃';
    	}elseif($gap <= -20){
	    echo 'Recommended temperature:26℃';
    	}else{
	    echo 'ええ感';
	    }
	

?> </h1>    


@include('layouts.piegraph')

@include('layouts.bargraph')

            

@endsection