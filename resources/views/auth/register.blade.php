@extends('layouts.app')

@section('content')
<div class="content">
<div class="left-content">
    <p><span class="debu">デブ</span>と<span class="gari">ガリ</span>の<br>争いを<br>終わらせたい。</p>
    
    
    
    
    
    



</div>
<div class="right-content">
    <div class="text-center">
        <h2>Sign up</h2>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

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
                

                {!! Form::submit('Sign up', ['class' => 'square_btn']) !!}
                {!! Form::close() !!}
            
            <p class=loginhere>{!! link_to_route('login', 'Already have an account?') !!}</p>
        </div>
    </div>
    </div>
</div>
@endsection