@extends('layouts.app')

@include('commons.newnavbar')

@section('content')

<div class="icon-image">
    <a href="{{route('map.get')}}"><img class="logo2" src="/images/RakuAirBlack.png"></img></a>
</div>

<div class="manipulationpage">
    <div class="explanation2">How to Use</div>
        <div class="asakai">
            <h1>Where to adjust the room's temperature</h1><br>
                <p>The colors of the remote controllers are equal to the colors of the areas.</p>
                <p>Ex.) When you are in 1A area, you should check the panal 1 and adjust it.</p>
                <img class="aircon-map" src="/images/Mapforfamiliyday.png"　alt="Asakai Theatre A"></img>
        </div>
    
        
        <div class="remote">
            <h1>How to manipulate the controllers</h1><br>
                <p>Each button (A-G) equals to the areas (A-G) shown on the map.</p>
                <p>(*Not all the controllers have A-G.)</p><br>
            <div class="example-maniplate">    
                    <p>Ex.) Area C</p>
                    <p>1.Press the button "C" twice.</p>
                    <p>2.Press the button "室温調節" to adjust temperature.</p>
            </div>
                <div class=remotes>
                    <img class="remote1" src="/images/aircon-panel1.png"></img>
                    <img class="remote2" src="/images/aircon-panel2.png"></img>
                </div>
        </div>
    </div>
</div>

<footer class="col-lg-12 footermani">
            &copy; 2018 KEMKOW All Rights Reserved.
</footer>
@endsection