@extends('layouts.app')

@section('content')
    @if (Auth::check())
       @include('layouts.feel')
        
    @else
            <div class="text-center">
                <img class=logo1 src="images/RakuAirBlack.png"></img><br>
                <!--{!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}<br><br>-->
            <div class="btn-group">
                <a href="{{ route('signup.get')}}" class="btn square_btn">Sign up</a>
                
                <!--{!! link_to_route('login', 'Login!', null, ['class' => 'btn btn-lg btn-success']) !!}-->
                <a href="{{ route('login')}}"class="btn square_btn">Log in</a>
            </div>
            </div>
    @endif
@endsection