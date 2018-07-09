@extends('layouts.app')

@section('content')
            
          <h1> <?php 
                 $result = DB::table('users') ->sum('feel');
                 echo $result;
            ?>
</h1>            
@endsection