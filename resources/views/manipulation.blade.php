@extends('layouts.app')

@include('commons.newnavbar')

@section('content')

<div class="icon-image">
    <a href="{{route('map.get')}}"><img class="logo2" src="/images/RakuAirBlack.png"></img></a>
</div>

<div class='manipulationpage'>
    <div class="explanation">How can we adjust temperature in each areas?</div>
        <div class="asakai">
            <h1>Sketch（Asakai Theatre A）</h1><br>
                <p>The colors of the remote controllers equivalent to the colors of the areas (tribes).</p>
                <p>*The area of green stands for the area which 2 tribes are mixed.</p>
                <p>Ex.) area B of Pink tribe >>> Go to the yellow/green controller. </p>
                <img class="map" src="/images/Map.png"></img><br><br><br><br><br><br><br>
        </div>
    
        
        <div class="remote">
            <h1>How to manipulate the controllers</h1><br>
                <p>Each buttoms in the red line equivalent to the areas shown on the map.</p>
                <p>*Not all the controllers have A-G.</p>
                <p>Ex.) area C >>> 1.Press the buttom "C" twice.  2.Press the buttom "室温調節" to adjust temperature.</p>
                <div class=remotes>
                    <img class="remote1" src="/images/RemoteClose.jpg"></img>
                    <img class="remote2" src="/images/RemoteOpen.jpg"></img>
                </div>
        </div>
    </div>
</div>
@endsection