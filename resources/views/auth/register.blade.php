@extends('layouts.app')

@section('content')
<div class="content">
    <div class="text-center">
        <h2>Sign up</h2>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    <p class='sofia'>Name</p>
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    <p class='sofia'>Password</p>
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    <p class='sofia'>Confirmation</p>
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    <p class='sofia'>Team name</p>
                    {!! Form::select('team', Config::get('array.teams'), null, ['data-rel' => 'chosen']) !!}
                </div>
                
                <div class="form-group">
                    <p class='sofia'>Sex</p>
                    {!! Form::select('sex', ['Male', 'Female']) !!}
                </div>
                
                <div class="form-group">
                    <p class='sofia'>Type</p>
                    {!! Form::select('size', ['atsugari', 'Nomal', 'Samugari']) !!}
                </div>
                

                {!! Form::submit('Sign up', ['class' => 'btn btn-success btn-block']) !!}
            {!! Form::close() !!}
            
            <p class=loginhere>{!! link_to_route('login', 'Already have an account?') !!}</p>
        </div>
    </div>
</div>
@endsection