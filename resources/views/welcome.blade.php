@extends('layouts.app')

@section('content')
    @if (Auth::check())
       @include('layouts.feel')
        
    @else
            <div class="text-center">
                <h1>RakuAir (insert logo pic)</h1><br>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
                <p>or</p>
                {!! link_to_route('login', 'Login!', null, ['class' => 'btn btn-lg btn-success']) !!}
            </div>
    @endif
@endsection