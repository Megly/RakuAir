@extends('layouts.app')

@section('content')
    @if (Auth::check())
       @include('layouts.feel')
    @else
    
	 <div class="text-center">
	        <div class="logo-img">
                <img class=logo1 src="images/RakuAirBlack.png"></img>
            </div>
            
            
          
             
             
            <div class="btn-group">
                <a href="{{ route('tutorial.get')}}" class="btn square_btn1">Sign up</a>
                <a href="{{ route('login')}}" class="btn square_btn2">Log in</a>
            </div>
    </div>
    
     <footer class="col-lg-12 footerwelcome">
          &copy; 2018 KEMKOW All Rights Reserved.
    </footer>
    
       <!--<div class= "welcomepro">   -->
       <!--          <div class = "step"><img src = "images/point.png" alt = "step1"><figcaption>CHOOSE!!</figcaption></div>-->
       <!--          <div class = "step"><img src = "images/AC.jpg" alt = "step2"><figcaption>CHECK!!</figcaption></div>-->
       <!--          <div class = "step"><img src = "images/map.jpg" alt = "step3"><figcaption>ADJUST!!</figcaption></div>-->
                     
       <!-- </div>-->
      
     @endif

    
@endsection