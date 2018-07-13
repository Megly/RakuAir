@extends('layouts.app')

@section('content')
    @if (Auth::check())
       @include('layouts.feel')
        
    @else
        <div class="text-center">
            <img class=logo1 src="images/RakuAirBlack.png"></img><br>
                <div class = "col-sm-offset-1 col-sm-5">
                <a href="{{ route('signup.get')}}" class="btn square_btn1">Sign up</a></div>
                <div class = "col-sm-5">
                <a href="{{ route('login')}}" class="btn square_btn2">Log in</a></div>
            </div>
    @endif
@endsection