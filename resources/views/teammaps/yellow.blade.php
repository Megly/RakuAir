@extends('layouts.app')

@include('commons.newnavbar')

@section('content')

<div class="icon-image">
     <a href="{{route('map.get')}}"><img class="logo2" src="/images/RakuAirBlack.png"></img></a>
</div>

<div class="tribe">
<?php
$i = 0;
$yellowteam = array(
        10 => 'Eternal Dragon',
        11 => 'kara-age',
        12 => '卍Olive卍',
        13 => 'Porsche',
        14 => 'なだ万',
        15 => 'TERAKOYA',
        16 => 'Y. Nature',
        17 => 'Avengers',
        18 => 'Amigos',
        19 => 'CodeWars',
        20 => 'Letian panda',
        21 => 'Pandanity');
$user = \Auth::user();
$userteam = $user->team;
 ${"team".$i} = NULL;
for ($i=10; $i<22; $i++){
 ${"team".$i} = App\User::all()->where('team',$i);
 	 ${"sum".$i} = 0;
 	foreach( ${"team".$i} as $feelings){
	${"sum".$i} = ${"sum".$i} + $feelings->feel;
}
     if(${"sum".$i}>=10)
	    echo '<p style="background-color:#ff8e8e !important">'.$yellowteam[$i].'</p>';
     elseif( 10 > ${"sum".$i} && ${"sum".$i} >= 5)
	     echo '<p style="background-color:#f9bdbd !important">'.$yellowteam[$i].'</p>';
     elseif( -5 >= ${"sum".$i} && ${"sum".$i} >= -10)
	     echo '<p style="background-color:#bdd2f9 !important">'.$yellowteam[$i].'</p>';
     elseif(${"sum".$i} <= -10)
	     echo '<p style="background-color:#8ec6ff !important">'.$yellowteam[$i].'</p>';
     else
	     echo '<p style="background-color:#a8ffda !important">'.$yellowteam[$i].'</p>';
    
};

	?>


</div>
        <div class = 'clearbtnparent'>
        @if($userteam == 10 ||   $userteam == 11 || $userteam == 14 || $userteam == 15 )        
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear2a' ], 'method' => 'put']) !!}
                {!! Form::submit('2a clear', ['class' => 'btn btn-lg btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @elseif($userteam == 18 ||   $userteam == 19)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear2b' ], 'method' => 'put']) !!}
                {!! Form::submit('2b clear', ['class' => 'btn btn-lg btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @elseif($userteam == 12 ||   $userteam == 13 || $userteam == 16 || $userteam == 17 )
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear2c' ], 'method' => 'put']) !!}
                {!! Form::submit('2c clear', ['class' => 'btn btn-lg btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @elseif($userteam == 20 ||   $userteam == 21)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear2d' ], 'method' => 'put']) !!}
                {!! Form::submit('2d clear', ['class' => 'btn btn-lg btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @endif
        </div>

@endsection