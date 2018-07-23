@extends('layouts.app')

@include('commons.newnavbar')

@section('content')

<div class="icon-image">
     <a href="{{route('map.get')}}"><img class="logo2" src="/images/RakuAirBlack.png"></img></a>
</div>

<div class="screen">
    <p><span class="yellow-tribe">Yellow tribe's map</span></p>
    <p>---------- Screen ----------</p>
</div>

<div class="tribe">

<?php
$i = 0;
$yellowteam = array(
        10 => 'Eternal Dragon',
        11 => 'kara-age',
        12 => 'Y. Nature',
        13 => 'Avengers',
        14 => '卍Olive卍',
        15 => 'Porsche',
        16 => 'Amigos',
        17 => 'CodeWars',
        18 => 'なだ万',
        19 => 'TERAKOYA',
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

	    echo '<p style="width:24%; float:left; height:20%; margin:5px 5px; background-color:#ff8e8e !important" class="veryhot-tribe">'.$yellowteam[$i].'</p>';
     elseif( 10 > ${"sum".$i} && ${"sum".$i} >= 5)
	     echo '<p style="width:24%; float:left; height:20%; margin:5px 5px; background-color:#f9bdbd !important" class="hot-tribe">'.$yellowteam[$i].'</p>';
     elseif( -5 >= ${"sum".$i} && ${"sum".$i} >= -10)
	     echo '<p style="width:24%; float:left; height:20%; margin:5px 5px; background-color:#bdd2f9 !important" class="cold-tribe">'.$yellowteam[$i].'</p>';
     elseif(${"sum".$i} <= -10)
	     echo '<p style="width:24%; float:left; height:20%; margin:5px 5px; background-color:#8ec6ff !important" class="verycold-tribe">'.$yellowteam[$i].'</p>';
     else
	     echo '<p style="width:24%; float:left; height:20%; margin:5px 5px; background-color:#a8ffda !important" class="com-tribe">'.$yellowteam[$i].'</p>';

    
};
?>

</div>





</div>

        <div class = 'clearbtnparent'>
        @if($userteam == 10 ||   $userteam == 11 || $userteam == 14 || $userteam == 15 )        
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear2a' ], 'method' => 'put']) !!}
                {!! Form::submit('Adjusted temp', ['class' => 'btn btn-lg btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @elseif($userteam == 18 ||   $userteam == 19)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear2b' ], 'method' => 'put']) !!}
                {!! Form::submit('Adjusted temp', ['class' => 'btn btn-lg btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @elseif($userteam == 12 ||   $userteam == 13 || $userteam == 16 || $userteam == 17 )
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear2c' ], 'method' => 'put']) !!}
                {!! Form::submit('Adjusted temp', ['class' => 'btn btn-lg btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @elseif($userteam == 20 ||   $userteam == 21)
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear2d' ], 'method' => 'put']) !!}
                {!! Form::submit('Adjusted temp', ['class' => 'btn btn-lg btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @endif
        </div>


 <!--色説明-->
   <div class="colorinfo">
        <img class="veryhot" src="/images/veryhot.png"></img> : Very hot
        <img class="hot" src="/images/hot.png"></img> : Hot
        <img class="good" src="/images/good.png"></img> : Comfortable
        <img class="cold" src="/images/cold.png"></img> : Cold
        <img class="verycold" src="/images/verycold.png"></img> : Very cold
   </div>


@endsection