@extends('layouts.app')

@include('commons.newnavbar')

@section('content')

<div class="icon-image">
    <a href="{{route('map.get')}}"><img class="logo2" src="/images/RakuAirBlack.png"></img></a>
</div>

<div class="manipulationpage">
    <div class="explanation2">How to Use</div>
        <div class="asakai">
            <h1>Where to adjust temperature</h1><br>
                <p>The colors of the remote controllers are equal to the colors of the areas (tribes).</p>
                <p>*The green area is where 2 tribes are mixed.</p>
                <p>Ex.) Green area of Pink tribe >>> Go to the yellow/green controller. </p>
                <img class="map" src="/images/Map.png"　alt="Asakai Theatre A"></img>
        </div>
    
        
        <div class="remote">
            <h1>How to manipulate the controllers</h1><br>
                <p>Each button (A-G) equals to the areas (A-G) shown on the map.</p>
                <p>*Not all the controllers have A-G.</p>
                <ol>
                    Ex.) Area C >>> <br>
                      1.Press the button "C" twice.<br>
                      2.Press the button "室温調節" to adjust temperature.<br>
                 </ol>
                <div class=remotes>
                    <img class="remote1" src="/images/RemoteClose.jpg"></img>
                    <img class="remote2" src="/images/RemoteOpen.jpg"></img>
                </div>
        </div>
    </div>
</div>

<footer class="col-lg-12 footermani">
            &copy; 2018 KEMKOW All Rights Reserved.
</footer>
@endsection