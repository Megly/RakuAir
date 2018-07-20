@extends('layouts.app')

@section('content')
    @if (Auth::check())
       @include('layouts.feel')
        
    @else
        
<img class="sky" src="../images/sky.jpg"></img>

	 <div class="text-center">
	        <div class="logo-img">
                <img class=logo1 src="images/RakuAirBlack.png"></img>
            </div>
            <div class="btn-group">
                <a href="{{ route('signup.get')}}" class="btn square_btn1">Sign up</a>
                <a href="{{ route('login')}}" class="btn square_btn2">Log in</a>
            </div>
    </div>
    
    @endif
@endsection