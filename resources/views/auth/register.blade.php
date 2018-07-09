@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Sign up</h1>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password_confirmation', 'Confirmation') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('team', 'Team Name') !!}
                    {!! Form::select('team', Config::get('array.teams'), null, ['data-rel' => 'chosen']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('sex', 'Sex') !!}
                    {!! Form::select('sex', ['Male', 'Female']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('size', 'Type') !!}
                    {!! Form::select('size', ['atsugari', 'Nomal', 'Samugari']) !!}
                </div>
                

                {!! Form::submit('Sign up', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection