@extends('layouts.app')

@include('commons.navbar')

@section('content')
<div class='feelpage'>
   <div class='hotcontent'>
           <div class='hotbtn'>
                {!! Form::open(['route' => ['hot'], 'method' => 'put']) !!}
                {!! Form::submit('HOT', ['class' => 'btn btn-danger btn-lg btn-block']) !!}
                {!! Form::close() !!}
           </div>
           <div class='hot-icon'>
                <img src="#"></img>
           </div>
   </div>
   <div class='coldcontent'>
           <div class='coldbtn'>
                {!! Form::open(['route' => ['cold' ], 'method' => 'put']) !!}
                {!! Form::submit('COLD', ['class' => 'btn btn-primary btn-lg btn-block']) !!}
                {!! Form::close() !!}
           </div>
           <div class='cold-icon'>
                <img src="#"></img>
           </div>
   </div>
</div>
@endsection