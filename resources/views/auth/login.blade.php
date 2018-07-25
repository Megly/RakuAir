@extends('layouts.app')


@section('content')
<div class="icon-image">
    <a href="{{route('welcome.get')}}"><img class="logo2" src="/images/RakuAirBlack.png"></img></a>
</div>

<div class="loginpage">
    <div class="container-fluid">
        <p class="ex1">Log in</p>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    <p class='sofia'>Nickname</p>
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => "Nickname"]) !!}
                </div>

                <div class="form-group">
                    <p class='sofia'>Password</p>
                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => "Password"]) !!}
                </div>

                {!! Form::submit('Log in!', ['class' => 'btn square_btn2 btn-default btn-block btn-signup']) !!}
                {!! Form::close() !!}

            <p class=loginhere>{!! link_to_route('signup.get', 'New user? Sign up now!') !!}</p>
        </div>
    </div>
</div>

<footer class="col-lg-12 footerlogin">
            &copy; 2018 KEMKOW All Rights Reserved.
</footer>

@endsection