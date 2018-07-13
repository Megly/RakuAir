@extends('layouts.app')

@include('commons.navbar')

@section('content')
<div class='feelpage'>
   <div class='hotcontent'>
           <div class='square_btn'>
                {!! Form::open(['route' => ['hot'], 'method' => 'put']) !!}
                {!! Form::submit('HOT', ['class' => 'btn btn-danger btn-lg btn-block']) !!}
                {!! Form::close() !!}
           </div>
           <div class='hot-icon'>
                <img src="images/hoticon.png"></img>
           </div>
   </div>
   <div class='coldcontent'>
           <div class='square_btn'>
                {!! Form::open(['route' => ['cold' ], 'method' => 'put']) !!}
                {!! Form::submit('COLD', ['class' => 'btn btn-primary btn-lg btn-block']) !!}
                {!! Form::close() !!}
           </div>
           <div class='cold-icon'>
                <img src="images/coldicon.png"></img>
           </div>
   </div>
</div>
@endsection