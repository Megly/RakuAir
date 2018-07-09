@extends('layouts.app')

@section('content')



        {!! Form::open(['route' => ['hot'], 'method' => 'put']) !!}
        {!! Form::submit('HOT', ['class' => 'btn btn-danger btn-xs']) !!}
        {!! Form::close() !!}
        
        {!! Form::open(['route' => ['cold' ], 'method' => 'put']) !!}
        {!! Form::submit('COLD', ['class' => 'btn btn-primary btn-xs']) !!}
        {!! Form::close() !!}

@endsection