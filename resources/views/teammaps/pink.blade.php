@extends('layouts.app')

@include('commons.newnavbar')

@section('content')

<div class="icon-image">
     <a href="{{route('map.get')}}"><img class="logo2" src="/images/RakuAirBlack.png"></img></a>
</div>

<div class="tribe">
<?php
$i = 0;
$pinkteam = array (
        22 => 'Daichi+no+Megumi',
        23 => 'YAKITOMATO',
        24 => 'HRM',
        25 => 'SAKEty (酒ティー)',
        26 => 'Team One',
        27 => 'TK Kingdom',
        28 => 'Kiwami Pudding',
        29 => 'Team Sekaikan',
        30 => 'Jasmine',
        31 => '御富士も梅雨',
        32 => 'JIAOZI',
        33 => 'いいとも');
$user = \Auth::user();
$userteam = $user->team;        
 ${"team".$i} = NULL;
 
for ($i=22; $i<34; $i++){
 ${"team".$i} = App\User::all()->where('team',$i);
 	 ${"sum".$i} = 0;
 	foreach( ${"team".$i} as $feelings){
	${"sum".$i} = ${"sum".$i} + $feelings->feel;
}
     if(${"sum".$i}>=10)
	    echo '<p style="background-color:#ff8e8e !important">'.$pinkteam[$i].'</p>';
     elseif( 10 > ${"sum".$i} && ${"sum".$i} >= 5)
	     echo '<p style="background-color:#f9bdbd !important">'.$pinkteam[$i].'</p>';
     elseif( -5 >= ${"sum".$i} && ${"sum".$i} >= -10)
	     echo '<p style="background-color:#bdd2f9 !important">'.$pinkteam[$i].'</p>';
     elseif(${"sum".$i} <= -10)
	     echo '<p style="background-color:#8ec6ff !important">'.$pinkteam[$i].'</p>';
     else
	     echo '<p style="background-color:#a8ffda !important">'.$pinkteam[$i].'</p>';
    
    
};

	?>



</div>
        <div class = 'clearbtnparent'>
        @if($userteam == 22 ||   $userteam == 26)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear2c' ], 'method' => 'put']) !!}
                {!! Form::submit('2c clear', ['class' => 'btn btn-lg btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @elseif($userteam == 30)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear2d' ], 'method' => 'put']) !!}
                {!! Form::submit('2d clear', ['class' => 'btn btn-lg btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @elseif($userteam == 23 || $userteam == 24 || $userteam == 25 || $userteam == 27 || $userteam == 28 || $userteam == 29)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear3a' ], 'method' => 'put']) !!}
                {!! Form::submit('3a clear', ['class' => 'btn btn-lg btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @elseif($userteam == 31 || $userteam == 32 || $userteam == 33)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear3b' ], 'method' => 'put']) !!}
                {!! Form::submit('3b clear', ['class' => 'btn btn-lg btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @endif
        </div>
@endsection