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
                <img class="aircon-map" src="/images/Meglymap.jpg"　alt="Asakai Theatre A"></img>
        </div>
    
        
        <div class="remote">
            <h1>How to manipulate the controllers</h1><br>
                <p>Each button (A-G) equals to the areas (A-G) shown on the map.</p>
                <p>(*Not all the controllers have A-G.)</p><br>
            <div class="example-maniplate">    
                    <p>Ex.) Area C</p>
                    <p>①Press the button "C" twice.(the picture on the left)</p>
                    <p>②Open the cover and press the "室温調節" button <br>to adjust the room's temperature.(the picture on the right)</p>
            </div>
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