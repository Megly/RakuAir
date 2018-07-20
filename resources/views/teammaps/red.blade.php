@extends('layouts.app')

@include('commons.newnavbar')

@section('content')

<div class="icon-image">
     <a href="{{route('map.get')}}"><img class="logo2" src="/images/RakuAirBlack.png"></img></a>
</div>

<div class="tribe">
<?php
$i = 0;
$redteam = array(
        1 => 'youはたまご',
        2 => 'Ra Ra Ra RIZAP',
        3 => 'BoB',
        4 => 'Fortune',
        5 => 'Siésta',
        6 => 'ぽなるけみり',
        7 => 'The U.K',
        8 => 'Kolkata (カルカッタ)',
        9 => 'TWICE');
        
 ${"team".$i} = NULL;
for ($i=1; $i<10; $i++){
 ${"team".$i} = App\User::all()->where('team',$i);
 	 ${"sum".$i} = 0;
 	foreach( ${"team".$i} as $feelings){
	${"sum".$i} = ${"sum".$i} + $feelings->feel;
}
     if(${"sum".$i}>=10)
	    echo '<p style="background-color:#ff8e8e !important">'.$redteam[$i].' is ☀very hot☀　2℃下げましょう</p>';
     elseif( 10 > ${"sum".$i} && ${"sum".$i} >= 5)
	     echo '<p style="background-color:#f9bdbd !important">'.$redteam[$i].' is ☀hot☀　1℃下げましょう</p>';
     elseif( -5 >= ${"sum".$i} && ${"sum".$i} >= -10)
	     echo '<p style="background-color:#bdd2f9 !important">'.$redteam[$i].' is ❆cold❆　1℃上げましょう</p>';
     elseif(${"sum".$i} <= -10)
	     echo '<p style="background-color:#8ec6ff !important">'.$redteam[$i].' is ❆very cold❆　2℃上げましょう</p>';
     else
	     echo '<p style="background-color:#a8ffda !important">'.$redteam[$i].' is comfortable</p>';
    
};

	?>

</div>

        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear1a' ], 'method' => 'put']) !!}
                {!! Form::submit('1a clear', ['class' => 'btn btn-lg btn-block']) !!}
                {!! Form::close() !!}
        </div>
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear1b' ], 'method' => 'put']) !!}
                {!! Form::submit('1b clear', ['class' => 'btn btn-lg btn-block']) !!}
                {!! Form::close() !!}
        </div>
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear2a' ], 'method' => 'put']) !!}
                {!! Form::submit('2a clear', ['class' => 'btn btn-lg btn-block']) !!}
                {!! Form::close() !!}
        </div>
        <div class='clearbtn'>
                {!! Form::open(['route' => ['clear2b' ], 'method' => 'put']) !!}
                {!! Form::submit('2b clear', ['class' => 'btn btn-lg btn-block']) !!}
                {!! Form::close() !!}
        </div>
@endsection