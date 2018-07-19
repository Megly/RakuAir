@extends('layouts.app')

@section('content')

@include('commons.newnavbar')

<div class="icon-image">
     <a href="{{route('map.get')}}"><img class="logo2" src="/images/RakuAirBlack.png"></img></a>
</div>

 <h1>You are</h1>
 
 <?php
  $you = Auth::user()->feel;
 if ($you>0) {
    echo "<img class='hot' src='images/hoticon2.png'></img>";}
 elseif ($you==0) {
    echo "<img class='hot' src='images/thumbup.png'></img>";}
 else {
    echo "<img class='hot' src='images/coldicon2.png'></img>";}
    
 ?>



@include('commons.newnavbar')

@endsection