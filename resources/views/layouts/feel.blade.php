@extends('layouts.app')

@include('commons.newnavbar')

@section('content')
<div class="icon-image">
    <a href="{{route('map.get')}}"><img class="logo2" src="/images/RakuAirBlack.png"></img></a>
</div>

<div class="feel-page">
    <div class="explanation">How do you feel now?</div>
    
    <div class='hotcontent'>
        <div class='hot-icon'>
                {!! Form::open(['route' => ['hot' ], 'method' => 'put']) !!}
                {!! Form::image('images/hoticon2.png', 'btnSub', ['class' => 'hot-icon_img']) !!}
                {!! Form::close() !!}
        </div>
        <div class='hotbtn'>
                {!! Form::open(['route' => ['hot'], 'method' => 'put']) !!}
                {!! Form::submit('HOT', ['class' => 'btn btn-lg btn-block']) !!}
                {!! Form::close() !!}
        </div>
    </div>
   
    <div class='coldcontent'>
        <div class='cold-icon'>
                {!! Form::open(['route' => ['cold' ], 'method' => 'put']) !!}
                {!! Form::image('images/coldicon2.png', 'btnSub', ['class' => 'cold-icon_img']) !!}
                {!! Form::close() !!}
        </div>
        <div class='coldbtn'>
                {!! Form::open(['route' => ['cold' ], 'method' => 'put']) !!}
                {!! Form::submit('COLD', ['class' => 'btn btn-lg btn-block']) !!}
                {!! Form::close() !!}
        </div>
    </div>
   
    <div class='comcontent'>
        <div class='com-icon'>
                {!! Form::open(['route' => ['com' ], 'method' => 'put']) !!}
                {!! Form::image('images/thumbup.png', 'btnSub', ['class' => 'com-icon_img']) !!}
                {!! Form::close() !!}
        </div>
        <div class='combtn'>
                {!! Form::open(['route' => ['com' ], 'method' => 'put']) !!}
                {!! Form::submit('COMFORTABLE', ['class' => 'btn btn-lg btn-block']) !!}
                {!! Form::close() !!}
        </div>
    </div>
   
</div>
@endsection