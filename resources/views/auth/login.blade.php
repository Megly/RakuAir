@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h2>Log in</h2>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    <p class='sofia'>Nickname</p>
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    <p class='sofia'>Password</p>
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('Log in', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}

            <p class=loginhere>{!! link_to_route('signup.get', 'New user? Sign up now!') !!}</p>
        </div>
    </div>
@endsection