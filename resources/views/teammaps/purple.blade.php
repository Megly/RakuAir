@extends('layouts.app')

@include('commons.newnavbar')

@section('content')

<div class="icon-image">
     <a href="{{route('map.get')}}"><img class="logo2" src="/images/RakuAirBlack.png"></img></a>
</div>

<div class="tribe">
<?php
$i = 0;
$purpleteam = array(
        34 => 'Mkpali(ムカパリ)',
        35 => 'Koders',
        36 => 'Pocket 6',
        37 => 'JETS',
        38 => 'チームきりんさん',
        39 => '新鮮グミ',
        40 => 'Medium Rare',
        41 => 'Noisyy',
        42 => 'Team Kay',
        43 => 'ひよこさん組',
        44 => 'A BANANA',
        45 => 'KEMKOW');
 ${"team".$i} = NULL;
$user = \Auth::user();
$userteam = $user->team;
 
for ($i=34; $i<46; $i++){
 ${"team".$i} = App\User::all()->where('team',$i);
 	 ${"sum".$i} = 0;
 	foreach( ${"team".$i} as $feelings){
	${"sum".$i} = ${"sum".$i} + $feelings->feel;
}
     if(${"sum".$i}>=10)
	    echo '<p style="background-color:#ff8e8e !important">'.$purpleteam[$i].'</p>';
     elseif( 10 > ${"sum".$i} && ${"sum".$i} >= 5)
	     echo '<p style="background-color:#f9bdbd !important">'.$purpleteam[$i].'</p>';
     elseif( -5 >= ${"sum".$i} && ${"sum".$i} >= -10)
	     echo '<p style="background-color:#bdd2f9 !important">'.$purpleteam[$i].'</p>';
     elseif(${"sum".$i} <= -10)
	     echo '<p style="background-color:#8ec6ff !important">'.$purpleteam[$i].'</p>';
     else
	     echo '<p style="background-color:#a8ffda !important">'.$purpleteam[$i].'</p>';
    
    
};

	?>

</div>
        <div class = 'clearbtnparent'>
        @if($userteam == 34 ||   $userteam == 35 || $userteam == 38 || $userteam == 39 )
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear4a' ], 'method' => 'put']) !!}
                {!! Form::submit('4a clear', ['class' => 'btn btn-lg btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @elseif($userteam == 42 || $userteam == 43)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear4b' ], 'method' => 'put']) !!}
                {!! Form::submit('4b clear', ['class' => 'btn btn-lg btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @elseif($userteam == 36 ||  $userteam == 37 || $userteam == 41)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear4c' ], 'method' => 'put']) !!}
                {!! Form::submit('4c clear', ['class' => 'btn btn-lg btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @elseif($userteam == 40 ||  $userteam == 44 || $userteam == 45)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear4d' ], 'method' => 'put']) !!}
                {!! Form::submit('4d clear', ['class' => 'btn btn-lg btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @else()
        <div class = 'clearbtn'></div>
        @endif
        </div>
@endsection