@extends('layouts.app')

@include('commons.navbar')

@section('content')

<div class='feelpage'>
    <div class="explanation">How do you feel now??</div>
    
    <div class='hotcontent'>
        <div class='hot-icon'>
                {!! Form::open(['route' => ['hot' ], 'method' => 'put']) !!}
                {!! Form::image('images/hoticon2.png', 'btnSub', ['class' => 'hot-icon_img']) !!}
                {!! Form::close() !!}
        </div>
        <div class='hotbtn'>
                {!! Form::open(['route' => ['hot'], 'method' => 'put']) !!}
                {!! Form::submit('HOT', ['class' => 'btn  btn-lg btn-block']) !!}
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
   
</div>
@endsection