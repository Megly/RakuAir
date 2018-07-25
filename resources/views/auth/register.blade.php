@extends('layouts.app')

@section('content')
<div class="icon-image">
    <a href="{{route('welcome.get')}}"><img class="logo2" src="/images/RakuAirBlack.png"></img></a>
</div>

<div class="container-fluid">
    　<p class="ex1">Welcome to RakuAir!</p>
</div>

<div class="row">
    <div class="col-sm-6 col-sm-offset-3">

            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    <p class='sofia'>Name</p>
                    <div class="form">
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => "name"]) !!}
                    </div>
                </div>

                <div class="form-group">
                    <p class='sofia'>Password</p>
                    <div class="form">
                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => "Password"]) !!}
                    </div>
                </div>

                <div class="form-group">
                    <p class='sofia'>Password (confirmation)</p>
                    <div class="form">
                    {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => "Password (confirmation)"]) !!}
                    </div>
                </div>
                
                <div class="form-group">
                    <p class='sofia'>Team name</p>
                    <div class="form">
                    {!! Form::select('team', Config::get('array.teams'), null, ['data-rel' => 'chosen']) !!}
                    </div>
                </div>
                
                <div class="form-group">
                    <p class='sofia'>Sex</p>
                    <div class="form">
                    {!! Form::select('sex', ['Male', 'Female']) !!}
                    </div>
                </div>
                
                <div class="form-group">
                    <p class='sofia'>Type</p>
                    <div class="form">
                    {!! Form::select('size', ['atsugari', 'Nomal', 'Samugari']) !!}
                    </div>
                </div>
                

                {!! Form::submit('Sign up!', ['class' => 'btn square_btn1 btn-default btn-block btn-signup']) !!}
                {!! Form::close() !!}
            
            <p class=loginhere>{!! link_to_route('login', 'Already have an account?') !!}</p>
    </div>
</div>

<footer class="col-lg-12 footerreg">
            &copy; 2018 KEMKOW All Rights Reserved.
</footer>
@endsection