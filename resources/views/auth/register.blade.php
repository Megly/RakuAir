@extends('layouts.app')

<!--@include('commons.navbar')-->

@section('content')
<div class="icon-image">
    <a href="{{route('map.get')}}"><img class="logo2" src="/images/RakuAirBlack.png"></img></a>
</div>

<div class="container-fluid">
    <div class="row">
        


    　<p class="ex1">Yes RakuAir</p>
      <p class="ex1">Yes Life</p>
     
     
     
    
      <p class="ex2"></p>
    
    </div>
    <!--<div class="sighup-title">-->
    <!--    <p>Sign up</p>-->
</div>


        <div class="col-sm-6 col-sm-offset-3">

            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    <p class='sofia'>Name</p>
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => "name"]) !!}
                </div>

                <div class="form-group">
                    <p class='sofia'>Password</p>
                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => "Password"]) !!}
                </div>

                <div class="form-group">
                    <p class='sofia'>Confirmation</p>
                    {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => "Confirmation"]) !!}
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
                

                {!! Form::submit('Sign up', ['class' => 'btn btn-signup btn-block']) !!}
                {!! Form::close() !!}
            
            <p class=loginhere>{!! link_to_route('login', 'Already have an account?') !!}</p>
        </div>
    </div>
</div>
@endsection