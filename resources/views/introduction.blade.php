@extends('layouts.app')

@section('content')

@include('commons.newnavbar')

<div class="icon-image">
    <a href="{{route('map.get')}}"><img class="logo2" src="/images/RakuAirBlack.png"></img></a>
</div>

        <header>
            <h1 class = "intrologo"><img src="images/RakuAirBlack.png" alt="rakuairlogo"><h1>
            <h1 class = "life"><p>~Comfortable Life to you all~</p></h1>
        </header>
    
            
        <div class= "wholebody">
            
            <div class = "body1">
         
            <h1>Introduction</h1>
            <p>Have you ever experienced being in a room that's too cold or too hot?<br>
            Even though you want to adjust the temperature, it might be awkward because you don't know how your doukis feel.<br>
            This suffering ends today, once you use RakuAir.<br>
            RakuAir will make everyone comfortable.<br>
            </p>
            </div>
            
            <div class = "body2">
             <h1>How to Use RakuAir</h1>
             <p> You can manage everything in very simple way.</p>
           </div>   
              
              <div class= "body3">   
               <h2>Procedure</h2>
                 <p><ol>
                     <li>1.Please choose your feeling from <i class="fa fa-heart fa-2x"></i>.</li><br>
                     <li>2.Please check the feeling of your tribe.<br>
                     You can also check the feel of the team by clicking the colored detail box.</li><br>
                     <li>3.Please adjust air conditionar(A/C) as it says. </li><br>
                     <li>4.After adjusting, plase click "Adjusted" button to refresh data.</li>
                 </ol></p>
             </div>
             
             
             <div class= "body4">
                <h2>Bar on the right</h2>
             <ol>
            　　 <li><p><i class="fa fa-info-circle fa-2x" style = "font-size:27px"></i>  : Current page you are looking to. You can check how it works and details.</p></i></li>
            　　 <li class = "manipulate"><p><i class="fa fa-book fa-2x" style = "font-size:27px"></i>  : You can check which A/C to manipulate.</p></i></li>
                 <li class = "feel"><p><i class="fa fa-heart fa-2x" style = "font-size:27px"></i>  : You can claim your feeling whenever and wherever you like.</p></i></li>
                 <li class = "data"><p><i class="fa fa-bar-chart-o fa-2x" style = "font-size:27px"></i>  : Showing each data from lots of perspectives.</p></i></li>
                 <li class = "maplogo"><p><i class="fa fa-map-marker fa-2x" style = "font-size:27px"></i> : You can see where is comfortable using the map of training room.</p></i></li>
                 <li class = "logout"><p><i class="fa fa-power-off fa-2x" style = "font-size:27px"></i>  : Logging out.</p></i></li>
              </ol>
             </div>
             
             
             <div class= "body5">
              <h1>Uniqueness</h1>
              
               <p>There is a secret in this wonderful application. <br>
                  That is, Point System. We make points from -6 to 6 to calculate exact data.<br>
                  The points are based on sex and body type and so on.</p>
               
              　　　<ol>
              　　　  ex：Atsugari  Man  →　hot:1pt   comfortable:0pt   cold:-6pt<br>
              　　　  　　  Samugari Woman　→　hot:6pt   comfortable:0pt  cold:-2pt<br>
              　　　</ol>
              　<p>　As shown, RakuAir makes it possible to show exact data. <br>
              　　THIS IS RAKUAIR.</p>
              
             </div> 
              
        </div>
        </body>
        
        
        <div class = "last-message">
        
            <p>Now, let's say hello to Comfortable Life!</p>
        
        </div>
        
        <footer class="col-lg-12 footerintro">
            &copy; 2018 KEMKOW All Rights Reserved.
        </footer>
        
        
</html>

@endsection