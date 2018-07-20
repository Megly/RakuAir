@extends('layouts.app')

@include('commons.newnavbar')

@section('content')

<div class="icon-image">
     <a href="{{route('map.get')}}"><img class="logo2" src="/images/RakuAirBlack.png"></img></a>
</div>

<div class="screen">
    <p><span class="purple-tribe">Purple tribe's map</span></p>
    <p>---------- Screen ----------</p>
</div>

<div class="tribe">
<?php
$i = 0;
$purpleteam = array(
        34 => 'Mkpali(ムカパリ)',
        35 => 'Koders',
        36 => 'Medium Rare',
        37 => 'Noisyy',
        38 => 'Pocket 6',
        39 => 'JETS',
        40 => 'ひよこさん組',
        41 => 'Team Kay',
        42 => 'チームきりんさん',
        43 => '新鮮グミ',
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

	    echo '<p style="width:24%; float:left; height:20%; margin:5px 5px; background-color:#ff8e8e !important" class="veryhot-tribe"">'.$purpleteam[$i].'</p>';
     elseif( 10 > ${"sum".$i} && ${"sum".$i} >= 5)
	     echo '<p style="width:24%; float:left; height:20%; margin:5px 5px; background-color:#f9bdbd !important" class="hot-tribe">'.$purpleteam[$i].'</p>';
     elseif( -5 >= ${"sum".$i} && ${"sum".$i} >= -10)
	     echo '<p style="width:24%; float:left; height:20%; margin:5px 5px; background-color:#bdd2f9 !important" class="cold-tribe">'.$purpleteam[$i].'</p>';
     elseif(${"sum".$i} <= -10)
	     echo '<p style="width:24%; float:left; height:20%; margin:5px 5px; background-color:#8ec6ff !important" class="verycold-tribe">'.$purpleteam[$i].'</p>';
     else
	     echo '<p style="width:24%; float:left; height:20%; margin:5px 5px; background-color:#a8ffda !important" class="com-tribe">'.$purpleteam[$i].'</p>';
    
};

	?>
</div>
        <div class = 'clearbtnparent'>
        @if($userteam == 34 ||   $userteam == 35 || $userteam == 38 || $userteam == 39 )
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear4a' ], 'method' => 'put']) !!}
                {!! Form::submit('Adjusted temp', ['class' => 'btn btn-lg btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @elseif($userteam == 42 || $userteam == 43)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear4b' ], 'method' => 'put']) !!}
                {!! Form::submit('Adjusted temp', ['class' => 'btn btn-lg btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @elseif($userteam == 36 ||  $userteam == 37 || $userteam == 41)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear4c' ], 'method' => 'put']) !!}
                {!! Form::submit('Adjusted temp', ['class' => 'btn btn-lg btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @elseif($userteam == 40 ||  $userteam == 44 || $userteam == 45)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear4d' ], 'method' => 'put']) !!}
                {!! Form::submit('Adjusted temp', ['class' => 'btn btn-lg btn-block']) !!}
                {!! Form::close() !!}
        </div>

        @endif
        </div>

 <!--色説明-->
   <div class="tribecolor">
        <img class="veryhot" src="/images/veryhot.png"></img>:very hot
        <img class="hot" src="/images/hot.png"></img> :hot
        <img class="good" src="/images/good.png"></img> :comfortable
        <img class="cold" src="/images/cold.png"></img> :cold
        <img class="verycold" src="/images/verycold.png"></img> :very cold
   </div>


@endsection