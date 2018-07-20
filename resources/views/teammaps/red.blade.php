@extends('layouts.app')

@include('commons.newnavbar')

@section('content')

<div class="icon-image">
     <a href="{{route('map.get')}}"><img class="logo2" src="/images/RakuAirBlack.png"></img></a>
</div>

<div class="screen">
    <p><span class="red-tribe">Red tribe's map</span></p>
    <p>---------- Screen ----------</p>
</div>

<div class="tribe">

<?php
$i = 0;
$redteam = array(
        1 => 'youはたまご',
        2 => 'Ra Ra Ra RIZAP',
        3 => 'Siésta',
        4 => 'BoB',
        5 => 'ぽなるけみり',
        6 => 'Kolkata (カルカッタ)',
        7 => 'Fortune',
        8 => 'The U.K',
        9 => 'TWICE');
$user = \Auth::user();
$userteam = $user->team;        
 ${"team".$i} = NULL;
    for ($i=1; $i<10; $i++){
 ${"team".$i} = App\User::all()->where('team',$i);
 	 ${"sum".$i} = 0;
 	foreach( ${"team".$i} as $feelings){
	${"sum".$i} = ${"sum".$i} + $feelings->feel;
}


     if(${"sum".$i}>=10)

	    echo '<p style="width:32%; float:left; height:20%; margin:5px 5px; background-color:#ff8e8e !important" class="veryhot-tribe">'.$redteam[$i].'</p>';
     elseif( 10 > ${"sum".$i} && ${"sum".$i} >= 5)
	     echo '<p style="width:32%; float:left; height:20%; margin:5px 5px; background-color:#f9bdbd !important" class="hot-tribe">'.$redteam[$i].'</p>';
     elseif( -5 >= ${"sum".$i} && ${"sum".$i} >= -10)
	     echo '<p style="width:32%; float:left; height:20%; margin:5px 5px; background-color:#bdd2f9 !important" class="cold-tribe">'.$redteam[$i].'</p>';
     elseif(${"sum".$i} <= -10)
	     echo '<p style="width:32%; float:left; height:20%; margin:5px 5px; background-color:#8ec6ff !important" class="verycold-tribe">'.$redteam[$i].'</p>';
     else
	     echo '<p style="width:32%; float:left; height:20%; margin:5px 5px; background-color:#a8ffda !important" class="com-tribe">'.$redteam[$i].'</p>';

    
};
?>

</div>

        <div class = 'clearbtnparent'>
        @if($userteam == 1 ||   $userteam == 2 || $userteam == 4)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear1a' ], 'method' => 'put']) !!}
                {!! Form::submit('1a clear', ['class' => 'btn btn-lg btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @elseif($userteam == 7)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear1b' ], 'method' => 'put']) !!}
                {!! Form::submit('1b clear', ['class' => 'btn btn-lg btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @elseif($userteam == 3)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear2a' ], 'method' => 'put']) !!}
                {!! Form::submit('2a clear', ['class' => 'btn btn-lg btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @elseif($userteam == 5 ||  $userteam == 6 || $userteam == 8 || $userteam == 9)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear2b' ], 'method' => 'put']) !!}
                {!! Form::submit('2b clear', ['class' => 'btn btn-lg btn-block']) !!}
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