@extends('layouts.app')

@section('content')
<div class='feelbtn'>
   <div class='hotcontent'>
           <div class='hotbtn'>
                {!! Form::open(['route' => ['hot'], 'method' => 'put']) !!}
                {!! Form::submit('HOT', ['class' => 'btn btn-danger btn-lg btn-block']) !!}
                {!! Form::close() !!}
           </div>
           <div class='hot-icon'>
                <img src="http://livedoor.blogimg.jp/jin115/imgs/6/1/612dd8c5.jpg"></img>
           </div>
   </div>
   <div class='coldcontent'>
           <div class=coldbtn>
                {!! Form::open(['route' => ['cold' ], 'method' => 'put']) !!}
                {!! Form::submit('COLD', ['class' => 'btn btn-primary btn-lg btn-block']) !!}
                {!! Form::close() !!}
           </div>
           <div class='cold-icon'>
                <img src="https://i.ytimg.com/vi/a-hPtA5JXH8/maxresdefault.jpg"></img>
           </div>
   </div>
</div>
@endsection