@extends('layouts.app')

@include('commons.newnavbar')

@section('content')

<div class="icon-image">
    <a href="{{route('map.get')}}"><img class="logo2" src="/images/RakuAirBlack.png"></img></a>
</div>

<div class='manipulationpage'>
    <div class="explanation">各エリアの温度調整／リモコンの操作方法</div>
        <div class="asakai">
            <h1>見取り図（Asakai Theatre A）</h1><br>
                <p>リモコンの色が各エリア（トライブ）の色に相当します。</p>
                <p>※緑のエリアはトライブが重なっている部分を示しています。</p>
                <p>（例）PinkトライブのエリアB　→　黄色/緑のリモコン</p>
                <img class="map" src="/images/Map.png"></img><br><br><br><br><br><br><br>
        </div>
    
        
        <div class="remote">
            <h1>リモコンの見方</h1><br>
                <p>赤枠内のボタンが各エリアに相当します。</p>
                <p>（例）エリアC　→　①Cボタンをpush　②「室温調節」ボタンで温度調節</p><br>
                <div class=remotes>
                    <img class="remote1" src="/images/RemoteClose.jpg"></img>
                    <img class="remote2" src="/images/RemoteOpen.jpg"></img>
                </div>
        </div>
    </div>
</div>
@endsection