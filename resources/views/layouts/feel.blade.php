@extends('layouts.app')

@section('content')



        {!! Form::open(['route' => ['hot'], 'method' => 'put']) !!}
        {!! Form::submit('HOT', ['class' => 'btn btn-danger btn-xs']) !!}
        {!! Form::close() !!}
        <!--{!! $user = App\User::find(2)->id !!}-->
        {!! Form::open(['route' => ['cold' ], 'method' => 'put']) !!}
        {!! Form::submit('COLD', ['class' => 'btn btn-primary btn-xs']) !!}
        {!! Form::close() !!}

@endsection