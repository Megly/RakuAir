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
for ($i=34; $i<46; $i++){
 ${"team".$i} = App\User::all()->where('team',$i);
 	 ${"sum".$i} = 0;
 	foreach( ${"team".$i} as $feelings){
	${"sum".$i} = ${"sum".$i} + $feelings->feel;
}
     if(${"sum".$i}>=10)
	    echo '<p style="background-color:#ff8e8e !important">'.$purpleteam[$i].' is ☀very hot☀　2℃下げましょう</p>';
     elseif( 10 > ${"sum".$i} && ${"sum".$i} >= 5)
	     echo '<p style="background-color:#f9bdbd !important">'.$purpleteam[$i].' is ☀hot☀　1℃下げましょう</p>';
     elseif( -5 >= ${"sum".$i} && ${"sum".$i} >= -10)
	     echo '<p style="background-color:#bdd2f9 !important">'.$purpleteam[$i].' is ❆cold❆　1℃あげましょう</p>';
     elseif(${"sum".$i} <= -10)
	     echo '<p style="background-color:#8ec6ff !important">'.$purpleteam[$i].' is ❆very cold❆　2℃上げましょう</p>';
     else
	     echo '<p style="background-color:#a8ffda !important">'.$purpleteam[$i].' is comfortable</p>';
    
    
};

	?>

</div>
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear4a' ], 'method' => 'put']) !!}
                {!! Form::submit('4a clear', ['class' => 'btn btn-lg btn-block']) !!}
                {!! Form::close() !!}
        </div>
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear4b' ], 'method' => 'put']) !!}
                {!! Form::submit('4b clear', ['class' => 'btn btn-lg btn-block']) !!}
                {!! Form::close() !!}
        </div>
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear4c' ], 'method' => 'put']) !!}
                {!! Form::submit('4c clear', ['class' => 'btn btn-lg btn-block']) !!}
                {!! Form::close() !!}
        </div>
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear4d' ], 'method' => 'put']) !!}
                {!! Form::submit('4d clear', ['class' => 'btn btn-lg btn-block']) !!}
                {!! Form::close() !!}
        </div>
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear4g' ], 'method' => 'put']) !!}
                {!! Form::submit('4g clear', ['class' => 'btn btn-lg btn-block']) !!}
                {!! Form::close() !!}
        </div>
@endsection