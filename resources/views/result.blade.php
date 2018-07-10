@extends('layouts.app')

@section('content')
<?php 
	$result = DB::table('users') ->sum('feel');
	$hot = DB::table('users') ->where('feel','>=','0') ->sum('feel');
	$cold = DB::table('users') ->where('feel','<=','0') ->sum('feel');
    $hotcount = DB::table('users') ->where('feel','>=','0') ->count('feel');
	$coldcount = DB::table('users') ->where('feel','<=','0') ->count('feel');
?>     


@include('layouts.piegraph')

@include('layouts.bargraph')

            

@endsection