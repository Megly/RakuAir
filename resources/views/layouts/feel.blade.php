@extends('layouts.app')

@section('content')

 {!! Form::open(['route' => 'submit.post']) !!}

                 <div class="form-group">
                    {!! Form::label('feel', 'Feel') !!}
                    {!! Form::select('feel', ['Hot', 'Cold']) !!}
                    
                </div>
                    {!! Form::submit('submit', ['class' => 'btn btn-primary btn-block'])!!}
 {!! Form::close() !!}
@endsection